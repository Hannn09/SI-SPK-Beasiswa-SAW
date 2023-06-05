<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index(Request $request)
    {
        $kriteria = Kriteria::all();
        return view('admin.Kriteria.kriteria', compact('kriteria'));
    }

    public function showCriteriaEntry()
    {
        return view('admin.Kriteria.kriteria-entry');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required'],
            'bobot' => ['required'],
        ]);

        Kriteria::create([
            'nama' => $request->nama,
            'bobot' => $request->bobot,
        ]);

        session()->flash('success', 'Berhasil Memasukkan Data!');
        return redirect()->route('kriteria');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => ['required'],
            'bobot' => ['required'],
        ]);

        $kriteria = Kriteria::find($id);

        $kriteria->update([
            'nama' => $request->nama,
            'bobot' => $request->bobot,
        ]);


        session()->flash('edit', 'Berhasil Mengedit Data!');
        return redirect()->route('kriteria');
    }

    public function destroy($id)
    {
        $kriteria = Kriteria::find($id);

        $kriteria->delete();
        session()->flash('delete', 'Berhasil Menghapus Data!');
        return redirect()->route('kriteria');
    }
}
