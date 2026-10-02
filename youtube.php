<?php

use \App\Models\Event;

  $API_key    = 'AIzaSyARzKKAadQaZ7s-4wmib8XE3BBlEaIAlpY';
  $channelID  = 'UCPr_vDaKlT1hbtCYQoibfTw';
  $maxResults = 50;
  $nextPage   = '';

  //use function PHPSTORM_META\type;
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
                        print("<span style='color: green'>Mise à jour : ({$date}) {$item['ev_titre']} || {$item['ev_interv']} => {$data->items[0]->id}</span><br>");
                    } catch(Exception $e) {
                        print("<span style='color: red'>Échec de la mise à jour : ({$date}) {$item['ev_titre']} || {$item['ev_interv']} => {$data->items[0]->id}</span><br>");
                    }
                } else {
                    print("<span style='color: gray'>À jour : ({$date}) {$item['ev_titre']} || {$item['ev_interv']} => {$data->items[0]->id}</span><br>");
                }
            } else {
                print("<span style='color: orange'>Conférence du {$recording_date} absente de la base de données ({$data->items[0]->snippet->title})</span><br>");
            }
        } else {
            print("<span style='color: red'>Date d'enregistrement absente dans la vidéo : {$data->items[0]->snippet->title}</span><br>");
        }
    }
    /*
    */
    print("</p>");
  } catch (Exception $err) {
    var_export($err);
  }
?>
