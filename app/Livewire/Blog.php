<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Blog extends Component
{
    #[Title('ODS | Blogs')]
    public function render()
    {
        return view('livewire.blog');
    }
}
