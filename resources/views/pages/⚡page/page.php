<?php

use Livewire\Component;
use App\Models\MenuItem;

new class extends Component
{
    public string|null $content;

    public function mount($page)
    {
        $this->content = MenuItem::find($page)->content;
    }

    public function render()
    {
        return $this->view();
    }
};