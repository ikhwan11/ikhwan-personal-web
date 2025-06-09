<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class BackPortfolioForm extends Component
{
    #[Title('Portfolio Page')]
    public function render()
    {
        return view('livewire.back-end.portfolio.back-portfolio-form');
    }
}
