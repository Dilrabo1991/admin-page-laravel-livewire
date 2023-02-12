<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class User extends Component
{
    public function render()
    {
        return view('livewire.admin.user')->layout('layout.admin-app');
    }
}
