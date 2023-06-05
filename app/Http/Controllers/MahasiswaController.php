<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $user = request()->user();
        return view('users.Dashboard.index', compact('user'));
    }
}
