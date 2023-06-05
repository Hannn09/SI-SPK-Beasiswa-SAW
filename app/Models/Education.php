<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'education';

    protected $fillable = [
        'kriteria_id',
        'sub_kriteria',
        'nilai_sub_kriteria'
    ];

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'kriteria_id');
    }
}
