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
            // 'nilai_gaji_ayah' => ['required'],
            // 'nilai_gaji_ibu' => ['required'],
            // 'nilai_penddikan_ayah' => ['required'],
            // 'nilai_penddikan_ibu' => ['required'],
            // 'nilai_jumlah_tanggungan' => ['required'],
            // 'nilai_jumlah_file' => ['required'],
        ]);


        // mengambil nim yang dikirimkan melalui http post
        $nim = $request->nim;

        $ortu_gaji_ayah = Ortu::where('nim', $nim)->pluck('gaji_ayah')->first();
        $ortu_gaji_ibu = Ortu::where('nim', $nim)->pluck('gaji_ibu')->first();
        $ortu_pendidikan_ayah = Ortu::where('nim', $nim)->pluck('pendidikan_ayah');
        $ortu_pendidikan_ibu = Ortu::where('nim', $nim)->pluck('pendidikan_ibu');
        $ortu_jumlah_tanggungan = Ortu::where('nim', $nim)->pluck('jumlah_tanggungan');
        $count_files = $this->hitungFile($nim);


        // mendefinisikan skor gaji yang didapat sesuai dari variable $ortu_gaji_ayah dan ibu
        $skor_gaji_ayah = $ortu_gaji_ayah;
        $skor_gaji_ibu = $ortu_gaji_ibu;

        // mencetak skor gaji ayah
        if ($skor_gaji_ayah >= 2000000) {
            $skor_ayah = 1;
        } elseif ($skor_gaji_ayah >= 1500000) {
            $skor_ayah = 2;
        } elseif ($skor_gaji_ayah >= 1000000) {
            $skor_ayah = 3;
        } elseif ($skor_gaji_ayah >= 500000) {
            $skor_ayah = 4;
        } else {
            $skor_ayah = 5;
        }

        // mencetak skor gaji ibu
        if ($skor_gaji_ibu >= 2000000) {
            $skor_ibu = 1;
        } elseif ($skor_gaji_ibu >= 1500000) {
            $skor_ibu = 2;
        } elseif ($skor_gaji_ibu >= 1000000) {
            $skor_ibu = 3;
        } elseif ($skor_gaji_ibu >= 500000) {
            $skor_ibu = 4;
        } else {
            $skor_ibu = 5;
        }

        // Mengambil nilai_sub_kriteria terkecil berdasarkan kriteria_id dengan nama Penghasilan Ayah dan Ibu
        // karena penghasilan bersifat cost
        $income_gaji_ayah = Income::join('kriterias', 'income.kriteria_id', '=', 'kriterias.id')->where('kriterias.nama', 'Penghasilan Ayah')->min('income.nilai_sub_kriteria');
        $income_gaji_ibu = Income::join('kriterias', 'income.kriteria_id', '=', 'kriterias.id')->where('kriterias.nama', 'Penghasilan Ibu')->min('income.nilai_sub_kriteria');

        // kemudian skor yg didapat akan dibagi dengan nilai terkecil dari nilai_sub_kriteria tadi
        $nilai_gaji_ayah = $income_gaji_ayah / $skor_ayah;
        $nilai_gaji_ibu = $income_gaji_ibu / $skor_ibu;


        // mendefinisikan skor pendidikan yang didapat sesuai dari variable $ortu_gaji_ayah dan ibu
        $skor_pendidikan_ayah = $ortu_pendidikan_ayah;
        $skor_pendidikan_ibu = $ortu_pendidikan_ibu;

        // mencetak skor pendidikan ayah
        if ($skor_pendidikan_ayah == 'D4/Strata I') {
            $skor_ayah = 1;
        } elseif ($skor_pendidikan_ayah == 'Diploma III') {
            $skor_ayah = 2;
        } elseif ($skor_pendidikan_ayah == 'SMA') {
            $skor_ayah = 3;
        } elseif ($skor_pendidikan_ayah == 'SMP') {
            $skor_ayah = 4;
        } elseif ($skor_pendidikan_ayah == 'SD') {
            $skor_ayah = 5;
        }

        // mencetak skor pendidikan ibu
        if ($skor_pendidikan_ibu == 'D4/Strata I') {
            $skor_ibu = 1;
        } elseif ($skor_pendidikan_ibu == 'Diploma III') {
            $skor_ibu = 2;
        } elseif ($skor_pendidikan_ibu == 'SMA') {
            $skor_ibu = 3;
        } elseif ($skor_pendidikan_ibu == 'SMP') {
            $skor_ibu = 4;
        } elseif ($skor_pendidikan_ibu == 'SD') {
            $skor_ibu = 5;
        }

        // Mengambil nilai_sub_kriteria terkecil berdasark  an kriteria_id dengan nama Pendidikan Ayah dan Ibu
        // karena penghasilan bersifat cost
        $pendidikan_ayah = Education::join('kriterias', 'education.kriteria_id', '=', 'kriterias.id')->where('kriterias.nama', 'Pendidikan Ayah')->min('education.nilai_sub_kriteria');
        $pendidikan_ibu = Education::join('kriterias', 'education.kriteria_id', '=', 'kriterias.id')->where('kriterias.nama', 'Pendidikan Ibu')->min('education.nilai_sub_kriteria');

        // kemudian skor yg didapat akan dibagi dengan nilai terkecil dari nilai_sub_kriteria tadi
        $nilai_pendidikan_ayah = 0;
        $nilai_pendidikan_ibu = 0;

        if ($skor_ayah != 0 && is_numeric($pendidikan_ayah)) {
            if ($pendidikan_ayah == 1) {
                $nilai_pendidikan_ayah = $skor_ayah / 5;
            } elseif ($pendidikan_ayah == 2) {
                $nilai_pendidikan_ayah = $skor_ayah / 4;
            } elseif ($pendidikan_ayah == 3) {
                $nilai_pendidikan_ayah = $skor_ayah / 3;
            } elseif ($pendidikan_ayah == 4) {
                $nilai_pendidikan_ayah = $skor_ayah / 2;
            } elseif ($pendidikan_ayah == 5) {
                $nilai_pendidikan_ayah = $skor_ayah / 1;
            }
        }

        if ($skor_ibu != 0 && is_numeric($pendidikan_ibu)) {
            if ($pendidikan_ibu == 1) {
                $nilai_pendidikan_ibu = $skor_ibu / 5;
            } elseif ($pendidikan_ibu == 2) {
                $nilai_pendidikan_ibu = $skor_ibu / 4;
            } elseif ($pendidikan_ibu == 3) {
                $nilai_pendidikan_ibu = $skor_ibu / 3;
            } elseif ($pendidikan_ibu == 4) {
                $nilai_pendidikan_ibu = $skor_ibu / 2;
            } elseif ($pendidikan_ibu == 5) {
                $nilai_pendidikan_ibu = $skor_ibu / 1;
            }
        }



        // mendefinisikan skor jumlah_tanggungan
        $skor_jumlah_tanggungan = $ortu_jumlah_tanggungan->first();

        $skor_tanggungan = 0;

        // mencetak skor jumlah_tanggungan
        if ($skor_jumlah_tanggungan) {
            if ($skor_jumlah_tanggungan == '1-2 Orang') {
                $skor_tanggungan = 1;
            } elseif ($skor_jumlah_tanggungan == '3 Orang') {
                $skor_tanggungan = 2;
            } elseif ($skor_jumlah_tanggungan == '4 Orang') {
                $skor_tanggungan = 3;
            } elseif ($skor_jumlah_tanggungan == '5 Orang') {
                $skor_tanggungan = 4;
            } elseif ($skor_jumlah_tanggungan == '>5 Orang') {
                $skor_tanggungan = 5;
            }
        }

        // Mengambil nilai_sub_kriteria terbesar berdasarkan kriteria_id dengan nama jumlah tanggungan
        // karena tanggungan bersifat benefit
        $jumlah_tanggungan = Tanggungan::where('sub_kriteria', $skor_tanggungan)->max('nilai_sub_kriteria');

        // membagi skor yang didapat dengan nilai maximal jumlah tanggungan
        if (is_numeric($skor_tanggungan) && is_numeric($jumlah_tanggungan) && $jumlah_tanggungan != 0) {
            $nilai_jumlah_tanggungan = $skor_tanggungan / 5; // Divide by 5 instead of $jumlah_tanggungan
        } else {
            $nilai_jumlah_tanggungan = 0; // Set a default value or handle the error appropriately
        }


        // Mengambil nilai_sub_kriteria terbesar berdasarkan jumlah file
        // karena tanggungan bersifat benefit
        $skor_jumlah_file = $count_files;

        if ($skor_jumlah_file === 1) {
            $skor_file = 2;
        } elseif ($skor_jumlah_file >= 2 && $skor_jumlah_file <= 3) {
            $skor_file = 3;
        } elseif ($skor_jumlah_file >= 4 && $skor_jumlah_file <= 5) {
            $skor_file = 4;
        } elseif ($skor_jumlah_file === 6) {
            $skor_file = 5;
        } else {
            $skor_file = 0; // Nilai default jika jumlah file tidak memenuhi ketentuan
        }

        $nilai_jumlah_file = $skor_jumlah_file / 5;

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
    public function hitungFile($nim)
    {
        $jumlah_file = File::where('nim', $nim)
            ->whereNotNull('file_kk')
            ->orWhereNotNull('file_ktp')
            ->orWhereNotNull('file_kip')
            ->orWhereNotNull('file_foto')
            ->orWhereNotNull('file_sertifikat')
            ->orWhereNotNull('file_khs')
            ->count();

        return $jumlah_file;
    }

    public function exportpdf()
    {
        $data = Penilaian::all();
        $PDF = PDF::loadView('layouts/report-penilaian', array('data' => $data))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-penilaian.pdf');
    }
}
