<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Orang Tua Mahasiswa</title>

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
    <h1>Data Orang Tua Mahasiswa</h1>
    <table align="center">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>Pendidikan Ayah</th>
                <th>Pendidikan Ibu</th>
                <th>Gaji Ayah</th>
                <th>Gaji Ibu</th>
                <th>Jumlah Tanggungan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
            <tr>
                <td>{{ $item->nim }}</td>
                <td>{{ $item->nama_ayah }}</td>
                <td>{{ $item->nama_ibu }}</td>
                <td>{{ $item->pendidikan_ayah }}</td>
                <td>{{ $item->pendidikan_ibu }}</td>
                <td>{{ $item->gaji_ayah }}</td>
                <td>{{ $item->gaji_ibu }}</td>
                <td>{{ $item->jumlah_tanggungan }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="7" align="center">Tidak Ada Data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
