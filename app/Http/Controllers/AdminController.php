<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Mahasiswa;
use App\Models\Ortu;
use App\Models\File;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $mahasiswaCount = Mahasiswa::count();
        $ortuCount = Ortu::count();
        $fileCount = File::count();
        $alternatifCount = Alternatif::count();
        return view('admin.Dashboard.dashboard', compact('mahasiswaCount', 'ortuCount', 'fileCount', 'alternatifCount'));
    }
}
