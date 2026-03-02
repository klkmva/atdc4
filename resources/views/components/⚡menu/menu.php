<?php

use Livewire\Component;
use App\Models\MenuItem;

new class extends Component
{
    public $items;

    public function render()
    {
        return $this->view();
    }

    public function mount()
    {
        $this->items = MenuItem::all()->sortBy(['parent_id', 'order']);
    }
};
