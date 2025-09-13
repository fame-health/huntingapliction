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
    // 🔹 Meta SEO
    public $title = 'Cek Stunting | Aplikasi Stunting';
    public $description = 'Gunakan kuesioner interaktif untuk mengetahui risiko stunting anak berdasarkan pola makan, gizi, dan lingkungan.';
    public $keywords = 'cek stunting, aplikasi stunting, tes gizi anak, pencegahan stunting, kesehatan anak';
    public $image = '/images/stunting-check-cover.jpg';

    // 🔹 Data form & logic
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
        // Inisialisasi jawaban
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

        // Simpan jawaban
        foreach ($this->answers as $questionId => $answer) {
            Answer::create([
                'guest_id' => $guestId,
                'question_id' => $questionId,
                'answer' => $answer,
            ]);
            $score += $answer;
        }

        // Interpretasi
        if ($score >= 11) {
            $interpretation = 'tinggi';
            $explanation = 'Risiko stunting tinggi. Berdasarkan WHO & UNICEF Joint Malnutrition Report 2021...';
        } elseif ($score >= 6) {
            $interpretation = 'sedang';
            $explanation = 'Risiko stunting sedang. Studi (Black et al., 2013)...';
        } else {
            $interpretation = 'rendah';
            $explanation = 'Risiko stunting rendah. Berdasarkan Lancet 2013...';
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

            // 🔹 kirim meta ke layout
            'title' => $this->title,
            'description' => $this->description,
            'keywords' => $this->keywords,
            'image' => $this->image,
        ]);
    }
}
