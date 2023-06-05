<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use PDF;

class AlternatifController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        return view('users.Alternatif.alternative-entry', compact('user'));
    }

    public function show()
    {
        $user = Alternatif::all();

        return view('users.Alternatif.alternative', compact('user'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => ['required', 'max:10'],
            'nama' => ['required', 'unique:alternatif_mhs'],
            'email' => ['required', 'email:dns', 'unique:alternatif_mhs'],
            'alamat' => ['required'],
            'no_hp' => ['required'],
            'program_studi' => ['required'],
            'gender' => ['required'],
        ]);


        $alternatif = Alternatif::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'program_studi' => $request->program_studi,
            'gender' => $request->gender,
            'user_id' => auth()->user()->id,
        ]);


        session()->flash('success', 'Berhasil Memasukkan Data!');
        return redirect()->route('alternatif')->withInput();
    }

    public function exportpdf()
    {
        $data = Alternatif::all();
        $PDF = PDF::loadView('layouts/report-alternatif', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-alternatif.pdf');
    }
}
