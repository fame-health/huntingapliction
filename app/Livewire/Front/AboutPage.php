<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.front')]
class AboutPage extends Component
{
    // 🔹 Meta SEO
    public $title = 'Tentang Kami | Aplikasi Stunting';
    public $description = 'Pelajari lebih lanjut tentang Aplikasi Stunting, misi kami, serta komitmen dalam mendukung pencegahan stunting di Indonesia.';
    public $keywords = 'tentang aplikasi stunting, edukasi kesehatan, pencegahan stunting, gizi anak';
    public $image = '/images/about-cover.jpg';

    public function render()
    {
        return view('livewire.front.about-page', [
            // 🔹 kirim meta ke layout
            'title' => $this->title,
            'description' => $this->description,
            'keywords' => $this->keywords,
            'image' => $this->image,
        ]);
    }
}
