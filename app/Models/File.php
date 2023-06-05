<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $table = 'files';

    public $timestamps = false;
    protected $fillable = [
        'nim',
        'file_kk',
        'file_ktp',
        'file_kip',
        'file_foto',
        'file_sertifikat',
        'file_khs',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function penilaian()
    {
        return $this->hasOne(Penilaian::class, 'file_id');
    }
}
