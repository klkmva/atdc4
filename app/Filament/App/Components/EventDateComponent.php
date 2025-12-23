<?php

namespace App\Filament\App\Components;

use Livewire\Component;

class EventDateComponent extends Component
{
    public $event;
    
    public function render()
    {
        return view('event-date-component');
    }
}
