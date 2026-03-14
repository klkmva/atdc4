<?php

use Livewire\Component;
use App\Models\Event;
use Carbon\Carbon;

new class extends Component {

    public $ymax = null;
    public $ymin = null;
    public $year = null;
    public $search = null;
    public $model = null;

    public function mount($year = null) {
        if (!\is_null($year) || \parse_url(url()->current(), PHP_URL_PATH) == '/archives') {
            $yesterday = Carbon::yesterday()->isoFormat('YYYY-MM-DD');
            $this->ymin = \strval(Carbon::parse(Event::where('date', '<=', $yesterday)->orderBy('date', 'asc')->first()->date)->year);
            $this->ymax = \strval(Carbon::parse(Event::where('date', '<=', $yesterday)->orderBy('date', 'desc')->first()->date)->year);
            $this->year = is_null($year) ? $this->ymax : $year;
        }
        else {
            if (request()['search'] && request()['model']) {
                $this->search = request()['search'];
                $this->model = request()['model'];
            }
        }
    }

    public function render() {
        if ($this->search) {
            return $this->view()
                ->title('ATDC - Recherche');
        }
        else {
            return $this->view()
                ->title('ATDC - Archives' . ($this->year == $this->ymax ? '' : ' (' . $this->year . ')'));
        }
    }
};
