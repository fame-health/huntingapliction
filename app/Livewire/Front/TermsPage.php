<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.front')]

class TermsPage extends Component
{
    public function render()
    {
        return view('livewire.front.terms-page');
    }
}
