<?php

namespace App\Http\Controllers;

use App\Models\Tanggungan;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class TanggunganController extends Controller
{
    public function index()
    {
        $tanggungan = Tanggungan::all();
        $kriteria = Kriteria::all();
        return view('admin.Tanggungan.tanggungan', compact('tanggungan', 'kriteria'));
    }

    public function create()
    {
        $kriteria = Kriteria::all();
        return view('admin.Tanggungan.tanggungan-entry', compact('kriteria'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kriteria_id' => ['required'],
            'sub_kriteria' => ['required'],
            'nilai_sub_kriteria' => ['required'],
        ]);

        Tanggungan::create([
            'kriteria_id' => $request->kriteria_id,
            'sub_kriteria' => $request->sub_kriteria,
            'nilai_sub_kriteria' => $request->nilai_sub_kriteria,
        ]);

        session()->flash('success', 'Berhasil Memasukkan Data!');
        return redirect()->route('tanggungan');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'kriteria_id' => ['required'],
            'sub_kriteria' => ['required'],
            'nilai_sub_kriteria' => ['required'],
        ]);

        $tanggungan = Tanggungan::find($id);

        $tanggungan->update([
            'kriteria_id' => $request->kriteria_id,
            'sub_kriteria' => $request->sub_kriteria,
            'nilai_sub_kriteria' => $request->nilai_sub_kriteria,
        ]);

        session()->flash('edit', 'Berhasil Mengedit Data!');
        return redirect()->route('tanggungan');
    }

    public function destroy($id)
    {
        $tanggungan = Tanggungan::find($id);

        $tanggungan->delete();
        session()->flash('delete', 'Berhasil Menghapus Data!');
        return redirect()->route('tanggungan');
    }
}
