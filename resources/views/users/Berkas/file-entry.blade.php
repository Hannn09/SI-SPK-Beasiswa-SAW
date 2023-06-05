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
        <form action="{{ route('file-entry') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="nim" class="form-label">NIM <span>*</span></label>
                <input type="text" class="form-control input @error('nim') is-invalid @enderror" id="nim" name="nim" placeholder="NIM Mahasiswa" readonly required value="{{ old('nim', $user->mahasiswa->nim)}}">
                @error('nim')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="file-kk" class="form-label">File KK</label>
                <input class="form-control input @error('file_kk') is-invalid @enderror" type="file" name="file_kk" id="file-kk" accept=".pdf">
                {{-- <img src="{{  }}" alt=""> --}}
                @error('file_kk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <span>{{ old('file_kk') ?? (auth()->user()->file ? basename(auth()->user()->file->file_kk) : '') }}</span>
            </div>
            <div class="mb-4">
                <label for="file-ktp" class="form-label">File KTP</label>
                <input class="form-control input @error('file_ktp') is-invalid @enderror" type="file" name="file_ktp" id="file-ktp" accept=".pdf">
                @error('file_ktp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <span>{{ old('file_ktp') ?? (auth()->user()->file ? basename(auth()->user()->file->file_ktp) : '') }}</span>
            </div>
            <div class="mb-4">
                <label for="file-kip" class="form-label">File KIP</label>
                <input class="form-control input @error('file_kip') is-invalid @enderror" type="file" name="file_kip" id="file-kip" accept=".pdf">
                @error('file_kip')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <span>{{ old('file_kip') ?? (auth()->user()->file ? basename(auth()->user()->file->file_kip) : '') }}</span>
            </div>
            <div class="mb-4">
                <label for="foto" class="form-label">Foto</label>
                <input class="form-control input @error('file_foto') is-invalid @enderror" type="file" name="file_foto" id="foto">
                @error('file_foto')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <span>{{ old('file_foto') ?? (auth()->user()->file ? basename(auth()->user()->file->file_foto) : '') }}</span>
            </div>
             <div class="mb-4">
                <label for="sertifikat" class="form-label">File Sertifikat</label>
                <input class="form-control input @error('file_sertifikat') is-invalid @enderror" type="file" name="file_sertifikat" id="sertifikat" multiple accept=".pdf">
                @error('file_sertifikat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <span>{{ old('file_sertifikat') ?? (auth()->user()->file ? basename(auth()->user()->file->file_sertifikat) : '') }}</span>
            </div>
            <div class="mb-4">
                <label for="file-khs" class="form-label">File KHS</label>
                <input class="form-control input @error('file_khs') is-invalid @enderror" type="file" name="file_khs" id="file-khs" accept=".pdf">
                @error('file_khs')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <span>{{ old('file_khs') ?? (auth()->user()->file ? basename(auth()->user()->file->file_khs) : '') }}</span>
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
