@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','RaiseMe | Data Berkas')



@section('content')
<div class="overflow-x-scroll">
    <h4 class="fw-semibold mb-3">Data Ortu</h4>
    <button class="mb-4 border-0 px-3 py-2 rounded-2 btn btn-primary" onclick="location.href='{{ route('report-pdf-ortu') }}'">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-printer me-2"
        viewBox="0 0 16 16">
        <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
        <path
            d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z" />
    </svg>
    Cetak Data
</button>
    {{-- Section Table --}}
    <table class="table table-bordered">
        <thead class="table-secondary">
            <tr>
                <th>NIM</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>Pekerjaan Ayah</th>
                <th>Pekerjaan Ibu</th>
                <th>No Hp</th>
                <th>Pendidikan Ayah</th>
                <th>Pendidikan Ibu</th>
                <th>Gaji Ayah</th>
                <th>Gaji Ibu</th>
                <th>Jumlah Tanggungan</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($user as $data)
            <tr>
                <td>{{ $data->nim }}</td>
                <td>{{ $data->nama_ayah }}</td>
                <td>{{ $data->nama_ibu }}</td>
                <td>{{ $data->pekerjaan_ayah }}</td>
                <td>{{ $data->pekerjaan_ibu }}</td>
                <td>{{ $data->no_hp }}</td>
                <td>{{ $data->pendidikan_ayah }}</td>
                <td>{{ $data->pendidikan_ibu }}</td>
                <td>{{ $data->gaji_ayah }}</td>
                <td>{{ $data->gaji_ibu }}</td>
                <td>{{ $data->jumlah_tanggungan }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="11" align="center">Tidak Ada Data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
