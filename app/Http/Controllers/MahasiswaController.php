<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use PDF;

class MahasiswaController extends Controller
{
    public function index()
    {
        $user = request()->user();
        return view('users.Dashboard.index', compact('user'));
    }

    public function showData()
    {
        $user = Mahasiswa::all();
        return view('admin.Mahasiswa.index', compact('user'));
    }

    public function exportpdf()
    {
        $data = Mahasiswa::all();
        $PDF = PDF::loadView('layouts/report-mahasiswa', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-mahasiswa.pdf');
    }
}
