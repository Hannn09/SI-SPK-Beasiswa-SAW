@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','RaiseMe | Data Alternatif')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Berkas</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="" method="">
            <div class="mb-4">
                <label for="nim" class="form-label">NIM <span>*</span></label>
                <input type="text" class="form-control input" id="nim" placeholder="NIM Mahasiswa" disabled>
            </div>
            <div class="mb-4">
                <label for="file-kk" class="form-label">File KK</label>
                <input class="form-control input" type="file" id="file-kk">
            </div>
            <div class="mb-4">
                <label for="file-ktp" class="form-label">File KTP</label>
                <input class="form-control input" type="file" id="file-ktp">
            </div>
            <div class="mb-4">
                <label for="file-kip" class="form-label">File KIP</label>
                <input class="form-control input" type="file" id="file-kip">
            </div>
            <div class="mb-4">
                <label for="foto" class="form-label">Foto</label>
                <input class="form-control input" type="file" id="foto">
            </div>
            <div class="mb-4">
                <label for="file-khs" class="form-label">File KHS</label>
                 <input class="form-control input" type="file" id="file-khs">
            </div>
            <button type="submit" class="btn btn-primary py-2 px-5 rounded-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection
