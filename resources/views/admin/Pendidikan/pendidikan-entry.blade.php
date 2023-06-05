@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','RaiseMe | Data Pendidikan')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Kriteria Pendidikan</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="{{ route('pendidikan-store') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="jenis-kriteria" class="form-label">Jenis Kriteria</label>
                <select class="form-control input @error('kriteria_id') is-invalid @enderror" id="jenis-kriteria"
                    name="kriteria_id">
                    <option value="" disabled selected id="defautlSelect">Pilih Kriteria</option>
                    @foreach ($kriteria as $kriterias)
                    <option value="{{ $kriterias->id }}">{{ $kriterias->nama }}</option>
                    @endforeach
                </select>
                @error('kriteria_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="sub" class="form-label">Sub Kriteria Pendidikan<span>*</span></label>
                <select class="form-control input @error('sub_kriteria') is-invalid @enderror" id="sub"
                    name="sub_kriteria">
                    <option value="" disabled selected id="defautlSelect">Pilih Pendidikan</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="Dimploma III">Diploma III</option>
                    <option value="D4/Strata I">D4/Strata I</option>
                </select>
                @error('sub_kriteria')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="skor" class="form-label">Skor<span>*</span></label>
                <input type="number" class="form-control input @error('nilai_sub_kriteria') is-invalid @enderror"
                    id="skor" placeholder="Masukkan Skor Sub Kriteria" name="nilai_sub_kriteria">
                @error('nilai_sub_kriteria')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary py-2 px-5 rounded-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection
