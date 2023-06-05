@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','RaiseMe | Data Kriteria')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Kriteria</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="{{ route('kriteria-store') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="nama" class="form-label">Nama Kriteria<span>*</span></label>
                <input type="text" class="form-control input @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama Kriteria" name="nama">
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="bobot" class="form-label">Bobot<span>*</span></label>
                <input type="text" class="form-control input @error('bobot') is-invalid @enderror" id="bobot" placeholder="Masukkan Bobot Kriteria" name="bobot">
            </div>
            <button type="submit" class="btn btn-primary py-2 px-5 rounded-3 w-100">Submit</button>
             @error('bobot')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </form>
    </div>
</div>
@endsection

