@extends('layouts.admin')

@section('title','RaiseMe | Data Kriteria')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<h4 class="fw-semibold mb-4">Data Kriteria</h4>
{{-- Section Table --}}
<button class="btn-add mb-4 border-0 px-3 py-2 text-white rounded-3 fw-medium d-flex align-items-center gap-2"
    onclick="location.href='{{ route('kriteria-entry') }}'">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path fill="white" d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2z" />
    </svg>
    Add Data
</button>
<table class="table table-bordered">
    <thead class="table-secondary">
        <tr>
            <th class="text-center">ID Kriteria</th>
            <th class="text-center">Nama Krieria</th>
            <th class="text-center">Bobot</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($kriteria as $kriterias)
        <tr>
            <td class="text-center">{{ $kriterias->id }}</td>
            <td>{{ $kriterias->nama }}</td>
            <td class="text-center">{{ $kriterias->bobot }}</td>
            <td class="d-flex align-items-center justify-content-center gap-3">
                <button class="btn btn-primary px-4" data-bs-toggle="modal"
                    data-bs-target="#target{{ $kriterias->id }}">
                    Edit
                </button>
                <button type="submit" class="btn btn-danger delete-btn" data-bs-toggle="modal"
                    data-bs-target="#delete{{ $kriterias->id }}">Delete</button>
            </td>
        </tr>
        <!-- Modal Edit -->
        <div class="modal fade" id="target{{ $kriterias->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('kriteria-update', ['id' => $kriterias->id]) }}" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="nama" class="form-label">Nama Kriteria<span>*</span></label>
                                <input type="text" class="form-control input @error('nama') is-invalid @enderror"
                                    id="nama" placeholder="Masukkan Nama Kriteria" name="nama"
                                    value="{{ $kriterias->nama }}">
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="bobot" class="form-label">Bobot<span>*</span></label>
                                <input type="text" class="form-control input @error('bobot') is-invalid @enderror"
                                    id="bobot" placeholder="Masukkan Bobot Kriteria" name="bobot"
                                    value="{{ $kriterias->bobot }}">
                            </div>
                            <div class="align-items-end justify-content-end d-flex">
                                <button type="submit" class="btn btn-primary py-2 px-4 rounded-3">Edit</button>
                            </div>
                            @error('bobot')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Modal Edit --}}

        {{-- Modal Delete --}}
        <div class="modal delete fade" id="delete{{ $kriterias->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                        <form action="{{ route('kriteria-delete', ['id' => $kriterias->id]) }}" method="delete">
                            @csrf
                            <button type="submit" class="btn btn-primary border-0 px-4"
                                style="background-color: #3085d6">Yes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <tr>
            <td colspan="4" align="center">Tidak ada Data</td>
        </tr>

        @endforelse
    </tbody>
</table>

@endsection

@section('js')
<script>
    @if(session('success'))
    Swal.fire({
        icon: 'success',
        title: '{{ session('
        success ') }}',
        showConfirmButton: false,
        timer: 1500
    });
    @endif

    @if(session('edit'))
    Swal.fire({
        icon: 'success',
        title: '{{ session('
        edit ') }}',
        showConfirmButton: false,
        timer: 1500
    });
    @endif

    @if(session('delete'))
    Swal.fire({
        icon: 'success',
        title: 'Deleted!',
        text: '{{ session('
        delete ') }}',
        showConfirmButton: false,
        timer: 1500
    });
    @endif

</script>
@endsection
