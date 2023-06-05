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
        <form action="{{ route('alternatif-entry') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="nim" class="form-label">NIM <span>*</span></label>
                <input type="text" class="form-control input @error('nim') is-invalid @enderror" id="nim" name="nim" placeholder="Enter your NIM" required value="{{ old('nim', $user->mahasiswa->nim)}}" readonly>
                @error('nim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nama" class="form-label">Nama <span>*</span></label>
                <input type="text" class="form-control input @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Enter your full name" required value="{{ old('nama') ?? (auth()->user()->alternatif ? auth()->user()->alternatif->nama : '') }}">
                {{-- <input type="text" class="form-control input @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Enter your full name" required value="{{ old('nama') ?? ($user->alternatif ? $user->alternatif->nama : '') }}"> --}}
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="form-label">Email <span>*</span></label>
                <input type="email" class="form-control input @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your email" required value="{{ old('email') ?? (auth()->user()->alternatif ? auth()->user()->alternatif->email : '') }}">
                {{-- <input type="email" class="form-control input @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your email" required value="{{ old('email') ?? ($user->alternatif ? $user->alternatif->email : '') }}"> --}}
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="alamat" class="form-label">Alamat</label>
                 <textarea class="form-control input @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="5" placeholder="Enter your address" required>{{ old('alamat') ?? (auth()->user()->alternatif ? auth()->user()->alternatif->alamat : '') }}</textarea>
                {{-- <textarea class="form-control input @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="5" placeholder="Enter your address" required>{{ old('alamat') ?? ($user->alternatif ? $user->alternatif->alamat : '') }}</textarea> --}}
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="no_hp" class="form-label">No.Hp</label>
                <input type="text" class="form-control input @error('no_hp') is_invalid @enderror" id="no_hp" name="no_hp" placeholder="Enter your phone number" required value="{{ old('no_hp') ?? (auth()->user()->alternatif ? auth()->user()->alternatif->no_hp : '') }}">
                {{-- <input type="text" class="form-control input @error('no_hp') is_invalid @enderror" id="no_hp" name="no_hp" placeholder="Enter your phone number" required value="{{ old('no_hp') ?? ($user->alternatif ? $user->alternatif->no_hp : '') }}"> --}}
                @error('no_hp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="major" class="form-label">Program Studi</label>
                <select class="form-control input @error('program_studi') is-invalid @enderror" id="major" name="program_studi" required">
                    <option value="" disabled selected id="defautlSelect">Pilih Program Studi</option>
                    <option value="Teknik Informatika" @if(old('program_studi') === 'Teknik Informatika' || (auth()->user()->alternatif && auth()->user()->alternatif->program_studi === 'Teknik Informatika')) selected @endif>Teknik Informatika</option>
                    <option value="Teknik Mesin" @if(old('program_studi') === 'Teknik Mesin' || (auth()->user()->alternatif && auth()->user()->alternatif->program_studi === 'Teknik Mesin')) selected @endif>Teknik Mesin</option>
                    <option value="Teknik Elektronika" @if(old('program_studi') === 'Teknik Elektronika' || (auth()->user()->alternatif && auth()->user()->alternatif->program_studi === 'Teknik Elektronika')) selected @endif>Teknik Elektronika</option>
                    <option value="Teknik Sipil" @if(old('program_studi') === 'Teknik Sipil' || (auth()->user()->alternatif && auth()->user()->alternatif->program_studi === 'Teknik Sipil')) selected @endif>Teknik Sipil</option>
                    <option value="Teknik Arsitek" @if(old('program_studi') === 'Teknik Arsitek' || (auth()->user()->alternatif && auth()->user()->alternatif->program_studi === 'Teknik Arsitek')) selected @endif>Teknik Arsitek</option>
                    <option value="Teknik Lingkungan" @if(old('program_studi') === 'Teknik Lingkungan' || (auth()->user()->alternatif && auth()->user()->alternatif->program_studi === 'Teknik Lingkungan')) selected @endif>Teknik Lingkungan</option>
                    <option value="Teknik Kimia" @if(old('program_studi') === 'Teknik Kimia' || (auth()->user()->alternatif && auth()->user()->alternatif->program_studi === 'Teknik Kimia')) selected @endif>Teknik Kimia</option>
                </select>
                @error('program_studi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4 d-flex flex-column gap-3">
                <label for="">Gender</label>
                <div class="input-radio">
                    <input class="form-check-input input custom-checked" type="radio" name="gender" id="gender" value="Laki-Laki" {{ (old('gender') === 'Laki-Laki' || (old('gender') === null && auth()->user()->alternatif && auth()->user()->alternatif->gender === 'Laki-Laki')) ? 'checked' : ''}}>
                    <label class="form-check-label" for="gender">
                        Laki - Laki
                    </label>
                </div>
                <div class="input-radio">
                    <input class="form-check-input input custom-checked" type="radio" name="gender" id="gender" value="Perempuan" {{ (old('gender') === 'Perempuan' || (old('gender') === null && auth()->user()->alternatif && auth()->user()->alternatif->gender === 'Perempuan')) ? 'checked' : ''}}>
                    <label class="form-check-label" for="gender">
                        Perempuan
                    </label>
                </div>
                @error('gender')
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
