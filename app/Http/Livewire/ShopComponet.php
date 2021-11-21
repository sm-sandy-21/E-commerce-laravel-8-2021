<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponet extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::paginate(20);
        return view('livewire.shop-componet',['products'=>$products])->layout("layouts.base");
    }
}
