<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class BackCurriculumForm extends Component
{
    #[Title('Curriculum Vitae Page')]
    public function render()
    {
        return view('livewire.back-end.cv.back-curriculum-form');
    }
}
