<?php

namespace App\Livewire\Item;

use App\Models\Item;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function render()
    {
        $data=[
            'items'=>Item::where('owner', 'Tienda')
            ->whereHas('itemPics')
            ->orWhere(function ($query) {
                $query->where('owner', 'Tienda')
                    ->doesntHave('itemPics');
            })
            ->paginate(12)
        ];
        return view('livewire.item.index', $data);
    }
}
