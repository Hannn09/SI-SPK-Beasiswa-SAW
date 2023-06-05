<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
    use HasFactory;

    protected $table = 'ortus';

    public $timestamps = false;

    protected $fillable = [
        'nim',
        'nama_ayah',
        'nama_ibu',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'no_hp',
        'pendidikan_ayah',
        'pendidikan_ibu',
        'gaji_ayah',
        'gaji_ibu',
        'jumlah_tanggungan',
        'user_id'
    ];

    public function penilaian()
    {
        return $this->hasOne(Penilaian::class, 'ortu_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
