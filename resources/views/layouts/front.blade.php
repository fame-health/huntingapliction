<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Stunting</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* General Reset and Base Styles */

        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: linear-gradient(to bottom right, #e0e7ff, #f3e8ff, #fce7f3);
        }

        /* Ensure main content has enough padding to avoid overlap with footer and bottom nav */
        main {
            flex: 1;
            padding-bottom: 120px; /* Increased to account for footer and bottom navigation */
        }

        /* Glassmorphism Effect */
        .glass-effect {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);

        }

        /* Primary Colors */
        :root {
            --primary: #7c3aed; /* Purple */
            --secondary: #ec4899; /* Pink */
            --accent: #10b981; /* Green */
            --text: #1f2937; /* Dark Gray */
            --light-text: hsl(220, 9%, 46%); /* Light Gray */
        }

        /* Animation for Floating Effect */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        /* ------------------ Home Page Styles ------------------ */
        .hero-card {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.7));
            border-radius: 1rem;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .hero-title {
            font-size: 2.5rem;
            font-weight: 700;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 0.5rem;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            color: var(--light-text);
            margin-bottom: 1rem;
        }

        .info-banner {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            background: rgba(167, 139, 250, 0.1);
            padding: 0.75rem;
            border-radius: 0.5rem;
            font-size: 0.9rem;
            color: var(--primary);
        }

        .info-banner .material-icons-outlined {
            font-size: 1.2rem;
        }

        /* Features Grid */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .feature-card {
            background: white;
            border-radius: 1rem;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .feature-icon {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
        }

        .feature-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text);
            margin-bottom: 0.5rem;
        }

        .feature-desc {
            font-size: 0.9rem;
            color: var(--light-text);
        }

        /* CTA Button */
        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 500;
            text-decoration: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin: 1rem auto;
            display: block;
            width: fit-content;
        }

        .cta-button:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .cta-button .material-icons-outlined {
            font-size: 1.2rem;
        }

        .cta-note {
            text-align: center;
            font-size: 0.85rem;
            color: var(--light-text);
        }

        /* Stats Cards */
        .stats-card {
            background: white;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin: 2rem 0;
            text-align: center;
        }

        .stats-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text);
            margin-bottom: 1rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 1rem;
        }

        .stat-number {
            font-size: 1.75rem;
            font-weight: 700;
        }

        .stat-desc {
            font-size: 0.9rem;
            color: var(--light-text);
        }

        /* Info Cards */
        .info-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .info-card {
            background: white;
            border-radius: 1rem;
            padding: 1.5rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .info-card-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 0.5rem;
        }

        .info-card-header .material-icons-outlined {
            font-size: 2rem;
            color: var(--primary);
        }

        .info-card-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text);
        }

        .info-card-desc {
            font-size: 0.9rem;
            color: var(--light-text);
        }

        /* ------------------ Stunting Check Page Styles ------------------ */
        .stunting-container {
            padding: 2rem 0;
            max-width: 600px;
            margin: 0 auto;
        }

        .stunting-container h1 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text);
            text-align: center;
            margin-bottom: 1.5rem;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .stunting-container form {
            background: white;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .stunting-container form div {
            margin-bottom: 1.5rem;
        }

        .stunting-container label {
            display: block;
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--text);
            margin-bottom: 0.5rem;
        }

        .stunting-container input,
        .stunting-container select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            font-size: 0.9rem;
            color: var(--text);
            transition: border-color 0.3s ease;
        }

        .stunting-container input:focus,
        .stunting-container select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.1);
        }

        .stunting-container input[type="radio"] {
            width: auto;
            margin-right: 0.5rem;
        }

        .stunting-container .error {
            color: #ef4444;
            font-size: 0.8rem;
            margin-top: 0.25rem;
        }

        .stunting-container button,
        .stunting-container a {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 500;
            text-decoration: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: fit-content;
            margin: 1rem auto;
        }

        .stunting-container button:hover,
        .stunting-container a:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .stunting-container .result {
            background: white;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .stunting-container .result span {
            display: block;
            font-size: 1.1rem;
            font-weight: 500;
            color: var(--text);
            margin-bottom: 0.5rem;
        }

        .stunting-container .result p {
            font-size: 0.9rem;
            color: var(--light-text);
        }

        /* ------------------ About Page Styles ------------------ */
.about-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 2rem;
        background: rgba(255, 255, 255, 0.8);
        border-radius: 1rem;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
    }

    .about-title {
        font-size: 2.5rem;
        font-weight: 700;
        text-align: center;
        background: linear-gradient(to right, var(--primary), var(--secondary));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        margin-bottom: 1.5rem;
    }

    .about-section {
        margin-bottom: 2rem;
    }

    .section-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--text);
        margin-bottom: 0.75rem;
    }

    .about-text {
        font-size: 0.9rem;
        color: var(--light-text);
        line-height: 1.6;
        margin-bottom: 1rem;
    }

    .highlight {
        color: var(--primary);
        font-weight: 600;
    }

    .about-list {
        list-style: none;
        padding-left: 0;
    }

    .about-item {
        font-size: 0.9rem;
        color: var(--light-text);
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .about-item .material-icons-outlined {
        font-size: 1.2rem;
        color: var(--primary);
    }

    .contact-link {
        color: var(--primary);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-link:hover {
        color: var(--secondary);
    }

    .button-container {
        text-align: center;
    }

    .cta-button {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: linear-gradient(to right, var(--primary), var(--secondary));
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
        font-weight: 500;
        text-decoration: none;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .cta-button:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .cta-button .material-icons-outlined {
        font-size: 1.2rem;
    }

    @media (max-width: 768px) {
        .about-container {
            padding: 1.5rem;
        }

        .about-title {
            font-size: 2rem;
        }

        .section-title {
            font-size: 1.25rem;
        }

        .about-text, .about-item {
            font-size: 0.85rem;
        }
    }

        /* Footer Styles */
        footer {
            z-index: 30; /* Ensure footer is above most elements but below floating button and nav */
            margin-top: auto; /* Push footer to bottom */
            padding-bottom: 80px; /* Extra padding to avoid overlap with bottom nav on mobile */
        }

        /* Floating Button Adjustments */
        .floating-button {
            bottom: 100px; /* Increased to avoid footer overlap */
            z-index: 50; /* Ensure it’s above footer and bottom nav */
        }

        /* Bottom Navigation Adjustments */
        nav.bottom-nav {
            z-index: 40; /* Above footer but below floating button */
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .info-cards {
                grid-template-columns: 1fr;
            }

            .stunting-container h1,
            .about-container h1 {
                font-size: 1.75rem;
            }

            .stunting-container form,
            .stunting-container .result {
                padding: 1.5rem;
            }

            /* Ensure footer is visible above bottom navigation */
            footer {
                padding-bottom: 100px; /* Extra padding for bottom nav */
            }

            /* Adjust floating button for mobile */
            .floating-button {
                bottom: 120px; /* Higher to avoid bottom nav and footer */
            }
        }

        /* Animation for mobile nav slide-in */
        @keyframes slide-in {
            from { transform: translateY(100%); }
            to { transform: translateY(0); }
        }

        .animate-slide-in {
            animation: slide-in 0.3s ease-in-out;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-100 font-[Poppins] min-h-screen flex flex-col">
    <!-- Header with Enhanced Glass Effect -->
    <header class="glass-effect bg-white/80 sticky top-0 z-50 shadow-xl border-b border-white/20">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 bg-gradient-to-r from-purple-600 to-pink-500 rounded-xl flex items-center justify-center shadow-lg">
                    <span class="text-white text-2xl">🌱</span>
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
                        <div class="w-10 h-10 bg-gradient-to-r from-purple-400 to-pink-400 rounded-lg flex items-center justify-center">
                            <span class="text-white">🌱</span>
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
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', () => {
            const mobileNav = document.getElementById('mobile-nav');
            mobileNav.classList.toggle('hidden');
            mobileNav.classList.toggle('animate-slide-in');
        });
    </script>
</body>
</html>
