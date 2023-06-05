<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Ortu;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        return view('users.Berkas.file-entry', compact('user'));
    }

    public function show()
    {
        $user = File::all();

        return view('users.Berkas.file', compact('user'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => ['required', 'max:10'],
            'file_kk' => ['mimes:pdf', 'max:2048'],
            'file_ktp' => ['mimes:pdf', 'max:2048'],
            'file_kip' => ['mimes:pdf', 'max:2048'],
            'file_foto' => ['mimes:jpg,png,jpeg,bmp', 'max:2048'],
            'file_sertifikat' => ['mimes:pdf', 'max:2048'],
            'file_khs' => ['mimes:pdf', 'max:2048'],
        ]);

        // Save uploaded image to assets/img_user
        if ($request->hasFile('file_foto')) {
            $image = $request->file('file_foto')->store('assets/img_user');
        } else {
            $image = null;
        }

        // Save uploaded image to assets/files
        if ($request->hasFile('file_kk')) {
            $file_kk = $request->file('file_kk')->store('assets/files');
        } else {
            $file_kk = null;
        }

        if ($request->hasFile('file_ktp')) {
            $file_ktp = $request->file('file_ktp')->store('assets/files');
        } else {
            $file_ktp = null;
        }

        if ($request->hasFile('file_kip')) {
            $file_kip = $request->file('file_kip')->store('assets/files');
        } else {
            $file_kip = null;
        }

        if ($request->hasFile('file_sertifikat')) {
            $file_sertifikat = $request->file('file_sertifikat')->store('assets/files');
        } else {
            $file_sertifikat = null;
        }

        if ($request->hasFile('file_khs')) {
            $file_khs = $request->file('file_khs')->store('assets/files');
        } else {
            $file_khs = null;
        }


        File::create([
            'nim' => $request->nim,
            'file_kk' => $file_kk,
            'file_ktp' => $file_ktp,
            'file_kip' => $file_kip,
            'file_foto' => $image,
            'file_sertifikat' => $file_sertifikat,
            'file_khs' => $file_khs,
            'user_id' => auth()->user()->id
        ]);

        session()->flash('success', 'Berhasil Memasukkan Data!');
        return redirect()->route('file')->withInput();
    }
}
