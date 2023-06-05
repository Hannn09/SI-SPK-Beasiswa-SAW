<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;

    protected $table = 'alternatif_mhs';

    public $timestamps = false;
    protected $fillable = [
        'nim',
        'nama',
        'email',
        'alamat',
        'no_hp',
        'program_studi',
        'gender',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
