<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = ['nim', 'users_id'];

    public function alternatif()
    {
        return $this->hasOne(Alternatif::class, 'nim', 'nim');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
