<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Cart;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponet extends Component
{
    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in cart');
        return redirect()->route('product.cart');
    }
    use WithPagination;
    public function render()
    {
        $products = Product::paginate(20);
        return view('livewire.shop-componet',['products'=>$products])->layout("layouts.base");
    }

}