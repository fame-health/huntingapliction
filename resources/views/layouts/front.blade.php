<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Aplikasi Stunting' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        :root {
            --primary-color: #1a73e8;
            --primary-dark: #0d47a1;
            --surface-color: #ffffff;
            --background-color: #f5f5f5;
            --on-primary: #ffffff;
            --on-surface: #212121;
            --on-background: #212121;
            --border-radius: 12px;
            --elevation-1: 0 2px 1px -1px rgba(0,0,0,0.2), 0 1px 1px 0 rgba(0,0,0,0.14), 0 1px 3px 0 rgba(0,0,0,0.12);
            --elevation-2: 0 3px 1px -2px rgba(0,0,0,0.2), 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12);
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--background-color);
            color: var(--on-background);
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        .app-bar {
            background-color: var(--primary-color);
            color: var(--on-primary);
            padding: 16px;
            box-shadow: var(--elevation-2);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .app-title {
            font-size: 20px;
            font-weight: 500;
            margin: 0;
        }

        .content-container {
            padding: 16px;
            max-width: 600px;
            margin: 0 auto;
        }

        .card {
            background-color: var(--surface-color);
            border-radius: var(--border-radius);
            box-shadow: var(--elevation-1);
            padding: 16px;
            margin-bottom: 16px;
        }

        .card-title {
            font-size: 18px;
            font-weight: 500;
            margin: 0 0 12px 0;
            color: var(--on-surface);
        }

        .bottom-nav {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: var(--surface-color);
            box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-around;
            padding: 8px 0;
        }

        .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: #5f6368;
            font-size: 12px;
            padding: 8px;
        }

        .nav-item.active {
            color: var(--primary-color);
        }

        .nav-icon {
            font-size: 24px;
            margin-bottom: 4px;
        }

        .fab {
            position: fixed;
            bottom: 72px;
            right: 16px;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background-color: var(--primary-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--elevation-2);
            z-index: 99;
        }

        .list-item {
            display: flex;
            align-items: center;
            padding: 12px 16px;
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }

        .list-item:last-child {
            border-bottom: none;
        }

        .list-icon {
            margin-right: 16px;
            color: #5f6368;
        }

        .list-text {
            flex: 1;
        }

        .list-secondary {
            color: #5f6368;
        }
    </style>
</head>
<body>
    <!-- App Bar (Header) -->
    <div class="app-bar">
        <h1 class="app-title">Aplikasi Stunting</h1>
    </div>

    <!-- Main Content -->
    <main class="content-container">
        {{ $slot }}
    </main>

    <!-- Floating Action Button -->
    <a href="{{ route('stunting-check') }}" class="fab">
        <span class="material-icons">add</span>
    </a>

    <!-- Bottom Navigation -->
    <nav class="bottom-nav">
        <a href="{{ route('home') }}" class="nav-item active">
            <span class="material-icons nav-icon">home</span>
            <span>Beranda</span>
        </a>
        <a href="{{ route('stunting-check') }}" class="nav-item">
            <span class="material-icons nav-icon">assessment</span>
            <span>Cek Stunting</span>
        </a>
        <a href="{{ route('about') }}" class="nav-item">
            <span class="material-icons nav-icon">info</span>
            <span>Tentang</span>
        </a>
        <a href="{{ route('terms') }}" class="nav-item">
            <span class="material-icons nav-icon">description</span>
            <span>Ketentuan</span>
        </a>
    </nav>

    @livewireScripts
</body>
</html>
