<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.front')]
class AboutPage extends Component
{

    public $title = 'About | Aplikasi Stunting';
    public function render()
    {
        return view('livewire.front.about-page');
    }
}
