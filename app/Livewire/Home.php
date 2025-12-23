<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\Event;
use App\Models\News;

class Home extends Component
{
    public $events;
    public $news;

    #[Title('atdc')]
    public function render()
    {
        return view('livewire.home');
    }

    public function mount()
    {
        $this->events = Event::all()->where('date', '>=', \now())->sortBy('date');
        $this->news = News::all()->where('date', '>=', \now());
    }
}
