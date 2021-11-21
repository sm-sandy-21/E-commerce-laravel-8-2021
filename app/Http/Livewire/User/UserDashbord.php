<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserDashbord extends Component
{
    public function render()
    {
        return view('livewire.user.user-dashbord')->layout("layouts.base");
    }
}
