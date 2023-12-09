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
        <form action="{{ route('parent-entry') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="nim" class="form-label">NIM <span>*</span></label>
                <input type="text" name="nim" class="form-control input @error('nim') is-invalid @enderror" id="nim"
                    placeholder="NIM Mahasiswa" readonly value="{{ old('nim', $user->mahasiswa->nim)}}">
                @error('nim')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nama-ayah" class="form-label">Nama Ayah</label>
                <input type="text" name="nama_ayah" class="form-control input @error('nama_ayah') is-invalid @enderror"
                    id="nama-ayah" placeholder="Masukkan Nama Ayah"
                    value="{{ old('nama_ayah') ?? (auth()->user()->ortu ? auth()->user()->ortu->nama_ayah : '') }}">
                @error('nama_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nama-ibu" class="form-label">Nama Ibu</label>
                <input type="text" name="nama_ibu" class="form-control input @error('nama_ibu') is-invalid @enderror"
                    id="nama-ibu" placeholder="Masukkan Nama Ibu"
                    value="{{ old('nama_ibu') ?? (auth()->user()->ortu ? auth()->user()->ortu->nama_ibu : '') }}">
                @error('nama_ibu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="pekerjaan-ayah" class="form-label">Pekerjaan Ayah</label>
                <input type="text" name="pekerjaan_ayah"
                    class="form-control input @error('pekerjaan_ayah') is-invalid @enderror" id="pekerjaan-ayah"
                    placeholder="Masukkan Pekerjaan Ayah"
                    value="{{ old('pekerjaan_ayah') ?? (auth()->user()->ortu ? auth()->user()->ortu->pekerjaan_ayah : '') }}">
                @error('pekerjaan_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="pekerjaan-ibu" class="form-label">Pekerjaan Ibu</label>
                <input type="text" name="pekerjaan_ibu"
                    class="form-control input @error('pekerjaan_ibu') is-invalid @enderror" id="pekerjaan-ibu"
                    placeholder="Masukkan Pekerjaan Ibu"
                    value="{{ old('pekerjaan_ibu') ?? (auth()->user()->ortu ? auth()->user()->ortu->pekerjaan_ibu : '') }}">
                @error('pekerjaan_ibu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="no" class="form-label">No. Hp Ortu </label>
                <input type="text" name="no_hp" class="form-control input @error('no_hp') is-invalid @enderror" id="no"
                    placeholder="Masukkan Nomor HP Ortu"
                    value="{{ old('no_hp') ?? (auth()->user()->ortu ? auth()->user()->ortu->no_hp : '') }}">
                @error('no_hp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="pendidikan-ayah" class="form-label" name="pendidikan_ayah">Pendidikan Ayah</label>
                <select class="form-control input @error('pendidikan_ayah') is-invalid @enderror" id="pendidikan-ayah"
                    name="pendidikan_ayah">
                    <option value="" disabled selected id="defautlSelect">Pilih Pendidikan</option>
                    <option value="SD" @if(old('pendidikan_ayah')==='SD' || (auth()->user()->ortu &&
                        auth()->user()->ortu->pendidikan_ayah === 'SD')) selected @endif>SD</option>
                    <option value="SMP" @if(old('pendidikan_ayah')==='SMP' || (auth()->user()->ortu &&
                        auth()->user()->ortu->pendidikan_ayah === 'SMP')) selected @endif>SMP</option>
                    <option value="SMA" @if(old('pendidikan_ayah')==='SMA' || (auth()->user()->ortu &&
                        auth()->user()->ortu->pendidikan_ayah === 'SMA')) selected @endif>SMA</option>
                    <option value="Diploma III" @if(old('pendidikan_ayah')==='Diploma III' || (auth()->user()->ortu &&
                        auth()->user()->ortu->pendidikan_ayah === 'Diploma III')) selected @endif>Diploma III</option>
                    <option value="D4/Strata I" @if(old('pendidikan_ayah')==='D4/Strata I' || (auth()->user()->ortu &&
                        auth()->user()->ortu->pendidikan_ayah === 'D4/Strata I')) selected @endif>D4/Strata I</option>
                </select>
                @error('pendidikan_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="pendidikan-ibu" class="form-label" name="pendidikan_ibu">Pendidikan Ibu</label>
                <select class="form-control input @error('pendidikan_ibu') is-invalid @enderror" id="pendidikan-ibu"
                    name="pendidikan_ibu">
                    <option value="" disabled selected id="defautlSelect">Pilih Pendidikan</option>
                    <option value="SD" @if(old('pendidikan_ibu')==='SD' || (auth()->user()->ortu &&
                        auth()->user()->ortu->pendidikan_ibu === 'SD')) selected @endif>SD</option>
                    <option value="SMP" @if(old('pendidikan_ibu')==='SMP' || (auth()->user()->ortu &&
                        auth()->user()->ortu->pendidikan_ibu === 'SMP')) selected @endif>SMP</option>
                    <option value="SMA" @if(old('pendidikan_ibu')==='SMA' || (auth()->user()->ortu &&
                        auth()->user()->ortu->pendidikan_ibu === 'SMA')) selected @endif>SMA</option>
                    <option value="Dimploma III" @if(old('pendidikan_ibu')==='Diploma III' || (auth()->user()->ortu &&
                        auth()->user()->ortu->pendidikan_ibu === 'Diploma III')) selected @endif>Diploma III</option>
                    <option value="D4/Strata I" @if(old('pendidikan_ibu')==='Strata I' || (auth()->user()->ortu &&
                        auth()->user()->ortu->pendidikan_ibu === 'Strata I')) selected @endif>D4/Strata I</option>
                </select>
                @error('pendidikan_ibu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="gaji-ayah" class="form-label">Gaji Ayah</label>
                <input type="text" class="form-control input @error('gaji_ayah') is-invalid @enderror" id="gaji-ayah"
                    placeholder="Masukkan Gaji Ayah" name="gaji_ayah"
                    value="{{ old('gaji_ayah') ?? (auth()->user()->ortu ? auth()->user()->ortu->gaji_ayah : '') }}">
                @error('gaji_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="gaji-ibu" class="form-label">Gaji Ibu</label>
                <input type="text" class="form-control input @error('gaji_ibu') is-invalid @enderror" id="gaji-ibu"
                    placeholder="Masukkan Gaji Ibu" name="gaji_ibu"
                    value="{{ old('gaji_ibu') ?? (auth()->user()->ortu ? auth()->user()->ortu->gaji_ibu : '') }}">
                @error('gaji_ibu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="jumlah-tanggungan" class="form-label">Jumlah Tanggungan</label>
                <select class="form-control input @error('jumlah_tanggungan') is-invalid @enderror"
                    id="jumlah_tanggungan" name="jumlah_tanggungan" required>
                    <option value="" disabled selected id="defautlSelect">Pilih Tanggungan</option>
                    <option value="1-2 Orang" @if(old('jumlah_tanggungan')==='1-2 Orang' || (auth()->user()->ortu &&
                        auth()->user()->ortu->jumlah_tanggungan === '1-2 Orang')) selected @endif>1-2 Orang</option>
                    <option value="3 Orang" @if(old('jumlah_tanggungan')==='3 Orang' || (auth()->user()->ortu &&
                        auth()->user()->ortu->jumlah_tanggungan === '3 Orang')) selected @endif>3 Orang</option>
                    <option value="4 Orang" @if(old('jumlah_tanggungan')==='4 Orang' || (auth()->user()->ortu &&
                        auth()->user()->ortu->jumlah_tanggungan === '4 Orang')) selected @endif>4 Orang</option>
                    <option value="5 Orang" @if(old('jumlah_tanggungan')==='5 Orang' || (auth()->user()->ortu &&
                        auth()->user()->ortu->jumlah_tanggungan === '5 Orang')) selected @endif>5 Orang</option>
                    <option value=">5 Orang" @if(old('jumlah_tanggungan')==='>5 Orang' || (auth()->user()->ortu &&
                        auth()->user()->ortu->jumlah_tanggungan === '>5 Orang')) selected @endif> >5 Orang</option>
                </select>
                @error('jumlah_tanggungan')
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

@section('js')
<script>
    @if(session('success'))
    Swal.fire({
        icon: 'success',
        title: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 1500
    });
    @endif

</script>
@endsection
