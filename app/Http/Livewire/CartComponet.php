<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartComponet extends Component
{
    public function incQty($rowId)
    {
       $product = Cart::get($rowId);
       $qty = $product->qty + 1 ;
       Cart::update($rowId,$qty);

    //    return redirect()->route('product.cart');
    }

    public function decQty($rowId)
    {
       $product = Cart::get($rowId);
       if ($product->qty >1) {
          $decQty =$product->qty-1;
          Cart::update($rowId,$decQty);
       }else{
        Cart::update($rowId,$product->qty);
       }
    //    return redirect()->route('product.cart');
       
    }
    public function deleteItem($rowId)
    {
       $product = Cart::get($rowId);
       Cart::remove($rowId);

    //    return redirect()->route('product.cart');
    }
    public function destroy()
    {
        Cart::destroy();

        // return redirect()->route('product.cart');
    }

    public function render()
    {
        return view('livewire.cart-componet')->layout("layouts.base");
    }
}
