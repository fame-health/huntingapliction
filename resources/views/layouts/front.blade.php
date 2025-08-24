<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Aplikasi Stunting</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>
    /* Reset and Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    background-color: #f8fafc;
    color: #1f2937;
    line-height: 1.6;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

/* Variables */
:root {
    --primary: #4f46e5;
    --secondary: #10b981;
    --accent: #ec4899;
    --background: #ffffff;
    --text: #1f2937;
    --border: #e5e7eb;
    --shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    --shadow-light: 0 2px 8px rgba(0, 0, 0, 0.05);
    --transition: all 0.3s ease;
}

/* Typography */
h1 {
    font-size: 2.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: 1.5rem;
}

h2 {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--text);
    margin-bottom: 1rem;
}

h3 {
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--text);
}

p {
    font-size: 1rem;
    color: #6b7280;
    margin-bottom: 1rem;
}

/* Header Styles */
.app-header {
    background: rgba(255, 255, 255, 0.97);
    backdrop-filter: blur(12px);
    box-shadow: var(--shadow-light);
    position: sticky;
    top: 0;
    z-index: 1000;
    padding: 1rem 0;
}

.app-header-content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1.5rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.app-title {
    font-size: 1.75rem;
    font-weight: 700;
    color: var(--primary);
}

.desktop-nav {
    display: flex;
    gap: 2rem;
}

.nav-link {
    text-decoration: none;
    color: var(--text);
    font-weight: 500;
    font-size: 1rem;
    transition: var(--transition);
}

.nav-link:hover,
.nav-link.active {
    color: var(--primary);
    transform: translateY(-2px);
}

/* Main Content */
.main-content {
    flex: 1;
    max-width: 1200px;
    margin: 2rem auto;
    padding: 0 1.5rem;
}

/* Floating Action Button */
.fab {
    position: fixed;
    bottom: 2.5rem;
    right: 2.5rem;
    background: var(--primary);
    color: white;
    width: 56px;
    height: 56px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: var(--shadow);
    text-decoration: none;
    transition: var(--transition);
    z-index: 1000;
}

.fab:hover {
    background: #4338ca;
    transform: scale(1.1);
}

.fab .material-icons-outlined {
    font-size: 1.75rem;
}

/* Bottom Navigation */
.bottom-nav {
    background: rgba(255, 255, 255, 0.97);
    backdrop-filter: blur(12px);
    box-shadow: var(--shadow-light);
    padding: 0.75rem 0;
    position: sticky;
    bottom: 0;
    z-index: 1000;
}

.bottom-nav-content {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    gap: 3rem;
}

.bottom-nav-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-decoration: none;
    color: var(--text);
    font-size: 0.85rem;
    font-weight: 500;
    transition: var(--transition);
}

.bottom-nav-item:hover,
.bottom-nav-item.active {
    color: var(--primary);
    transform: translateY(-2px);
}

.bottom-nav-item .material-icons-outlined {
    font-size: 1.5rem;
    margin-bottom: 0.25rem;
}

/* Home Page Styles */
.home-container {
    display: flex;
    flex-direction: column;
    gap: 2.5rem;
}

.hero-card {
    background: var(--background);
    border-radius: 1rem;
    padding: 2.5rem;
    box-shadow: var(--shadow);
    text-align: center;
}

.hero-title {
    font-size: 2rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: 0.75rem;
}

.hero-subtitle {
    font-size: 1.25rem;
    color: #6b7280;
    margin-bottom: 1.5rem;
}

.info-banner {
    background: var(--secondary);
    color: white;
    padding: 1rem 1.5rem;
    border-radius: 0.75rem;
    display: flex;
    align-items: center;
    gap: 1rem;
    font-size: 0.95rem;
    margin-top: 1.5rem;
}

.info-banner .material-icons-outlined {
    font-size: 1.5rem;
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 1.5rem;
}

.feature-card {
    background: var(--background);
    border-radius: 1rem;
    padding: 1.5rem;
    text-align: center;
    box-shadow: var(--shadow-light);
    transition: var(--transition);
}

.feature-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow);
}

.feature-icon {
    background: var(--primary);
    color: white;
    width: 48px;
    height: 48px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
}

.feature-title {
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--text);
    margin-bottom: 0.5rem;
}

.feature-desc {
    font-size: 0.9rem;
    color: #6b7280;
}

.cta-button {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    background: var(--primary);
    color: white;
    padding: 0.75rem 2rem;
    border-radius: 0.75rem;
    text-decoration: none;
    font-weight: 500;
    font-size: 1rem;
    transition: var(--transition);
    margin: 1.5rem auto;
}

.cta-button:hover {
    background: #4338ca;
    transform: translateY(-2px);
}

.cta-button .material-icons-outlined {
    font-size: 1.5rem;
}

.cta-note {
    text-align: center;
    font-size: 0.9rem;
    color: #6b7280;
    font-style: italic;
}

.stats-card {
    background: var(--background);
    border-radius: 1rem;
    padding: 2rem;
    box-shadow: var(--shadow);
    text-align: center;
}

.stats-title {
    font-size: 1.75rem;
    font-weight: 600;
    color: var(--text);
    margin-bottom: 1.5rem;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
    gap: 1.5rem;
}

.stat-number {
    font-size: 1.75rem;
    font-weight: 700;
}

.stat-desc {
    font-size: 0.9rem;
    color: #6b7280;
}

.info-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1.5rem;
}

.info-card {
    background: var(--background);
    border-radius: 1rem;
    padding: 1.5rem;
    box-shadow: var(--shadow-light);
    transition: var(--transition);
}

.info-card:hover {
    box-shadow: var(--shadow);
}

.info-card-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
}

.info-card-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--text);
}

.info-card-desc {
    font-size: 0.9rem;
    color: #6b7280;
}

/* Stunting Check Page Styles */
form {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
    max-width: 600px;
    margin: 2rem auto;
    background: var(--background);
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: var(--shadow-light);
}

form div {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

label {
    font-weight: 500;
    color: var(--text);
    font-size: 0.95rem;
}

input, select {
    padding: 0.75rem;
    border: 1px solid var(--border);
    border-radius: 0.5rem;
    font-size: 1rem;
    font-family: 'Poppins', sans-serif;
    transition: var(--transition);
}

input:focus, select:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
}

button {
    background: var(--primary);
    color: white;
    padding: 0.75rem 2rem;
    border: none;
    border-radius: 0.5rem;
    font-weight: 500;
    font-size: 1rem;
    cursor: pointer;
    transition: var(--transition);
    align-self: flex-end;
}

button:hover {
    background: #4338ca;
    transform: translateY(-2px);
}

span[wire\\:error] {
    color: var(--accent);
    font-size: 0.85rem;
    margin-top: 0.25rem;
}

/* Radio Buttons */
form div label {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    cursor: pointer;
}

form div input[type="radio"] {
    accent-color: var(--primary);
}

/* About Page Styles */
ul {
    list-style: disc;
    padding-left: 1.5rem;
    margin-bottom: 1.5rem;
}

ul li {
    margin-bottom: 0.5rem;
    color: #6b7280;
}

a {
    color: var(--primary);
    text-decoration: none;
    transition: var(--transition);
}

a:hover {
    color: #4338ca;
    text-decoration: underline;
}

/* Responsive Design */
@media (max-width: 768px) {
    .desktop-nav {
        display: none;
    }

    .app-header-content {
        flex-direction: column;
        gap: 1rem;
    }

    .app-title {
        font-size: 1.5rem;
    }

    .bottom-nav {
        display: block;
    }

    .bottom-nav-content {
        gap: 1.5rem;
    }

    .features-grid,
    .stats-grid,
    .info-cards {
        grid-template-columns: 1fr;
    }

    .fab {
        bottom: 6rem;
        right: 1.5rem;
        width: 48px;
        height: 48px;
    }

    .fab .material-icons-outlined {
        font-size: 1.5rem;
    }

    .hero-card {
        padding: 1.5rem;
    }

    .hero-title {
        font-size: 1.75rem;
    }

    .hero-subtitle {
        font-size: 1.1rem;
    }

    form {
        padding: 1.5rem;
    }
}

@media (min-width: 769px) {
    .bottom-nav {
        display: none;
    }
}
</style>

</head>

<body>
    <!-- Modern Header with Glassmorphism -->
    <header class="app-header">
        <div class="app-header-content">
            <h1 class="app-title">🌸 Aplikasi Stunting</h1>
            <nav class="desktop-nav">
                <a href="{{ route('home') }}" class="nav-link active">Beranda</a>
                <a href="{{ route('stunting-check') }}" class="nav-link">Cek Stunting</a>
                <a href="{{ route('about') }}" class="nav-link">Tentang</a>

            </nav>
        </div>
    </header>

    <!-- Main Content Area -->
   <main class="main-content">
{{ $slot }}
    <slot>

    </main>

    <!-- Floating Action Button with Pulse Animation -->
    <a href="{{ route('stunting-check') }}" class="fab" aria-label="Cek Stunting">
        <span class="material-icons-outlined">assessment</span>
    </a>

    <!-- Bottom Navigation with Modern Design -->
    <nav class="bottom-nav">
        <div class="bottom-nav-content">
            <a href="{{ route('home') }}" class="bottom-nav-item {{ Route::currentRouteName() === 'home' ? 'active' : '' }}">
                <span class="material-icons-outlined">home</span>
                <span>Beranda</span>
            </a>
            <a href="{{ route('stunting-check') }}" class="bottom-nav-item {{ Route::currentRouteName() === 'stunting-check' ? 'active' : '' }}">
                <span class="material-icons-outlined">assessment</span>
                <span>Cek Stunting</span>
            </a>
            <a href="{{ route('about') }}" class="bottom-nav-item {{ Route::currentRouteName() === 'about' ? 'active' : '' }}">
                <span class="material-icons-outlined">info</span>
                <span>Tentang</span>
            </a>

        </div>
    </nav>

    @livewireScripts
</body>
</html>
