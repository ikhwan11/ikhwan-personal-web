<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\User;

class BackUserList extends Component
{
    #[Title('User Page')]
    public function render()
    {
        $users = User::latest()->get();
        return view('livewire.back-end.user.back-user-list', compact('users'));
    }
}
