<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class BackBlogForm extends Component
{
    #[Title('Blog Page')]

    public function render()
    {
        return view('livewire.back-end.blog.back-blog-form');
    }
}
