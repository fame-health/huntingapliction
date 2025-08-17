<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.front')]
class HomePage extends Component
{
    public $title = 'Home | Aplikasi Stunting';

    public function render()
    {
        return view('livewire.front.home-page');
    }
}
