<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Front\HomePage;
use App\Livewire\Front\StuntingCheckPage;
use App\Livewire\Front\AboutPage;
use App\Livewire\Front\TermsPage;

Route::get('/', HomePage::class)->name('home');
Route::get('/cek-stunting', StuntingCheckPage::class)->name('stunting-check');
Route::get('/tentang-kami', AboutPage::class)->name('about');
Route::get('/syarat-ketentuan', TermsPage::class)->name('terms');
