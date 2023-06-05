<?php

namespace App\Http\Controllers;

use App\Models\Ortu;
use Illuminate\Http\Request;
use PDF;

class OrtuController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        return view('users.Ortu.parents-entry', compact('user'));
    }

    public function show()
    {
        $user = Ortu::all();
        return view('users.Ortu.parents', compact('user'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => ['required', 'max:10'],
            'nama_ayah' => ['required'],
            'nama_ibu' => ['required'],
            'pekerjaan_ayah' => ['required'],
            'pekerjaan_ibu' => ['required'],
            'no_hp' => ['required'],
            'pendidikan_ayah' => ['required'],
            'pendidikan_ibu' => ['required'],
            'gaji_ayah' => ['required'],
            'gaji_ibu' => ['required'],
            'jumlah_tanggungan' => ['required'],
        ]);

        $ortu = Ortu::create([
            'nim' => $request->nim,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'no_hp' => $request->no_hp,
            'pendidikan_ayah' => $request->pendidikan_ayah,
            'pendidikan_ibu' => $request->pendidikan_ibu,
            'gaji_ayah' => $request->gaji_ayah,
            'gaji_ibu' => $request->gaji_ibu,
            'jumlah_tanggungan' => $request->jumlah_tanggungan,
            'user_id' => auth()->user()->id,
        ]);

        session()->flash('success', 'Berhasil Memasukkan Data!');
        return redirect()->route('parent')->withInput();
    }

    public function exportpdf()
    {
        $data = Ortu::all();
        $PDF = PDF::loadView('layouts/report-ortu', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-orang-tua.pdf');
    }
}
