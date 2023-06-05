@extends('layouts.admin')

@section('title','RaiseMe | Data Kriteria Pendidikan')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<h4 class="fw-semibold mb-4">Data Kriteria Pendidikan</h4>
{{-- Section Table --}}
<button class="btn-add mb-4 border-0 px-3 py-2 text-white rounded-3 fw-medium d-flex align-items-center gap-2"
    onclick="location.href='{{ route('pendidikan-entry') }}'">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path fill="white" d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2z" />
    </svg>
    Add Data
</button>
<table class="table table-bordered">
    <thead class="table-secondary">
        <tr>
            <th>ID Kriteria Pendidikan</th>
            <th>Sub Kriteria Pendidikan</th>
            <th>Skor</th>
            <th>Jenis Kriteria</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($pendidikan as $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->sub_kriteria }}</td>
            <td>{{ $data->nilai_sub_kriteria }}</td>
            <td>{{ $data->kriteria->nama }}</td>
            <td class="d-flex align-items-center justify-content-center gap-3">
                <button class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#target{{ $data->id }}">
                    Edit
                </button>
                <button type="submit" class="btn btn-danger delete-btn" data-bs-toggle="modal"
                    data-bs-target="#delete{{ $data->id }}">Delete</button>
            </td>
        </tr>
        <!-- Modal Edit -->
        <div class="modal fade" id="target{{ $data->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('pendidikan-update',['id' => $data->id]) }}" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="jenis-kriteria" class="form-label">Jenis Kriteria</label>
                                <select class="form-control input @error('kriteria_id') is-invalid @enderror"
                                    id="jenis-kriteria" name="kriteria_id">
                                    <option value="" disabled selected id="defautlSelect">Pilih Kriteria</option>
                                    @foreach ($kriteria as $kriterias)
                                    <option value="{{ $kriterias->id }}"
                                        {{ $data->kriteria_id == $kriterias->id ? 'selected' : '' }}>
                                        {{ $kriterias->nama }}
                                    </option>
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
                                    <option value="SD" {{ $data->sub_kriteria == 'SD' ? 'selected' : '' }}>SD
                                    </option>
                                    <option value="SMP" {{ $data->sub_kriteria == 'SMP' ? 'selected' : '' }}>SMP
                                    </option>
                                    <option value="SMA" {{ $data->sub_kriteria == 'SMA' ? 'selected' : '' }}>SMA
                                    </option>
                                    <option value="Diploma III"
                                        {{ $data->sub_kriteria == 'Diploma III' ? 'selected' : '' }}>Diploma III
                                    </option>
                                    <option value="D4/Strata I"
                                        {{ $data->sub_kriteria == 'D4/Strata I' ? 'selected' : '' }}>D4/Strata I
                                    </option>
                                </select>

                                @error('sub_kriteria')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="skor" class="form-label">Skor<span>*</span></label>
                                <input type="number"
                                    class="form-control input @error('nilai_sub_kriteria') is-invalid @enderror"
                                    id="skor" placeholder="Masukkan Skor Sub Kriteria" name="nilai_sub_kriteria"
                                    value="{{ $data->nilai_sub_kriteria }}">
                                @error('nilai_sub_kriteria')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="align-items-end justify-content-end d-flex">
                                <button type="submit" class="btn btn-primary py-2 px-4 rounded-3">Edit</button>
                            </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
        </div>
        {{-- End Modal Edit --}}

        {{-- Modal Delete --}}
        <div class="modal delete fade" id="delete{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body d-flex flex-column align-items-center justify-content-center">
                        <img src="{{ asset('images/ask.png') }}" width="300">
                        <h1 class="fs-5 text-center fw-bold">Are you sure wan't to delete this data?</h1>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary border-0" data-bs-dismiss="modal"
                            style="background-color: #d33">No</button>
                        <form action="{{ route('pendidikan-delete', ['id' => $data->id]) }}" method="delete">
                            @csrf
                            <button type="submit" class="btn btn-primary border-0 px-4"
                                style="background-color: #3085d6">Yes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Modal Delete --}}
        @empty
        <tr>
            <td colspan="5" align="center">Tidak Ada Data</td>
        </tr>
        @endforelse

    </tbody>
</table>
@endsection
