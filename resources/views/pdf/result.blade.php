<!DOCTYPE html>
<html>
<head>
    <title>Hasil Cek Stunting</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20mm;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h1 {
            margin: 0;
            color: #1a73e8;
        }
        .content {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
        }
        .content p {
            margin: 8px 0;
            line-height: 1.6;
        }
        .content strong {
            color: #333;
        }
        .penjelasan {
            margin-top: 20px;
            padding: 15px;
            background: #f9f9f9;
            border-left: 4px solid #1a73e8;
            line-height: 1.6;
        }
        .penjelasan h3 {
            margin-top: 0;
            color: #1a73e8;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            color: #666;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Hasil Cek Stunting</h1>
        <p>Aplikasi Stunting</p>
    </div>

    <div class="content">
        <p><strong>Nama:</strong> {{ $guest->name }}</p>
        <p><strong>Jenis Kelamin:</strong> {{ $guest->gender === 'male' ? 'Laki-laki' : 'Perempuan' }}</p>
        <p><strong>Tanggal Lahir:</strong> {{ \Carbon\Carbon::parse($guest->birth_date)->format('d/m/Y') }}</p>
        <p><strong>Skor:</strong> {{ $result->score }}</p>
        <p><strong>Interpretasi:</strong> {{ ucfirst($result->interpretation) }}</p>

        <div class="penjelasan">
            <h3>Penjelasan</h3>
            <p>{{ $result->explanation }}</p>
        </div>
    </div>

    <div class="footer">
        <p>Dicetak pada {{ \Carbon\Carbon::now()->format('d/m/Y H:i') }}</p>
        <p>Aplikasi Stunting - All Rights Reserved</p>
    </div>
</body>
</html>
