<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class BackUserForm extends Component
{
    #[Title('User Page')]
    public function render()
    {
        return view('livewire.back-end.user.back-user-form');
    }
}
