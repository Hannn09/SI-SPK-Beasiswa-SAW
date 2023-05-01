@extends('layouts.user')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
@endsection

@section('title','RaiseMe | Data Berkas')



@section('content')
{{-- Section Table --}}
<button class="btn-add mb-4 border-0 px-3 py-2 text-white rounded-3 fw-medium d-flex align-items-center gap-2" onclick="location.href='{{ route('file-entry') }}'">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="white" d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2z"/></svg>
    Add 
</button>
<table class="table table-bordered">
    <thead class="table-secondary">
        <tr>
            <th>NIM</th>
            <th>Name</th>
            <th>Alamat</th>
            <th>No. Hp</th>
            <th>Program Studi</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>2118086</td>
            <td>Reihan Almas H.</td>
            <td>Pandaan</td>
            <td>085156303821</td>
            <td>Teknik Informatika</td>
            <td>Laki - Laki</td>
            <td class="d-flex align-items-center justify-content-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24"><path fill="currentColor" d="M7 21q-.825 0-1.413-.588T5 19V6q-.425 0-.713-.288T4 5q0-.425.288-.713T5 4h4q0-.425.288-.713T10 3h4q.425 0 .713.288T15 4h4q.425 0 .713.288T20 5q0 .425-.288.713T19 6v13q0 .825-.588 1.413T17 21H7ZM7 6v13h10V6H7Zm2 10q0 .425.288.713T10 17q.425 0 .713-.288T11 16V9q0-.425-.288-.713T10 8q-.425 0-.713.288T9 9v7Zm4 0q0 .425.288.713T14 17q.425 0 .713-.288T15 16V9q0-.425-.288-.713T14 8q-.425 0-.713.288T13 9v7ZM7 6v13V6Z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 15 15"><path fill="currentColor" fill-rule="evenodd" d="M11.854 1.146a.5.5 0 0 0-.707 0L3.714 8.578a1 1 0 0 0-.212.314L2.04 12.303a.5.5 0 0 0 .657.657l3.411-1.463a1 1 0 0 0 .314-.211l7.432-7.432a.5.5 0 0 0 0-.708l-2-2Zm-7.432 8.14l7.078-7.08L12.793 3.5l-7.078 7.078l-1.496.641l-.438-.438l.64-1.496Z" clip-rule="evenodd"/></svg>
            </td>
        </tr>
    </tbody>
</table>
@endsection
