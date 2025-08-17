<!-- resources/views/livewire/front/home-page.blade.php -->
<div class="bg-gray-50 min-h-screen pb-20">
    <!-- Hero Section -->
    <div class="container mx-auto px-4 py-6">
        <div class="bg-white rounded-xl shadow-sm p-6 mb-6">
            <h2 class="text-2xl font-medium text-gray-800 mb-2">Selamat Datang</h2>
            <p class="text-gray-600 mb-4">Aplikasi Pemeriksaan Stunting Terintegrasi</p>

            <div class="flex items-center bg-blue-50 rounded-lg p-4">
                <span class="material-icons text-blue-600 mr-3">info</span>
                <p class="text-blue-800">Deteksi dini stunting untuk tumbuh kembang optimal anak</p>
            </div>
        </div>

        <!-- Features Grid -->
        <div class="grid grid-cols-2 gap-4 mb-6">
            <div class="bg-white rounded-xl shadow-sm p-4 flex flex-col items-center text-center">
                <div class="bg-blue-100 rounded-full w-12 h-12 flex items-center justify-center mb-2">
                    <span class="material-icons text-blue-600">check_circle</span>
                </div>
                <h3 class="font-medium text-gray-800">Akurat</h3>
                <p class="text-xs text-gray-600">Algoritma terpercaya</p>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-4 flex flex-col items-center text-center">
                <div class="bg-green-100 rounded-full w-12 h-12 flex items-center justify-center mb-2">
                    <span class="material-icons text-green-600">flash_on</span>
                </div>
                <h3 class="font-medium text-gray-800">Cepat</h3>
                <p class="text-xs text-gray-600">Hasil dalam detik</p>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-4 flex flex-col items-center text-center">
                <div class="bg-purple-100 rounded-full w-12 h-12 flex items-center justify-center mb-2">
                    <span class="material-icons text-purple-600">menu_book</span>
                </div>
                <h3 class="font-medium text-gray-800">Panduan</h3>
                <p class="text-xs text-gray-600">Rekomendasi lengkap</p>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-4 flex flex-col items-center text-center">
                <div class="bg-orange-100 rounded-full w-12 h-12 flex items-center justify-center mb-2">
                    <span class="material-icons text-orange-600">security</span>
                </div>
                <h3 class="font-medium text-gray-800">Aman</h3>
                <p class="text-xs text-gray-600">Privasi terjaga</p>
            </div>
        </div>

        <!-- CTA Button -->
        <div class="mb-8">
            <a href="{{ route('stunting-check') }}"
               class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg shadow-sm flex items-center justify-center transition-colors">
                <span class="material-icons mr-2">play_circle_filled</span>
                Mulai Cek Stunting
            </a>
            <p class="text-center text-xs text-gray-500 mt-2">Gratis • Aman • Terpercaya</p>
        </div>

        <!-- Stats Cards -->
        <div class="bg-white rounded-xl shadow-sm p-4 mb-6">
            <h3 class="font-medium text-gray-800 mb-3">Statistik Kami</h3>
            <div class="grid grid-cols-3 gap-2 text-center">
                <div>
                    <div class="text-blue-600 font-bold text-xl">10K+</div>
                    <div class="text-xs text-gray-600">Pemeriksaan</div>
                </div>
                <div>
                    <div class="text-green-600 font-bold text-xl">95%</div>
                    <div class="text-xs text-gray-600">Akurasi</div>
                </div>
                <div>
                    <div class="text-purple-600 font-bold text-xl">24/7</div>
                    <div class="text-xs text-gray-600">Online</div>
                </div>
            </div>
        </div>

        <!-- Info Cards -->
        <div class="space-y-4">
            <div class="bg-blue-50 rounded-xl p-4">
                <div class="flex items-start">
                    <span class="material-icons text-blue-600 mr-3">help_outline</span>
                    <div>
                        <h3 class="font-medium text-blue-800 mb-1">Apa itu Stunting?</h3>
                        <p class="text-sm text-blue-700">Kondisi gagal tumbuh pada anak akibat kekurangan gizi kronis dalam 1000 hari pertama kehidupan.</p>
                    </div>
                </div>
            </div>

            <div class="bg-green-50 rounded-xl p-4">
                <div class="flex items-start">
                    <span class="material-icons text-green-600 mr-3">priority_high</span>
                    <div>
                        <h3 class="font-medium text-green-800 mb-1">Mengapa Penting?</h3>
                        <p class="text-sm text-green-700">Deteksi dini memungkinkan intervensi tepat waktu untuk perkembangan anak.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
