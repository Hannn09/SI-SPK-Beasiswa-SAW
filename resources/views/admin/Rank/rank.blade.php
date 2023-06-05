@extends('layouts.admin')

@section('title','RaiseMe | Data Penilaian')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<h1 class="fw-semibold mb-3 fs-3">Perangkingan</h1>
    <button class="mb-4 border-0 px-3 py-2 rounded-2 btn btn-primary" onclick="location.href='{{ route('report-pdf-ranking') }}'">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-printer me-2"
            viewBox="0 0 16 16">
            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
            <path
                d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
        </svg>
        Cetak Data
    </button>
<table class="table table-bordered overflow-auto" id="rank-table">
    <thead class="table-secondary">
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


@endsection
