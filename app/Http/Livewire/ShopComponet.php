<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShopComponet extends Component
{
    public function render()
    {
        return view('livewire.shop-componet')->layout("layouts.base");
    }
}
