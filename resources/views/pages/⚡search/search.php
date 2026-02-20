<?php

use Livewire\Component;

new class extends Component
{
    public string $query;

    public function render()
    {
        return $this->view()
            ->title('ATDC - Recherche');
    }
};
