@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','RaiseMe | Data Berkas')



@section('content')
<div class="overflow-x-scroll">
    <h4 class="fw-semibold mb-4">Data Berkas</h4>
    {{-- Section Table --}}
    <table class="table table-bordered">
        <thead class="table-secondary">
            <tr>
                <th>NIM</th>
                <th>File KK</th>
                <th>File KTP</th>
                <th>File KIP</th>
                <th>File Foto</th>
                <th>File Sertifikat</th>
                <th>File KHS</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($user as $data)
            <tr>
                <td>{{ $data->nim }}</td>
                <td>{{ $data->file_kk }}</td>
                <td>{{ $data->file_ktp }}</td>
                <td>{{ $data->file_kip }}</td>
                <td>{{ $data->file_foto }}</td>
                <td>{{ $data->file_sertifikat }}</td>
                <td>{{ $data->file_khs }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="7" align="center">Tidak Ada Data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
