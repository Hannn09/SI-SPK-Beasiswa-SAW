@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title', 'Raise Me | Dashboard Mahasiswa')

@section('content')
 <h1 class="fs-3 fw-bold">Selamat Datang, {{ $user->username }}</h1>   
@endsection