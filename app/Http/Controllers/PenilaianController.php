<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Penilaian;
use App\Models\User;
use App\Models\Income;
use App\Models\Ortu;
use App\Models\File;
use App\Models\Tanggungan;
use Illuminate\Http\Request;
use PDF;

class PenilaianController extends Controller
{
    public function index()
    {
        $penilaian = Penilaian::all();
        return view('admin.Penilaian.penilaian', compact('penilaian'));
    }

    public function create(Request $request)
    {
        $user = User::all();
        return view('admin.Penilaian.penilaian-entry', compact('user'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => ['required'],
            'ortu_id' => ['required'],
            'file_id' => ['required'],
        ]);


        // mengambil nim yang dikirimkan melalui http post
        $nim = $request->nim;

        $ortu_gaji_ayah = $request->input('pendapatan_ayah');
        $ortu_gaji_ibu = $request->input('pendapatan_ibu');
        $ortu_pendidikan_ayah = $request->input('pendidikan_ayah');
        $ortu_pendidikan_ibu = $request->input('pendidikan_ibu');
        $ortu_jumlah_tanggungan = $request->input('jumlah_tanggungan');
        $count_files = $request->input('jumlah_file');

        // mencetak skor gaji ayah
        if ($ortu_gaji_ayah >= 2000000) {
            $skor_ayah = 1;
        } elseif ($ortu_gaji_ayah >= 1500000) {
            $skor_ayah = 2;
        } elseif ($ortu_gaji_ayah >= 1000000) {
            $skor_ayah = 3;
        } elseif ($ortu_gaji_ayah >= 500000) {
            $skor_ayah = 4;
        } else {
            $skor_ayah = 5;
        }

        // mencetak skor gaji ibu
        if ($ortu_gaji_ibu >= 2000000) {
            $skor_ibu = 1;
        } elseif ($ortu_gaji_ibu >= 1500000) {
            $skor_ibu = 2;
        } elseif ($ortu_gaji_ibu >= 1000000) {
            $skor_ibu = 3;
        } elseif ($ortu_gaji_ibu >= 500000) {
            $skor_ibu = 4;
        } else {
            $skor_ibu = 5;
        }

        // Mengambil nilai_sub_kriteria terkecil berdasarkan kriteria_id dengan nama Penghasilan Ayah dan Ibu
        // karena penghasilan bersifat benefit
        $income_gaji_ayah = Income::join('kriterias', 'income.kriteria_id', '=', 'kriterias.id')->where('kriterias.nama', 'Penghasilan Ayah')->max('income.nilai_sub_kriteria');
        $income_gaji_ibu = Income::join('kriterias', 'income.kriteria_id', '=', 'kriterias.id')->where('kriterias.nama', 'Penghasilan Ibu')->max('income.nilai_sub_kriteria');

        // kemudian skor yg didapat akan dibagi dengan nilai terkecil dari nilai_sub_kriteria tadi
        $nilai_gaji_ayah = $skor_ayah / $income_gaji_ayah;
        $nilai_gaji_ibu = $skor_ibu / $income_gaji_ibu;


        // mencetak skor pendidikan ayah
        if ($ortu_pendidikan_ayah == 'D4/Strata I') {
            $skor_ayah = 5;
        } elseif ($ortu_pendidikan_ayah == 'Diploma III') {
            $skor_ayah = 4;
        } elseif ($ortu_pendidikan_ayah == 'SMA') {
            $skor_ayah = 3;
        } elseif ($ortu_pendidikan_ayah == 'SMP') {
            $skor_ayah = 2;
        } elseif ($ortu_pendidikan_ayah == 'SD') {
            $skor_ayah = 1;
        }

        // mencetak skor pendidikan ibu
        if ($ortu_pendidikan_ibu == 'D4/Strata I') {
            $skor_ibu = 5;
        } elseif ($ortu_pendidikan_ibu == 'Diploma III') {
            $skor_ibu = 4;
        } elseif ($ortu_pendidikan_ibu == 'SMA') {
            $skor_ibu = 3;
        } elseif ($ortu_pendidikan_ibu == 'SMP') {
            $skor_ibu = 2;
        } elseif ($ortu_pendidikan_ibu == 'SD') {
            $skor_ibu = 1;
        }

        // Mengambil nilai terkecil dari table Education dengan kriteria_id Pendidikan Ayah
        $nilai_terkecil_ayah = Education::join('kriterias', 'education.kriteria_id', '=', 'kriterias.id')
            ->where('kriterias.nama', 'Pendidikan Ayah')
            ->orderBy('education.nilai_sub_kriteria', 'asc')
            ->value('education.nilai_sub_kriteria');


        // Mengambil nilai terkecil dari table Education dengan kriteria_id Pendidikan Ibu
        $nilai_terkecil_ibu = Education::join('kriterias', 'education.kriteria_id', '=', 'kriterias.id')
            ->where('kriterias.nama', 'Pendidikan Ibu')
            ->orderBy('education.nilai_sub_kriteria', 'asc')
            ->value('education.nilai_sub_kriteria');

        // Kemudian nilai terkecil yang sudah didapatkan dibagi dengan nilai pendidikan Ayah inputan user
        // Dibagi dengan nilai terkecil karena Pendidikan Ayah dan ibu bersifat cost
        $nilai_pendidikan_ayah = $nilai_terkecil_ayah / $skor_ayah;
        $nilai_pendidikan_ibu = $nilai_terkecil_ibu / $skor_ibu;


        // mencetak skor jumlah_tanggungan
        if ($ortu_jumlah_tanggungan == '1-2 Orang') {
            $skor_tanggungan = 1;
        } elseif ($ortu_jumlah_tanggungan == '3 Orang') {
            $skor_tanggungan = 2;
        } elseif ($ortu_jumlah_tanggungan == '4 Orang') {
            $skor_tanggungan = 3;
        } elseif ($ortu_jumlah_tanggungan == '5 Orang') {
            $skor_tanggungan = 4;
        } elseif ($ortu_jumlah_tanggungan == '>5 Orang') {
            $skor_tanggungan = 5;
        }

        // Mengambil nilai_sub_kriteria terbesar berdasarkan kriteria_id dengan nama jumlah tanggungan
        // karena tanggungan bersifat benefit
        $jumlah_tanggungan = Tanggungan::max('nilai_sub_kriteria');

        // membagi skor yang didapat dengan nilai maximal jumlah tanggungan
        $nilai_jumlah_tanggungan = $skor_tanggungan / $jumlah_tanggungan;

        // Mengambil nilai_sub_kriteria terbesar berdasarkan jumlah file
        // karena tanggungan bersifat benefit
        if ($count_files == 1) {
            $skor_file = 2;
        } elseif ($count_files >= 2 && $count_files <= 3) {
            $skor_file = 3;
        } elseif ($count_files >= 4 && $count_files <= 5) {
            $skor_file = 4;
        } elseif ($count_files == 6) {
            $skor_file = 5;
        }

        $nilai_jumlah_file = $skor_file / 5;

        Penilaian::create([
            'ortu_id' => $request->ortu_id,
            'file_id' => $request->file_id,
            'nilai_gaji_ayah' => $nilai_gaji_ayah,
            'nilai_gaji_ibu' => $nilai_gaji_ibu,
            'nilai_pendidikan_ayah' => $nilai_pendidikan_ayah,
            'nilai_pendidikan_ibu' => $nilai_pendidikan_ibu,
            'nilai_jumlah_tanggungan' => $nilai_jumlah_tanggungan,
            'nilai_jumlah_file' => $nilai_jumlah_file,
        ]);

        session()->flash('success', 'Berhasil Memasukkan Data!');
        return redirect()->route('penilaian')->withInput();
    }

    public function exportpdf()
    {
        $data = Penilaian::all();
        $PDF = PDF::loadView('layouts/report-penilaian', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-penilaian.pdf');
    }
}
