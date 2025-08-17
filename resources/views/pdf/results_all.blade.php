<!DOCTYPE html>
<html>
<head>
    <title>Laporan Semua Hasil Cek Stunting</title>
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
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            vertical-align: top;
        }
        .table th {
            background-color: #f4f4f4;
            color: #333;
        }
        .penjelasan-row td {
            background-color: #f9f9f9;
            font-style: italic;
            font-size: 14px;
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
        <h1>Laporan Semua Hasil Cek Stunting</h1>
        <p>Aplikasi Stunting</p>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Skor</th>
                <th>Interpretasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($results as $result)
                <tr>
                    <td>{{ $result->guest->name }}</td>
                    <td>{{ $result->guest->gender === 'male' ? 'Laki-laki' : 'Perempuan' }}</td>
                    <td>{{ \Carbon\Carbon::parse($result->guest->birth_date)->format('d/m/Y') }}</td>
                    <td>{{ $result->score }}</td>
                    <td>{{ ucfirst($result->interpretation) }}</td>
                </tr>
                <tr class="penjelasan-row">
                    <td colspan="5"><strong>Penjelasan:</strong> {{ $result->explanation }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        <p>Dicetak pada {{ \Carbon\Carbon::now()->format('d/m/Y H:i') }}</p>
        <p>Aplikasi Stunting - All Rights Reserved</p>
    </div>
</body>
</html>
