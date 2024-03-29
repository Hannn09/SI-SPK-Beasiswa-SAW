<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use PDF;

class RankController extends Controller
{
    public function index()
    {
        $data = Penilaian::all();
        return view('admin.Rank.rank', compact('data'));
    }

    public function exportpdf()
    {
        $data = Penilaian::all();
        $PDF = PDF::loadView('layouts/report-rank', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-ranking.pdf');
    }
}
