<?php

use Livewire\Component;
use App\Models\MenuItem;
use Illuminate\Database\Eloquent\Collection;

new class extends Component
{
    public array $items;

    public function render()
    {
        return $this->view();
    }

    public function mount()
    {
        $parent = 0;
        $this->items = $this->tree($parent);
    }

    public function tree(int $parent): array
    {
        $result = [];
        $items = MenuItem::where('parent_id', $parent)->orderBy('order')->get()->toArray();
        foreach($items as $item) {
            if ($item['type'] == 'page') {
                array_push($result, $item);
            } else {
                $item['items'] = $this->tree($item['id']);
                array_push($result, $item);
            }
        }
        return $result;
    }
};
