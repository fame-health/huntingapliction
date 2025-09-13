<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.front')]
class HomePage extends Component
{
    public $title = 'Home | Aplikasi Stunting';
    public $description = 'Aplikasi edukasi stunting: definisi, dampak, penyebab, dan pencegahan.';

    public function render()
    {
        // Lempar data ke view
        return view('livewire.front.home-page')
            ->with([
                'title' => $this->title,
                'description' => $this->description,
            ]);
    }
}
