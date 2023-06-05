<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Ranking</title>

    <style>
        body {
            box-sizing: border-box;
            font-size: 16px;
        }
        h1 {
            text-align: center;
        }
        table {
            box-sizing: border-box;
            border: 2px solid black;
            border-collapse: collapse;
            width: 100%;
        }
        thead {
            background-color: #0d47a1;
            color: white;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            text-align: left;
            padding: 10px;
        }
        .center {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Data Rank</h1>
    <table align="center">
        <thead>
            <tr>
            <td>NIM</td>
            <td>Nama</td>
            <td>Total Nilai</td>
            <td>Rank</td>
        </tr>
    </thead>
    <tbody>
        @php
            $rank = 1; // Inisialisasi variabel rank
        @endphp
        @foreach ($data->sortByDesc(function ($penilaian) {
            return ($penilaian->nilai_gaji_ayah * 0.25) +
                ($penilaian->nilai_gaji_ibu * 0.25) +
                ($penilaian->nilai_pendidikan_ayah * 0.1) +
                ($penilaian->nilai_pendidikan_ibu * 0.1) +
                ($penilaian->nilai_jumlah_tanggungan * 0.2) +
                ($penilaian->nilai_jumlah_file * 0.1);
        }) as $penilaian)
            <tr>
                <td>{{ $penilaian->ortu->nim }}</td>
                  <td>{{ $penilaian->ortu->user->alternatif->nama }}</td>
                <td align="center">
                    @php
                        $total_nilai = ($penilaian->nilai_gaji_ayah * 0.25) +
                            ($penilaian->nilai_gaji_ibu * 0.25) +
                            ($penilaian->nilai_pendidikan_ayah * 0.1) +
                            ($penilaian->nilai_pendidikan_ibu * 0.1) +
                            ($penilaian->nilai_jumlah_tanggungan * 0.2) +
                            ($penilaian->nilai_jumlah_file * 0.1);
                    @endphp
                    {{ $total_nilai }}
                </td>
                <td align="center">{{ $rank++ }}</td>    
            </tr>
        @endforeach
    </tbody>
    </table>
</body>

</html>
