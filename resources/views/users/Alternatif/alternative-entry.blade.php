@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','RaiseMe | Data Alternatif')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Alternatif</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="" method="">
            <div class="mb-4">
                <label for="nim" class="form-label">NIM <span>*</span></label>
                <input type="text" class="form-control input" id="nim" placeholder="Enter your NIM">
            </div>
            <div class="mb-4">
                <label for="nama" class="form-label">Nama <span>*</span></label>
                <input type="text" class="form-control input" id="nama" placeholder="Enter your full name">
            </div>
            <div class="mb-4">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control input" id="alamat" rows="5" placeholder="Enter your address"></textarea>
            </div>
            <div class="mb-4">
                <label for="no" class="form-label">No.Hp</label>
                <input type="text" class="form-control input" id="no" placeholder="Enter your phone number">
            </div>
            <div class="mb-4">
                <label for="major" class="form-label">Program Studi</label>
                <select class="form-control input" id="major" name="major">
                    <option value="" disabled selected id="defautlSelect">Pilih Program Studi</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Teknik Elektronika">Teknik Elektronika</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                    <option value="Teknik Arsitek">Teknik Arsitek</option>
                    <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                    <option value="Teknik Kimia">Teknik Kimia</option>
                </select>
            </div>
            <div class="mb-4 d-flex flex-column gap-3">
                <label for="">Gender</label>
                <div class="input-radio">
                    <input class="form-check-input input custom-checked" type="radio" name="man" id="man">
                    <label class="form-check-label" for="man">
                        Laki - Laki
                    </label>
                </div>
                <div class="input-radio">
                    <input class="form-check-input input custom-checked" type="radio" name="man" id="man">
                    <label class="form-check-label" for="man">
                        Perempuan
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary py-2 px-5 rounded-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection
