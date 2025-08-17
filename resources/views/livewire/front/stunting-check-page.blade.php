<div class="container mx-auto max-w-md p-6 bg-white min-h-screen shadow-2xl rounded-xl overflow-hidden border border-gray-100">
    @if($step === 1)
        <h1 class="text-2xl font-extrabold text-gray-900 mb-8 bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">{{ $title }}</h1>
        <form wire:submit.prevent="submitGuestInfo" class="space-y-8">
            <div class="bg-gray-50 p-5 rounded-xl border border-gray-200 hover:border-blue-500 transition-all duration-300">
                <label for="name" class="block text-base font-medium text-gray-700 mb-3">Nama</label>
                <input
                    type="text"
                    wire:model="name"
                    id="name"
                    class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 text-gray-900 placeholder-gray-400 text-sm"
                    placeholder="Masukkan nama"
                >
                @error('name')
                    <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
                @enderror
            </div>
            <div class="bg-gray-50 p-5 rounded-xl border border-gray-200 hover:border-blue-500 transition-all duration-300">
                <label for="gender" class="block text-base font-medium text-gray-700 mb-3">Jenis Kelamin</label>
                <select
                    wire:model="gender"
                    id="gender"
                    class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 text-gray-900 text-sm"
                >
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="male">Laki-laki</option>
                    <option value="female">Perempuan</option>
                </select>
                @error('gender')
                    <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
                @enderror
            </div>
            <div class="bg-gray-50 p-5 rounded-xl border border-gray-200 hover:border-blue-500 transition-all duration-300">
                <label for="birth_date" class="block text-base font-medium text-gray-700 mb-3">Tanggal Lahir</label>
                <input
                    type="date"
                    wire:model="birth_date"
                    id="birth_date"
                    class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 text-gray-900 text-sm"
                >
                @error('birth_date')
                    <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
                @enderror
            </div>
            <button
                type="submit"
                class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold py-3 rounded-lg hover:from-blue-700 hover:to-indigo-700 transition-all duration-300 ease-in-out transform hover:scale-105 shadow-md"
            >
                Lanjut
            </button>
        </form>
    @elseif($step === 2)
        <h1 class="text-2xl font-extrabold text-gray-900 mb-8 bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Pertanyaan Cek Stunting</h1>
        <form wire:submit.prevent="submitAnswers" class="space-y-8 pb-16">
            @foreach($questions as $index => $question)
                <div class="bg-gray-50 p-5 rounded-xl border border-gray-200 hover:border-blue-500 transition-all duration-300">
                    <p class="font-medium text-gray-800 text-base mb-4">{{ $index + 1 }}. {{ $question['text'] }}</p>
                    <div class="flex space-x-8 mb-5">
                        <label class="flex items-center">
                            <input
                                type="radio"
                                wire:model="answers.{{ $question['id'] }}"
                                value="1"
                                class="h-6 w-6 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                            >
                            <span class="ml-4 text-base text-gray-700">Ya</span>
                        </label>
                        <label class="flex items-center">
                            <input
                                type="radio"
                                wire:model="answers.{{ $question['id'] }}"
                                value="0"
                                class="h-6 w-6 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                            >
                            <span class="ml-4 text-base text-gray-700">Tidak</span>
                        </label>
                    </div>
                    @error('answers.' . $question['id'])
                        <span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>
                    @enderror
                    @if($loop->last)
                        <button
                            type="submit"
                            class="w-full mt-6 mb-8 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold py-3 rounded-lg hover:from-blue-700 hover:to-indigo-700 transition-all duration-300 ease-in-out transform hover:scale-105 shadow-md"
                        >
                            Kirim
                        </button>
                    @endif
                </div>
            @endforeach
        </form>
    @else
        <h1 class="text-2xl font-extrabold text-gray-900 mb-8 bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Hasil Cek Stunting</h1>
        <div class="bg-gradient-to-br from-gray-50 to-gray-100 p-6 rounded-xl border border-gray-200 shadow-lg mb-8">
            <div class="flex items-center justify-between mb-4">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800"
                      :class="{ 'bg-red-100 text-red-800': $result->interpretation === 'Berisiko' }">
                    Status: {{ ucfirst($result->interpretation) }}
                </span>
                <span class="text-sm font-medium text-gray-600">Skor: {{ $result->score }}</span>
            </div>
            <p class="text-lg text-gray-900 mb-4"><span class="font-semibold">Penjelasan:</span></p>
            <p class="text-base text-gray-700 leading-relaxed">{{ $result->explanation }}</p>
        </div>
        <a
            href="{{ route('stunting-check') }}"
            class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold py-3 rounded-lg hover:from-blue-700 hover:to-indigo-700 transition-all duration-300 ease-in-out transform hover:scale-105 shadow-md text-center"
        >
            Ulangi
        </a>
    @endif
</div>
