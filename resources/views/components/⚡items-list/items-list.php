<?php

use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use App\Models\News;
use App\Models\Event;
use App\Models\Speaker;
use App\Models\EventSpeaker;

new class extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $perPage = 10;
    public $type = null;
    public $path = null;
    public $ymax = null;
    public $ymin = null;
    public $year = null;
    public $search = null;
    public $model = null;

    public function render() {
        if ($this->type == 'news') {
            return $this->view(['items' => News::where('date', '>=', \now())->orderBy('date', 'desc')->get()]);
        } else {
            if ($this->path == '/') {
                return $this->view(['items' => Event::where('date', '>=', \now())->orderBy('date', 'desc')->get()]);
            } else {
                if ($this->year) {
                    return $this->view(['items' => Event::where('date', '<', \now())->where('date', 'LIKE', $this->year . '%')->orderBy('date', 'desc')->get()]);
                } else {
                    if ($this->search && $this->model) {
                        if ($this->model == 'event') {
                            return $this->view(['items' => Event::whereRaw("MATCH (title, subtitle, info) AGAINST('" . $this->search . "' IN BOOLEAN MODE)")->orderBy('date', 'desc')->get()]);
                        } else {
                            $speakers = Speaker::query()->whereRaw("MATCH (first_name, last_name) AGAINST('". $this->search . "' IN BOOLEAN MODE)")->pluck('id')->all();
                            $events = EventSpeaker::whereIn('speaker_id', $speakers)->pluck('event_id')->all();
                            return $this->view(['items' => Event::whereIn('id', $events)->orderBy('date', 'desc')->get()]);
                        }
                    }
                }
            }
        }
    }

    public function mount()
    {
        $path = \parse_url(url()->current(), PHP_URL_PATH);
        $this->path = (is_null($path) || $path == '') ? '/' : $path;
    }
};
