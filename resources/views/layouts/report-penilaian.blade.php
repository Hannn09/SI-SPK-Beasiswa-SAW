<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Penilaian</title>

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
    <h1>Data Penilaian Mahasiswa</h1>
    <table align="center">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nilai Gaji Ayah</th>
                <th>Nilai Gaji Ibu</th>
                <th>Nilai Pendidikan Ayah</th>
                <th>Nilai Pendidikan Ibu</th>
                <th>Nilai Jumlah Tanggungan</th>
                <th>Nilai Jumlah File</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
            <tr>
                <td>{{ $item->ortu->nim }}</td>
                <td>{{ $item->nilai_gaji_ayah }}</td>
                <td>{{ $item->nilai_gaji_ibu }}</td>
                <td>{{ $item->nilai_pendidikan_ayah }}</td>
                <td>{{ $item->nilai_pendidikan_ibu }}</td>
                <td>{{ $item->nilai_jumlah_tanggungan }}</td>
                <td>{{ $item->nilai_jumlah_file }}</td>
            </tr>
            @empty
                <tr>
                    <td colspan="10">Tidak Ada Data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
