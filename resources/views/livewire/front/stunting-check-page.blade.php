<div>
    @if($step === 1)
        <h1>{{ $title }}</h1>
        <form wire:submit.prevent="submitGuestInfo">
            <div>
                <label for="name">Nama</label>
                <input
                    type="text"
                    wire:model="name"
                    id="name"
                    placeholder="Masukkan nama"
                >
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="gender">Jenis Kelamin</label>
                <select wire:model="gender" id="gender">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="male">Laki-laki</option>
                    <option value="female">Perempuan</option>
                </select>
                @error('gender')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="birth_date">Tanggal Lahir</label>
                <input
                    type="date"
                    wire:model="birth_date"
                    id="birth_date"
                >
                @error('birth_date')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <button type="submit">
                Lanjut
            </button>
        </form>
    @elseif($step === 2)
        <h1>Pertanyaan Hunting</h1>
        <form wire:submit.prevent="submitAnswers">
            @foreach($questions as $index => $question)
                <div>
                    <p>{{ $index + 1 }}. {{ $question['text'] }}</p>
                    <div>
                        <label>
                            <input
                                type="radio"
                                wire:model="answers.{{ $question['id'] }}"
                                value="1"
                            >
                            <span>Ya</span>
                        </label>
                        <label>
                            <input
                                type="radio"
                                wire:model="answers.{{ $question['id'] }}"
                                value="0"
                            >
                            <span>Tidak</span>
                        </label>
                    </div>
                    @error('answers.' . $question['id'])
                        <span>{{ $message }}</span>
                    @enderror
                    @if($loop->last)
                        <button type="submit">
                            Kirim
                        </button>
                    @endif
                </div>
            @endforeach
        </form>
    @else
        <h1>Hasil Hunting</h1>
        <div>
            <div>
                <span>
                    Status: {{ ucfirst($result->interpretation) }}
                </span>
                <span>Skor: {{ $result->score }}</span>
            </div>
            <p><strong>Penjelasan:</strong></p>
            <p>{{ $result->explanation }}</p>
        </div>
        <a href="{{ route('stunting-check') }}">
            Ulangi
        </a>
    @endif
</div>
