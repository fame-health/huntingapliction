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

/* About Page Styles */
.about-container {
    max-width: 800px;
    margin: 0 auto;
    background: var(--background);
    border-radius: 1rem;
    padding: 2.5rem;
    box-shadow: var(--shadow);
    line-height: 1.7;
}

.about-container h1 {
    color: var(--primary);
    font-size: 2.25rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    text-align: center;
    border-bottom: 3px solid var(--primary);
    padding-bottom: 1rem;
}

.about-container h2 {
    color: var(--text);
    font-size: 1.5rem;
    font-weight: 600;
    margin: 2rem 0 1rem 0;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.about-container h2::before {
    content: "●";
    color: var(--primary);
    font-size: 1.2rem;
}

.about-container p {
    color: #4b5563;
    font-size: 1rem;
    margin-bottom: 1.5rem;
    text-align: justify;
}

.about-container ul {
    background: #f9fafb;
    border-left: 4px solid var(--secondary);
    padding: 1.5rem 1.5rem 1.5rem 2.5rem;
    border-radius: 0.5rem;
    margin: 1.5rem 0;
}

.about-container ul li {
    color: #374151;
    font-size: 0.95rem;
    margin-bottom: 0.75rem;
    position: relative;
}

.about-container ul li::marker {
    color: var(--secondary);
    font-weight: bold;
}

.about-container a {
    color: var(--primary);
    text-decoration: none;
    font-weight: 500;
    transition: var(--transition);
    border-bottom: 1px solid transparent;
}

.about-container a:hover {
    color: #4338ca;
    border-bottom-color: #4338ca;
}

/* Contact Section Styling */
.contact-section {
    background: linear-gradient(135deg, var(--primary), var(--secondary));
    color: white;
    padding: 2rem;
    border-radius: 1rem;
    margin: 2rem 0;
}

.contact-section h2 {
    color: white;
    margin-bottom: 1rem;
}

.contact-section h2::before {
    color: rgba(255, 255, 255, 0.8);
}

.contact-section p {
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 1rem;
}

.contact-section ul {
    background: rgba(255, 255, 255, 0.1);
    border-left: 4px solid rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(10px);
}

.contact-section ul li {
    color: rgba(255, 255, 255, 0.95);
}

.contact-section a {
    color: white;
    font-weight: 600;
}

.contact-section a:hover {
    color: #e0e7ff;
    border-bottom-color: #e0e7ff;
}

/* Back to Check Button */
.back-button-container {
    text-align: center;
    margin-top: 2rem;
    padding-top: 2rem;
    border-top: 1px solid var(--border);
}

.back-button {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    background: linear-gradient(135deg, var(--primary), var(--secondary));
    color: white;
    padding: 0.875rem 2rem;
    border-radius: 2rem;
    text-decoration: none;
    font-weight: 600;
    font-size: 1rem;
    transition: var(--transition);
    box-shadow: var(--shadow-light);
}

.back-button:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow);
    background: linear-gradient(135deg, #4338ca, #059669);
}

.back-button::before {
    content: "🚀";
    font-size: 1.1rem;
}

/* Stunting Check Form Styles */
.stunting-form-container {
    max-width: 700px;
    margin: 0 auto;
}

.form-step {
    background: var(--background);
    border-radius: 1rem;
    padding: 2.5rem;
    box-shadow: var(--shadow);
    animation: fadeInUp 0.5s ease-out;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.form-step h1 {
    color: var(--primary);
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    text-align: center;
    position: relative;
}

.form-step h1::after {
    content: "";
    position: absolute;
    bottom: -0.5rem;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background: linear-gradient(135deg, var(--primary), var(--secondary));
    border-radius: 2px;
}

/* Form Fields */
.form-field {
    margin-bottom: 1.5rem;
}

.form-field label {
    display: block;
    font-weight: 600;
    color: var(--text);
    margin-bottom: 0.5rem;
    font-size: 0.95rem;
}

.form-field input,
.form-field select {
    width: 100%;
    padding: 0.875rem 1rem;
    border: 2px solid var(--border);
    border-radius: 0.75rem;
    font-size: 1rem;
    font-family: 'Poppins', sans-serif;
    transition: var(--transition);
    background: white;
}

.form-field input:focus,
.form-field select:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
    transform: translateY(-1px);
}

.form-field input::placeholder {
    color: #9ca3af;
}

/* Question Styling */
.question-container {
    background: #f8fafc;
    border: 2px solid var(--border);
    border-radius: 1rem;
    padding: 1.5rem;
    margin-bottom: 1.5rem;
    transition: var(--transition);
}

.question-container:hover {
    border-color: var(--primary);
    background: #f0f4ff;
}

.question-text {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--text);
    margin-bottom: 1rem;
    line-height: 1.6;
}

.radio-group {
    display: flex;
    gap: 2rem;
    flex-wrap: wrap;
}

.radio-option {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    cursor: pointer;
    padding: 0.75rem 1.25rem;
    border: 2px solid var(--border);
    border-radius: 0.75rem;
    transition: var(--transition);
    background: white;
    min-width: 120px;
    justify-content: center;
}

.radio-option:hover {
    border-color: var(--primary);
    background: #f0f4ff;
    transform: translateY(-1px);
}

.radio-option input[type="radio"] {
    width: 20px;
    height: 20px;
    accent-color: var(--primary);
    margin: 0;
}

.radio-option input[type="radio"]:checked + span {
    color: var(--primary);
    font-weight: 600;
}

.radio-option:has(input[type="radio"]:checked) {
    border-color: var(--primary);
    background: var(--primary);
    color: white;
}

.radio-option:has(input[type="radio"]:checked) span {
    color: white;
}

.radio-option span {
    font-weight: 500;
    font-size: 1rem;
}

/* Submit Button */
.submit-button {
    background: linear-gradient(135deg, var(--primary), var(--secondary));
    color: white;
    padding: 1rem 3rem;
    border: none;
    border-radius: 2rem;
    font-weight: 600;
    font-size: 1.1rem;
    cursor: pointer;
    transition: var(--transition);
    display: block;
    margin: 2rem auto 0;
    min-width: 200px;
    position: relative;
    overflow: hidden;
}

.submit-button::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s ease;
}

.submit-button:hover::before {
    left: 100%;
}

.submit-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(79, 70, 229, 0.3);
}

/* Results Section */
.results-container {
    background: var(--background);
    border-radius: 1rem;
    padding: 2.5rem;
    box-shadow: var(--shadow);
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
}

.results-header {
    background: linear-gradient(135deg, var(--primary), var(--secondary));
    color: white;
    padding: 1.5rem;
    border-radius: 1rem;
    margin-bottom: 2rem;
}

.results-status {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
}

.results-score {
    font-size: 2rem;
    font-weight: 800;
}

.results-explanation {
    background: #f9fafb;
    border-left: 4px solid var(--secondary);
    padding: 1.5rem;
    border-radius: 0.5rem;
    margin: 1.5rem 0;
    text-align: left;
}

.results-explanation strong {
    color: var(--primary);
    font-size: 1.1rem;
}

.results-explanation p {
    margin-top: 1rem;
    color: #374151;
    line-height: 1.7;
}

.repeat-button {
    background: var(--primary);
    color: white;
    padding: 0.875rem 2rem;
    border-radius: 2rem;
    text-decoration: none;
    font-weight: 600;
    transition: var(--transition);
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    margin-top: 1rem;
}

.repeat-button:hover {
    background: #4338ca;
    transform: translateY(-2px);
}

.repeat-button::before {
    content: "🔄";
}

/* Error Messages */
.error-message {
    color: var(--accent);
    font-size: 0.85rem;
    margin-top: 0.5rem;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 0.25rem;
}

.error-message::before {
    content: "⚠";
    font-size: 1rem;
}

/* Progress Indicator */
.step-indicator {
    display: flex;
    justify-content: center;
    margin-bottom: 2rem;
    gap: 1rem;
}

.step-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: var(--border);
    transition: var(--transition);
}

.step-dot.active {
    background: var(--primary);
    transform: scale(1.2);
}

.step-dot.completed {
    background: var(--secondary);
}

/* Original Form Styles (for compatibility) */
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

/* About Page Original Styles */
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

    .about-container,
    .form-step,
    .results-container {
        padding: 1.5rem;
        margin: 1rem;
    }

    .about-container h1 {
        font-size: 1.75rem;
    }

    .form-step h1 {
        font-size: 1.75rem;
    }

    .radio-group {
        flex-direction: column;
        gap: 1rem;
    }

    .radio-option {
        justify-content: flex-start;
        min-width: unset;
    }

    .submit-button {
        width: 100%;
        margin: 1.5rem 0 0;
    }

    .contact-section {
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
