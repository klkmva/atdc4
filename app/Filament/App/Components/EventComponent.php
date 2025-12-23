<?php

namespace App\Filament\App\Components;

use Livewire\Component;
use App\Models\Event;

class EventComponent extends Component
{
    public $event;

    public function render()
    {
        return view('event-component');
    }

    public function mount()
    {
        $this->event = Event::query()->first();
    }
}
