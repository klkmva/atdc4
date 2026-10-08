<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Event;

class Youtube extends Controller
{
    public function __invoke() {
        $API_key = env('YT_API_KEY');
        $channelID  = 'UCPr_vDaKlT1hbtCYQoibfTw';
        $maxResults = 50;
        $nextPage   = '';
        $result = [
            'update' => 0,
            'error' => 0,
            'nothing' => 0,
            'no_date' => [],
            'not_in_db' => [],
            'fatal_error' => null,
            ];

        try {
            $ids = [];
            $items = [];
            foreach (Event::all() as $event) {
                $items[$event->date] = $event;
            }

            do {
                // Appels API pour récupérer la liste des ids des vidéos de la chaîne
                $myQuery = "https://www.googleapis.com/youtube/v3/search?key=$API_key&channelId=$channelID&fields=nextPageToken,items(id(videoId))&part=id&order=date&maxResults=$maxResults&pageToken=$nextPage";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_URL, $myQuery);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_VERBOSE, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                $response = curl_exec($ch);
                $data = json_decode($response);
                foreach ($data->items as $item) {
                    if (isset($item->id->videoId)) {
                        array_push($ids, $item->id->videoId);
                    }
                }
                if (isset($data->nextPageToken) and $data->nextPageToken != $nextPage) {
                    $continu = true;
                    $nextPage = $data->nextPageToken;
                } else {
                    $continu = false;
                }
            } while ($continu);

            foreach ($ids as $id) {
                // Parcours des vidéos récupérés ci-dessus
                $myQuery = "https://www.googleapis.com/youtube/v3/videos?key=$API_key&channelId=$channelID&fields=items(id,recordingDetails(recordingDate),snippet(title))&part=id,recordingDetails,snippet&id={$id}";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_URL, $myQuery);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_VERBOSE, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                $response = curl_exec($ch);
                $data = json_decode($response);
                if (property_exists($data->items[0]->recordingDetails, 'recordingDate')) {
                    $recording_date = substr($data->items[0]->recordingDetails->recordingDate, 0, 10);
                    if (array_key_exists($recording_date, $items)) {
                        $item = $items[$recording_date];
                        $date = $item->date;
                        if ($item->youtube_id != $data->items[0]->id) {
                            try {
                                $item->youtube_id = $data->items[0]->id;
                                $item->save();
                                $result['update'] += 1;
                            } catch (\Exception $e) {
                                $result['error'] += 1;
                            }
                        } else {
                            $result['nothing'] += 1;
                        }
                    } else {
                        array_push($result['not_in_db'], ['date' => $recording_date, 'title' => $data->items[0]->snippet->title]);
                    }
                } else {
                    array_push($result['no_date'], ['title' => $data->items[0]->snippet->title]);
                }
            }
        } catch (\Exception $err) {
            $result['fatal_error'] = $err;
        }
        return view('yt.youtube', ['result' => $result]);
    }
}
