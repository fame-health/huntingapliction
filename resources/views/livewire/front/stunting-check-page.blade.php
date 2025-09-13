<div class="stunting-container">
    @if($step === 1)
        <h1>{{ $title }}</h1>
        <form wire:submit.prevent="submitGuestInfo" aria-labelledby="guest-info-title">
            <div class="form-group">
                <label for="name">Nama</label>
                <input
                    type="text"
                    wire:model="name"
                    id="name"
                    placeholder="Masukkan nama"
                    aria-required="true"
                    class="form-input"
                >
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="gender">Jenis Kelamin</label>
                <select wire:model="gender" id="gender" aria-required="true" class="form-input">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="male">Laki-laki</option>
                    <option value="female">Perempuan</option>
                </select>
                @error('gender')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="birth_date">Tanggal Lahir</label>
                <input
                    type="date"
                    wire:model="birth_date"
                    id="birth_date"
                    aria-required="true"
                    class="form-input"
                >
                @error('birth_date')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="cta-button">
                <span class="material-icons-outlined">arrow_forward</span>
                Lanjut
            </button>
        </form>
    @elseif($step === 2)
        <h1>Pertanyaan Stunting</h1>
        <form wire:submit.prevent="submitAnswers" aria-labelledby="questions-title">
            @foreach($questions as $index => $question)
                <div class="question-group">
                    <p>{{ $index + 1 }}. {{ $question['text'] }}</p>
                    <div class="radio-group">
                        <label class="radio-label">
                            <input
                                type="radio"
                                wire:model="answers.{{ $question['id'] }}"
                                value="1"
                                aria-label="Ya untuk pertanyaan {{ $index + 1 }}"
                            >
                            <span>Ya</span>
                        </label>
                        <label class="radio-label">
                            <input
                                type="radio"
                                wire:model="answers.{{ $question['id'] }}"
                                value="0"
                                aria-label="Tidak untuk pertanyaan {{ $index + 1 }}"
                            >
                            <span>Tidak</span>
                        </label>
                    </div>
                    @error('answers.' . $question['id'])
                        <span class="error">{{ $message }}</span>
                    @enderror
                    @if($loop->last)
                        <button type="submit" class="cta-button">
                            <span class="material-icons-outlined">send</span>
                            Kirim
                        </button>
                    @endif
                </div>
            @endforeach
        </form>
    @else
<h1>Hasil Stunting</h1>

<div class="stunting-result
    @if($result->interpretation === 'rendah') result-low
    @elseif($result->interpretation === 'sedang') result-medium
    @elseif($result->interpretation === 'tinggi') result-high
    @endif">

    <div class="result-stats">
        <span><strong>Status:</strong> {{ ucfirst($result->interpretation) }}</span><br>
        <span><strong>Skor:</strong> {{ $result->score }}</span>
    </div>

    <p><strong>Penjelasan:</strong></p>
    <p>{{ $result->explanation }}</p>
</div>

<a href="{{ route('stunting-check') }}" class="cta-button">
    <span class="material-icons-outlined">replay</span>
    Ulangi
</a>


    @endif
</div>
