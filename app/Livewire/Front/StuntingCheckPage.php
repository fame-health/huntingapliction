<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Guest;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Result;

#[Layout('layouts.front')]
class StuntingCheckPage extends Component
{
    public $title = 'Cek Stunting | Aplikasi Stunting';
    public $name = '';
    public $gender = '';
    public $birth_date = '';
    public $step = 1; // 1: Guest info, 2: Questions, 3: Result
    public $answers = [];
    public $questions = [];
    public $result = null;

    protected $rules = [
        'name' => 'required|string|max:255',
        'gender' => 'required|in:male,female',
        'birth_date' => 'required|date|before:today',
        'answers.*' => 'required|in:0,1',
    ];

    public function mount()
    {
        $this->questions = Question::all()->toArray();
        // Inisialisasi array jawaban
        foreach ($this->questions as $question) {
            $this->answers[$question['id']] = null;
        }
    }

    public function submitGuestInfo()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'birth_date' => 'required|date|before:today',
        ]);

        // Simpan data tamu
        $guest = Guest::create([
            'name' => $this->name,
            'gender' => $this->gender,
            'birth_date' => $this->birth_date,
        ]);

        session(['guest_id' => $guest->id]);
        $this->step = 2;
    }

    public function submitAnswers()
    {
        $this->validate([
            'answers.*' => 'required|in:0,1',
        ]);

        $guestId = session('guest_id');
        $score = 0;

        // Simpan jawaban & hitung skor
        foreach ($this->answers as $questionId => $answer) {
            Answer::create([
                'guest_id' => $guestId,
                'question_id' => $questionId,
                'answer' => $answer,
            ]);
            $score += $answer; // Ya = 1, Tidak = 0
        }

        // Tentukan interpretasi berdasarkan kuesioner
        if ($score >= 11) {
            $interpretation = 'tinggi';
            $explanation = 'Risiko stunting tinggi. Berdasarkan WHO & UNICEF Joint Malnutrition Report 2021, skor tinggi menunjukkan paparan risiko ganda seperti gizi buruk, infeksi berulang, lingkungan tidak sehat, dan masalah sosial-ekonomi. Segera lakukan intervensi gizi dan konsultasi dengan tenaga kesehatan.';
        } elseif ($score >= 6) {
            $interpretation = 'sedang';
            $explanation = 'Risiko stunting sedang. Studi (Black et al., 2013) menunjukkan bahwa faktor risiko sedang tetap dapat berkembang menjadi stunting jika tidak ada intervensi. Perbaiki pola makan, sanitasi, dan akses layanan kesehatan.';
        } else {
            $interpretation = 'rendah';
            $explanation = 'Risiko stunting rendah. Berdasarkan Lancet 2013, fokuskan pada pencegahan dan pemeliharaan gizi anak serta pemantauan pertumbuhan secara rutin.';
        }

        // Simpan hasil
        $this->result = Result::create([
            'guest_id' => $guestId,
            'score' => $score,
            'interpretation' => $interpretation,
            'explanation' => $explanation,
        ]);

        $this->step = 3;
    }

    public function render()
    {
        return view('livewire.front.stunting-check-page', [
            'questions' => $this->questions,
            'result' => $this->result,
        ]);
    }
}
