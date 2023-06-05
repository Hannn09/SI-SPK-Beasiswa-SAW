<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'kriterias';

    protected $fillable = [
        'nama',
        'bobot'
    ];

    public function pendapatan()
    {
        return $this->hasOne(Income::class, 'kriteria_id');
    }

    public function pendidikan()
    {
        return $this->hasOne(Education::class, 'kriteria_id');
    }

    public function tanggungan()
    {
        return $this->hasOne(Tanggungan::class, 'kriteria_id');
    }
}
