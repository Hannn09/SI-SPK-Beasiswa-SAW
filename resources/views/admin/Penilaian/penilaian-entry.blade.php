@extends('layouts.admin')

@section('title','RaiseMe | Form Penilaian')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Penilaian</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="{{ route('penilaian-store') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="jenis-kriteria" class="form-label">NIM</label>
                <select class="form-control input @error('nim') is-invalid @enderror" id="jenis-kriteria" name="nim">
                    <option value="" disabled selected id="defautlSelect">Pilih NIM</option>
                    @forelse ($user as $data)
                    @if ($data->ortu)
                    <option value="{{ $data->ortu->nim }}">{{ $data->ortu->nim }}</option>
                    @endif
                    @empty
                    <option value="">Tidak Ada Data</option>
                    @endforelse
                </select>
                @foreach ($errors->all() ?? [] as $error)
                <div>{{ $error }}</div>
                @endforeach
            </div>
            <input type="hidden" name="ortu_id" id="ortu_id">
            <input type="hidden" name="file_id" id="file_id">
            <div class="mb-4">
                <label for="gaji_ayah" class="form-label">Pendapatan Ayah<span>*</span></label>
                <input type="text" class="form-control input " id="gaji_ayah" name="pendapatan_ayah" readonly>
                @error('nilai_gaji_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="gaji_ibu" class="form-label">Pendapatan Ibu<span>*</span></label>
                <input type="text" class="form-control input" id="gaji_ibu" name="pendapatan_ibu" readonly>
                @error('nilai_gaji_ibu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="pendidikan_ayah" class="form-label">Pendidikan Ayah<span>*</span></label>
                <input type="text" class="form-control input" id="pendidikan_ayah" name="pendidikan_ayah" readonly>
                @error('nilai_pendidikan_ayah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="pendidikan_ibu" class="form-label">Pendidikan Ibu<span>*</span></label>
                <input type="text" class="form-control input" id="pendidikan_ibu" name="pendidikan_ibu" readonly>
                @error('nilai_pendidikan_ibu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="jumlah_tanggungan" class="form-label">Jumlah Tanggungan<span>*</span></label>
                <input type="text" class="form-control input" id="jumlah_tanggungan" name="jumlah_tanggungan" readonly>
                @error('nilai_jumlah_tanggungan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="jumlah_file" class="form-label">Jumlah File<span>*</span></label>
                <input type="text" class="form-control input" id="jumlah_file" name="jumlah_file" readonly>
                @error('nilai_jumlah_file')
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
    // Preloaded data object
    var preloadedData = {
        @foreach($user as $data)
        @if($data->ortu)
        '{{ $data->ortu->nim }}': {
            'id': '{{ $data->ortu->id }}',
            'gaji_ayah': '{{ $data->ortu->gaji_ayah }}',
            'gaji_ibu': '{{ $data->ortu->gaji_ibu }}',
            'pendidikan_ayah': '{{ $data->ortu->pendidikan_ayah }}',
            'pendidikan_ibu': '{{ $data->ortu->pendidikan_ibu }}',
            'jumlah_tanggungan': '{{ $data->ortu->jumlah_tanggungan }}',
        },
        @endif
        @endforeach
    };

    var preloadedFiles = {
        @foreach($user as $data)
        @if($data->file)
        '{{ $data->file->nim }}': {
            'file_kk': '{{ $data->file->file_kk ? 1 : 0 }}',
            'file_ktp': '{{ $data->file->file_ktp ? 1 : 0 }}',
            'file_kip': '{{ $data->file->file_kip ? 1 : 0 }}',
            'file_foto': '{{ $data->file->file_foto ? 1 : 0 }}',
            'file_sertifikat': '{{ $data->file->file_sertifikat ? 1 : 0 }}',
            'file_khs': '{{ $data->file->file_khs ? 1 : 0 }}',
        },
        @endif
        @endforeach
    };

    var preloadID = {
        @foreach($user as $data)
        @if($data->file)
        '{{ $data->file->nim }}': '{{ $data->file->id }}',
        @endif
        @endforeach
    };
    // Get the select box element
    var selectBox = document.getElementById('jenis-kriteria');

    // Get the textbox element
    var txt_gajiAyah = document.getElementById('gaji_ayah');
    var txt_gajiIbu = document.getElementById('gaji_ibu');
    var txt_pendidikanAyah = document.getElementById('pendidikan_ayah');
    var txt_pendidikanIbu = document.getElementById('pendidikan_ibu');
    var jumlah_tanggungan = document.getElementById('jumlah_tanggungan');
    var txt_ortuID = document.getElementById('ortu_id');
    var txt_fileID = document.getElementById('file_id');
    var jumlah_files = document.getElementById('jumlah_file');

    // Listen for changes in the select box
    selectBox.addEventListener('change', function () {
        // Get the selected value
        var selectedValue = selectBox.value;

        // Retrieve the related data from the preloaded data object
        var selectedData = preloadedData[selectedValue] || {};
        var selectedFiles = preloadedFiles[selectedValue] || {};
        var selectedID = preloadID[selectedValue] || '';

        // Update the textbox value with the retrieved data
        txt_ortuID.value = selectedData.id;
        txt_fileID.value = selectedID;
        txt_gajiAyah.value = selectedData.gaji_ayah;
        txt_gajiIbu.value = selectedData.gaji_ibu;
        txt_pendidikanAyah.value = selectedData.pendidikan_ayah;
        txt_pendidikanIbu.value = selectedData.pendidikan_ibu;
        jumlah_tanggungan.value = selectedData.jumlah_tanggungan;

        // Calculate the count of all files
        var countFiles = Object.values(selectedFiles);
        var totalCount = countFiles.reduce(function (a, b) {
            return a + parseInt(b);
        }, 0);

        // Update the textbox value with the count of files
        jumlah_files.value = totalCount;
    });

</script>
@endsection
