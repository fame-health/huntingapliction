<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ✅ SEO Dynamic -->
    <title>{{ $title ?? 'Aplikasi Stunting' }}</title>
    <meta name="description" content="{{ $description ?? 'Aplikasi Stunting membantu pencegahan stunting dengan cek risiko, edukasi gizi, dan panduan kesehatan anak.' }}">
    <meta name="keywords" content="{{ $keywords ?? 'stunting, kesehatan anak, gizi, aplikasi stunting, pencegahan stunting' }}">
    <meta name="author" content="Aplikasi Stunting">

    <!-- Open Graph (Facebook/WhatsApp) -->
    <meta property="og:title" content="{{ $title ?? 'Aplikasi Stunting' }}">
    <meta property="og:description" content="{{ $description ?? 'Cek risiko stunting anak secara online, cepat, dan gratis.' }}">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'Aplikasi Stunting' }}">
    <meta name="twitter:description" content="{{ $description ?? 'Cek risiko stunting anak secara online, cepat, dan gratis.' }}">
    <meta name="twitter:image" content="{{ asset('images/logo.png') }}">

    <!-- Favicon dan App Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Android Chrome Icons -->
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('android-chrome-512x512.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-100 font-[Poppins] min-h-screen flex flex-col">
    <!-- Header with Enhanced Glass Effect -->
    <header class="glass-effect bg-white/80 sticky top-0 z-50 shadow-xl border-b border-white/20">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center gap-3">
<div>
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-12 h-12">
</div>



                <h1 class="text-xl md:text-2xl font-bold bg-gradient-to-r from-purple-700 to-pink-600 bg-clip-text text-transparent">
                    Aplikasi Stunting
                </h1>
            </div>

            <!-- Desktop Navigation -->
<!-- Desktop Navigation -->
<nav class="hidden md:flex gap-8 text-gray-700 font-medium" aria-label="Navigasi utama">
    <a href="{{ route('home') }}" class="hover:text-purple-600 transition-all duration-300 flex items-center gap-2 group px-4 py-2 rounded-full hover:bg-purple-50 {{ Route::currentRouteName() === 'home' ? 'text-purple-600 bg-purple-50' : '' }}">
        <span class="material-icons-outlined text-sm group-hover:scale-110 transition-transform">home</span>
        Beranda
    </a>
    <a href="{{ route('stunting-check') }}" class="hover:text-purple-600 transition-all duration-300 flex items-center gap-2 group px-4 py-2 rounded-full hover:bg-purple-50 {{ Route::currentRouteName() === 'stunting-check' ? 'text-purple-600 bg-purple-50' : '' }}">
        <span class="material-icons-outlined text-sm group-hover:scale-110 transition-transform">assessment</span>
        Cek Stunting
    </a>
    <a href="{{ route('about') }}" class="hover:text-purple-600 transition-all duration-300 flex items-center gap-2 group px-4 py-2 rounded-full hover:bg-purple-50 {{ Route::currentRouteName() === 'about' ? 'text-purple-600 bg-purple-50' : '' }}">
        <span class="material-icons-outlined text-sm group-hover:scale-110 transition-transform">info</span>
        Tentang
    </a>
    <!-- Login Dashboard -->
    <a href="https://raahting.com/yes/login" target="_blank" class="hover:text-purple-600 transition-all duration-300 flex items-center gap-2 group px-4 py-2 rounded-full hover:bg-purple-50">
        <span class="material-icons-outlined text-sm group-hover:scale-110 transition-transform">login</span>
        Login Dashboard
    </a>
</nav>


            <!-- Mobile Menu Button -->
            <button class="md:hidden p-2 rounded-lg hover:bg-purple-100 transition-colors" aria-label="Buka menu navigasi" id="mobile-menu-button">
                <span class="material-icons-outlined text-purple-700">menu</span>
            </button>
        </div>

        <!-- Mobile Navigation Menu -->
        <nav class="mobile-nav hidden md:hidden bg-white/90 glass-effect shadow-xl" id="mobile-nav">
            <div class="container mx-auto px-6 py-4">
                <a href="{{ route('home') }}" class="block py-2 text-gray-700 hover:text-purple-600 transition-colors {{ Route::currentRouteName() === 'home' ? 'text-purple-600' : '' }}">
                    <span class="material-icons-outlined align-middle">home</span> Beranda
                </a>
                <a href="{{ route('stunting-check') }}" class="block py-2 text-gray-700 hover:text-purple-600 transition-colors {{ Route::currentRouteName() === 'stunting-check' ? 'text-purple-600' : '' }}">
                    <span class="material-icons-outlined align-middle">assessment</span> Cek Stunting
                </a>
                <a href="{{ route('about') }}" class="block py-2 text-gray-700 hover:text-purple-600 transition-colors {{ Route::currentRouteName() === 'about' ? 'text-purple-600' : '' }}">
                    <span class="material-icons-outlined align-middle">info</span> Tentang
                </a>
                    <!-- Login Dashboard -->
    <a href="https://raahting.com/yes/login" target="_blank" class="hover:text-purple-600 transition-all duration-300 flex items-center gap-2 group px-4 py-2 rounded-full hover:bg-purple-50">
        <span class="material-icons-outlined text-sm group-hover:scale-110 transition-transform">login</span>
        Login Dashboard
    </a>
            </div>
        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>

    <!-- Enhanced Footer -->
    <footer class="glass-effect bg-purple-800/90 text-white py-8 mt-auto z-30">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center gap-3 mb-4">
<div>
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-12 h-12">
</div>

                        <h4 class="text-xl font-bold">Aplikasi Stunting</h4>
                    </div>
                    <p class="text-purple-100">Solusi terpercaya untuk mencegah stunting pada anak Indonesia.</p>
                </div>
                <div>
                    <h5 class="font-bold mb-3">Menu</h5>
                    <div class="space-y-2">
                        <a href="{{ route('home') }}" class="block text-purple-100 hover:text-white transition-colors">Beranda</a>
                        <a href="{{ route('stunting-check') }}" class="block text-purple-100 hover:text-white transition-colors">Cek Stunting</a>
                        <a href="{{ route('about') }}" class="block text-purple-100 hover:text-white transition-colors">Tentang</a>
                    </div>
                </div>
                <div>
                    <h5 class="font-bold mb-3">Kontak</h5>
                    <div class="space-y-2 text-purple-100">
                        <p><span class="material-icons-outlined align-middle">email</span> <a href="mailto:info@stuntingapp.id" class="hover:text-white transition-colors">info@stuntingapp.id</a></p>
                        <p><span class="material-icons-outlined align-middle">phone</span> <a href="https://wa.me/6281234567890" target="_blank" class="hover:text-white transition-colors">+62 812-3456-7890</a></p>
                    </div>
                </div>
            </div>
            <div class="border-t border-purple-600 mt-8 pt-6 text-center">
                <p class="text-purple-100">&copy; {{ date('Y') }} Aplikasi Stunting. Semua Hak Dilindungi.</p>
            </div>
        </div>
    </footer>

    <!-- Enhanced Floating Button -->
    <a href="{{ route('stunting-check') }}"
       class="fixed bottom-20 right-6 w-16 h-16 rounded-2xl bg-gradient-to-r from-purple-600 to-pink-600 text-white flex items-center justify-center shadow-2xl hover:shadow-purple-500/50 transition-all duration-300 transform hover:scale-110 group z-50 floating-button"
       aria-label="Cek Stunting Sekarang">
        <span class="material-icons-outlined text-2xl group-hover:scale-110 transition-transform">health_and_safety</span>
    </a>

    <!-- Enhanced Bottom Navigation (Mobile Only) -->
    <nav class="fixed bottom-0 w-full glass-effect bg-white/90 shadow-2xl border-t border-white/20 md:hidden z-40 bottom-nav">
        <div class="flex justify-around py-3">
            <a href="{{ route('home') }}" class="flex flex-col items-center text-gray-600 {{ Route::currentRouteName() === 'home' ? 'text-purple-600 bg-purple-50' : '' }} transition-all duration-300 px-4 py-1 rounded-xl" aria-label="Beranda">
                <span class="material-icons-outlined">home</span>
                <span class="text-xs font-medium">Beranda</span>
            </a>
            <a href="{{ route('stunting-check') }}" class="flex flex-col items-center text-gray-600 {{ Route::currentRouteName() === 'stunting-check' ? 'text-purple-600 bg-purple-50' : '' }} transition-all duration-300 px-4 py-1 rounded-xl" aria-label="Cek Stunting">
                <span class="material-icons-outlined">assessment</span>
                <span class="text-xs font-medium">Cek</span>
            </a>
            <a href="{{ route('about') }}" class="flex flex-col items-center text-gray-600 {{ Route::currentRouteName() === 'about' ? 'text-purple-600 bg-purple-50' : '' }} transition-all duration-300 px-4 py-1 rounded-xl" aria-label="Tentang">
                <span class="material-icons-outlined">info</span>
                <span class="text-xs font-medium">Tentang</span>
            </a>
        </div>
    </nav>

    @livewireScripts

</body>
</html>
