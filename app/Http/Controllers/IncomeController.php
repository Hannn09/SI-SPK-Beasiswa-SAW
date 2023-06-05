<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\Kriteria;

class IncomeController extends Controller
{
    public function index()
    {
        $income = Income::all();
        $kriteria = Kriteria::all();
        return view('admin.Pendapatan.pendapatan', compact('income', 'kriteria'));
    }

    public function showPendapatanEntry()
    {
        $kriteria = Kriteria::all();
        return view('admin.Pendapatan.pendapatan-entry', compact('kriteria'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kriteria_id' => ['required'],
            'sub_kriteria' => ['required'],
            'nilai_sub_kriteria' => ['required'],
        ]);

        Income::create([
            'kriteria_id' => $request->kriteria_id,
            'sub_kriteria' => $request->sub_kriteria,
            'nilai_sub_kriteria' => $request->nilai_sub_kriteria,
        ]);

        session()->flash('success', 'Berhasil Memasukkan Data!');
        return redirect()->route('pendapatan');

        // dd($request->all());
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'kriteria_id' => ['required'],
            'sub_kriteria' => ['required'],
            'nilai_sub_kriteria' => ['required'],
        ]);

        $income = Income::find($id);

        $income->update([
            'kriteria_id' => $request->kriteria_id,
            'sub_kriteria' => $request->sub_kriteria,
            'nilai_sub_kriteria' => $request->nilai_sub_kriteria,
        ]);

        session()->flash('edit', 'Berhasil Mengedit Data!');
        return redirect()->route('pendapatan');

        // dd($request->all());
    }

    public function destroy($id)
    {
        $income = Income::find($id);

        $income->delete();
        session()->flash('delete', 'Berhasil Menghapus Data!');
        return redirect()->route('pendapatan');
    }
}
