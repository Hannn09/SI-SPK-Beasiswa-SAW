<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $pendidikan = Education::all();
        $kriteria = Kriteria::all();
        return view('admin.Pendidikan.pendidikan', compact('pendidikan', 'kriteria'));
    }

    public function create()
    {
        $kriteria = Kriteria::all();
        return view('admin.Pendidikan.pendidikan-entry', compact('kriteria'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kriteria_id' => ['required'],
            'sub_kriteria' => ['required'],
            'nilai_sub_kriteria' => ['required'],
        ]);

        Education::create([
            'kriteria_id' => $request->kriteria_id,
            'sub_kriteria' => $request->sub_kriteria,
            'nilai_sub_kriteria' => $request->nilai_sub_kriteria,
        ]);

        session()->flash('success', 'Berhasil Memasukkan Data!');
        return redirect()->route('pendidikan');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'kriteria_id' => ['required'],
            'sub_kriteria' => ['required'],
            'nilai_sub_kriteria' => ['required'],
        ]);

        $education = Education::find($id);

        $education->update([
            'kriteria_id' => $request->kriteria_id,
            'sub_kriteria' => $request->sub_kriteria,
            'nilai_sub_kriteria' => $request->nilai_sub_kriteria,
        ]);

        session()->flash('edit', 'Berhasil Mengedit Data!');
        return redirect()->route('pendidikan');
    }

    public function destroy($id)
    {
        $education = Education::find($id);

        $education->delete();
        session()->flash('delete', 'Berhasil Menghapus Data!');
        return redirect()->route('pendidikan');
    }
}
