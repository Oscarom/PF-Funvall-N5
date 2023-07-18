<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Item;
use Livewire\Component;

class ShowItems extends Component
{
    public $search;
    public function render()
    {
        
        $categorias = Category::where("name", "LIKE", "%" . $this->search . "%" )
        ->get();

        $items = Item::where("name", "LIKE", "%" . $this->search . "%" )
        ->get();

        return view('livewire.show-items',compact("categorias","items"));
    }
}


