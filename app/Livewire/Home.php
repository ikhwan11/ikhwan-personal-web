<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Home extends Component
{
    #[Title('Welcome to ODS | Indonesian Website Development & Digital Branding Expert')]

    public function render()
    {
        return view('livewire.home');
    }
}
