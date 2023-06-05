@extends('layouts.admin')

@section('title','RaiseMe | Data Penilaian')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<h4 class="fw-semibold mb-4">Data Penilaian</h4>
<div class="d-flex justify-content-between">
    <button class="btn-add mb-4 border-0 px-3 py-2 text-white rounded-3 fw-medium d-flex align-items-center gap-2"
        onclick="location.href='{{ route('penilaian-entry') }}'">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="white"
                d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2z" />
        </svg>
        Add Data
    </button>
    <button class="mb-4 ms-3 border-0 px-3 py-2 rounded-2 btn btn-primary"
        onclick="location.href='{{ route('report-pdf-penilaian') }}'">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-printer me-2"
            viewBox="0 0 16 16">
            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
            <path
                d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
        </svg>
        Cetak Data
    </button>
</div>
{{-- Section Table --}}
<div class="overflow-x-scroll">
    <table class="table table-bordered overflow-auto">
        <thead class="table-secondary">
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
            @forelse ($penilaian as $data)
            <tr>
                <td>{{ $data->ortu->nim }}</td>
                <td>{{ $data->nilai_gaji_ayah }}</td>
                <td>{{ $data->nilai_gaji_ibu }}</td>
                <td>{{ $data->nilai_pendidikan_ayah }}</td>
                <td>{{ $data->nilai_pendidikan_ibu }}</td>
                <td>{{ $data->nilai_jumlah_tanggungan }}</td>
                <td>{{ $data->nilai_jumlah_file }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="10">Tidak Ada Data</td>
            </tr>
            @endforelse

        </tbody>
    </table>
</div>
@endsection
