<?php

use Livewire\Component;

new class extends Component
{
    public array $item;

    public function render()
    {
        return $this->view();
    }

    public function mount($item = null)
    {
        $this->item = $item;
    }
};