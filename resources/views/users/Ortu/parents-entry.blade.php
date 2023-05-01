@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','RaiseMe | Data Alternatif')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Ortu</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="" method="">
            <div class="mb-4">
                <label for="nim" class="form-label">NIM <span>*</span></label>
                <input type="text" class="form-control input" id="nim" placeholder="NIM Mahasiswa" disabled>
            </div>
            <div class="mb-4">
                <label for="nama-ayah" class="form-label">Nama Ayah</label>
                <input type="text" class="form-control input" id="nama-ayah" placeholder="Masukkan Nama Ayah">
            </div>
            <div class="mb-4">
                <label for="nama-ibu" class="form-label">Nama Ibu</label>
                <input type="text" class="form-control input" id="nama-ibu" placeholder="Masukkan Nama Ibu">
            </div>
            <div class="mb-4">
                <label for="pekerjaan-ayah" class="form-label">Pekerjaan Ayah</label>
                <input type="text" class="form-control input" id="pekerjaan-ayah" placeholder="Masukkan Pekerjaan Ayah">
            </div>
            <div class="mb-4">
                <label for="pekerjaan-ibu" class="form-label">Pekerjaan Ibu</label>
                <input type="text" class="form-control input" id="pekerjaan-ibu" placeholder="Masukkan Pekerjaan Ibu">
            </div>
            <div class="mb-4">
                <label for="no" class="form-label">No. Hp Ortu </label>
                <input type="text" class="form-control input" id="no" placeholder="Masukkan Nomor HP Ortu">
            </div>
            <div class="mb-4">
                <label for="pendidikan-ayah" class="form-label">Pendidikan Ayah</label>
                <select class="form-control input" id="pendidikan-ayah" name="pendidikan-ayah">
                    <option value="" disabled selected id="defautlSelect">Pilih Pendidikan</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="Dimploma III">Diploma III</option>
                    <option value="D4/Strata I">D4/Strata I</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="pendidikan-ibu" class="form-label">Pendidikan Ibu</label>
                <select class="form-control input" id="pendidikan-ibu" name="pendidikan-ibu">
                    <option value="" disabled selected id="defautlSelect">Pilih Pendidikan</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="Dimploma III">Diploma III</option>
                    <option value="D4/Strata I">D4/Strata I</option>
                </select>
            </div>
             <div class="mb-4">
                <label for="gaji-ayah" class="form-label">Gaji Ayah</label>
                <input type="text" class="form-control input" id="gaji-ayah" placeholder="Masukkan Gaji Ayah">
            </div>
             <div class="mb-4">
                <label for="gaji-ibu" class="form-label">Gaji Ibu</label>
                <input type="text" class="form-control input" id="gaji-ibu" placeholder="Masukkan Gaji Ibu">
            </div>
             <div class="mb-4">
                <label for="jumlah-tanggungan" class="form-label">Jumlah Tanggungan</label>
                <input type="number" class="form-control input" id="jumlah-tanggungan" placeholder="Masukkan Gaji Ayah">
            </div>
            <button type="submit" class="btn btn-primary py-2 px-5 rounded-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection
