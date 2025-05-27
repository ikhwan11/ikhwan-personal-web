<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class BackAboutForm extends Component
{
    #[Title('About page')]
    public function render()
    {
        return view('livewire.back-end.about.back-about-form');
    }
}
