@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<h4 class="fw-semibold mb-4">Dashboard</h4>
<div class="group-card d-flex gap-3">
    {{-- Card Mahasiswa --}}
    <div class="card w-25 border-0 px-3 py-2 rounded-4 shadow">
        <div class="header-icon d-flex justify-content-between align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32">
                <path fill="#2A2F4F"
                    d="m16 7.78l-.313.095l-12.5 4.188L.345 13L2 13.53v8.75c-.597.347-1 .98-1 1.72a2 2 0 1 0 4 0c0-.74-.403-1.373-1-1.72v-8.06l2 .655V20c0 .82.5 1.5 1.094 1.97c.594.467 1.332.797 2.218 1.093c1.774.59 4.112.937 6.688.937c2.576 0 4.914-.346 6.688-.938c.886-.295 1.624-.625 2.218-1.093C25.5 21.5 26 20.82 26 20v-5.125l2.813-.938L31.655 13l-2.843-.938l-12.5-4.187L16 7.78zm0 2.095L25.375 13L16 16.125L6.625 13L16 9.875zm-8 5.688l7.688 2.562l.312.094l.313-.095L24 15.562V20c0 .01.004.126-.313.375c-.316.25-.883.565-1.625.813C20.58 21.681 18.395 22 16 22c-2.395 0-4.58-.318-6.063-.813c-.74-.247-1.308-.563-1.624-.812C7.995 20.125 8 20.01 8 20v-4.438z" />
            </svg>
            <div class="menu-detail">
                <a href="#" class="text-decoration-none text-black dropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#2A2F4F" stroke="currentColor" stroke-linejoin="round" stroke-width="3.75"
                            d="M12 12h.01v.01H12zm0-7h.01v.01H12zm0 14h.01v.01H12z" /></svg></a>
                <ul class="dropdown-menu w-100">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="detail-menu gap-3 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32">
                                    <path fill="#2A2F4F"
                                        d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68ZM16 25c-5.3 0-10.9-3.93-12.93-9C5.1 10.93 10.7 7 16 7s10.9 3.93 12.93 9C26.9 21.07 21.3 25 16 25Z" />
                                    <path fill="currentColor"
                                        d="M16 10a6 6 0 1 0 6 6a6 6 0 0 0-6-6Zm0 10a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z" />
                                </svg>
                                View Detail Mahasiswa
                            </div>
                        </a>
                    </li>
            </div>
        </div>
        <div class="content-card mt-2">
            <div class="total-students">
                <span class="fw-bold fs-2">77</span>
            </div>  
            <p>Total mahasiswa yang mendaftar</p>
        </div>
    </div>
    {{-- Card Data Orangtua --}}
    <div class="card w-25 border-0 px-3 py-2 rounded-4 shadow">
        <div class="header-icon d-flex justify-content-between align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
                <path fill="#2A2F4F"
                    d="M12 5.5A3.5 3.5 0 0 1 15.5 9a3.5 3.5 0 0 1-3.5 3.5A3.5 3.5 0 0 1 8.5 9A3.5 3.5 0 0 1 12 5.5M5 8c.56 0 1.08.15 1.53.42c-.15 1.43.27 2.85 1.13 3.96C7.16 13.34 6.16 14 5 14a3 3 0 0 1-3-3a3 3 0 0 1 3-3m14 0a3 3 0 0 1 3 3a3 3 0 0 1-3 3c-1.16 0-2.16-.66-2.66-1.62a5.536 5.536 0 0 0 1.13-3.96c.45-.27.97-.42 1.53-.42M5.5 18.25c0-2.07 2.91-3.75 6.5-3.75s6.5 1.68 6.5 3.75V20h-13v-1.75M0 20v-1.5c0-1.39 1.89-2.56 4.45-2.9c-.59.68-.95 1.62-.95 2.65V20H0m24 0h-3.5v-1.75c0-1.03-.36-1.97-.95-2.65c2.56.34 4.45 1.51 4.45 2.9V20Z" />
            </svg>
            <div class="menu-detail">
                <a href="#" class="text-decoration-none text-black dropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#2A2F4F" stroke="currentColor" stroke-linejoin="round" stroke-width="3.75"
                            d="M12 12h.01v.01H12zm0-7h.01v.01H12zm0 14h.01v.01H12z" /></svg></a>
                <ul class="dropdown-menu w-100">
                    <li>
                        <a class="dropdown-item" href="{{ route('data.ortu') }}">
                            <div class="detail-menu gap-3 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32">
                                    <path fill="#2A2F4F"
                                        d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68ZM16 25c-5.3 0-10.9-3.93-12.93-9C5.1 10.93 10.7 7 16 7s10.9 3.93 12.93 9C26.9 21.07 21.3 25 16 25Z" />
                                    <path fill="currentColor"
                                        d="M16 10a6 6 0 1 0 6 6a6 6 0 0 0-6-6Zm0 10a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z" />
                                </svg>
                                View Detail Ortu
                            </div>
                        </a>
                    </li>
            </div>
        </div>
        <div class="content-card mt-2">
            <div class="total-students">
                <span class="fw-bold fs-2">77</span>
            </div>
            <p>Total mahasiswa yang input data orangtua</p>
        </div>
    </div>
    {{-- Card Upload Berkas --}}
    <div class="card w-25 border-0 px-3 py-2 rounded-4 shadow">
        <div class="header-icon d-flex justify-content-between align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
                <path fill="#2A2F4F"
                    d="M12 17q.425 0 .713-.288T13 16v-3.2l.9.9q.15.15.325.213t.375.062q.2 0 .375-.062t.325-.213q.275-.275.275-.7t-.275-.7l-2.6-2.6q-.3-.3-.7-.3t-.7.3l-2.6 2.6q-.275.275-.275.7t.275.7q.275.275.7.275t.7-.275l.9-.9V16q0 .425.288.713T12 17Zm-8 3q-.825 0-1.413-.588T2 18V6q0-.825.588-1.413T4 4h5.175q.4 0 .763.15t.637.425L12 6h8q.825 0 1.413.588T22 8v10q0 .825-.588 1.413T20 20H4ZM4 6v12h16V8h-8.825l-2-2H4Zm0 0v12V6Z" />
            </svg>
            <div class="menu-detail">
                <a href="#" class="text-decoration-none text-black dropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#2A2F4F" stroke="currentColor" stroke-linejoin="round" stroke-width="3.75"
                            d="M12 12h.01v.01H12zm0-7h.01v.01H12zm0 14h.01v.01H12z" /></svg></a>
                <ul class="dropdown-menu w-100">
                    <li>
                        <a class="dropdown-item" href="{{ route('data.file') }}">
                            <div class="detail-menu gap-3 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32">
                                    <path fill="#2A2F4F"
                                        d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68ZM16 25c-5.3 0-10.9-3.93-12.93-9C5.1 10.93 10.7 7 16 7s10.9 3.93 12.93 9C26.9 21.07 21.3 25 16 25Z" />
                                    <path fill="currentColor"
                                        d="M16 10a6 6 0 1 0 6 6a6 6 0 0 0-6-6Zm0 10a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z" />
                                </svg>
                                View Detail Upload
                            </div>
                        </a>
                    </li>
            </div>
        </div>
        <div class="content-card mt-2">
            <div class="total-students">
                <span class="fw-bold fs-2">77</span>
            </div>
            <p>Total mahasiswa yang upload berkas</p>
        </div>
    </div>
    {{-- Card Alternatif --}}
    <div class="card w-25 border-0 px-3 py-2 rounded-4 shadow">
        <div class="header-icon d-flex justify-content-between align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24">
                <path fill="#2A2F4F"
                    d="M6 13h9v-2H6v2Zm0-3h9V8H6v2ZM4 20q-.825 0-1.413-.588T2 18V6q0-.825.588-1.413T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.588 1.413T20 20H4Zm0-2h16V6H4v12Zm0 0V6v12Z" />
                </svg>
            <div class="menu-detail">
                <a href="#" class="text-decoration-none text-black dropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#2A2F4F" stroke="currentColor" stroke-linejoin="round" stroke-width="3.75"
                            d="M12 12h.01v.01H12zm0-7h.01v.01H12zm0 14h.01v.01H12z" /></svg></a>
                <ul class="dropdown-menu w-100">
                    <li>
                        <a class="dropdown-item" href="{{ route('data.alternatif') }}">
                            <div class="detail-menu gap-3 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32">
                                    <path fill="#2A2F4F"
                                        d="M30.94 15.66A16.69 16.69 0 0 0 16 5A16.69 16.69 0 0 0 1.06 15.66a1 1 0 0 0 0 .68A16.69 16.69 0 0 0 16 27a16.69 16.69 0 0 0 14.94-10.66a1 1 0 0 0 0-.68ZM16 25c-5.3 0-10.9-3.93-12.93-9C5.1 10.93 10.7 7 16 7s10.9 3.93 12.93 9C26.9 21.07 21.3 25 16 25Z" />
                                    <path fill="currentColor"
                                        d="M16 10a6 6 0 1 0 6 6a6 6 0 0 0-6-6Zm0 10a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z" />
                                </svg>
                                View Detail Alternatif
                            </div>
                        </a>
                    </li>
            </div>
        </div>
        <div class="content-card mt-2">
            <div class="total-students">
                <span class="fw-bold fs-2">77</span>
            </div>
            <p>Total mahasiswa yang mengisi data alternatif</p>
        </div>
    </div>
</div>
@endsection