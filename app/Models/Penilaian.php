<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

    protected $table = 'penilaians';

    public function ortu()
    {
        return $this->belongsTo(Ortu::class, 'ortu_id');
    }

    public function file()
    {
        return $this->belongsTo(File::class, 'file_id');
    }
}
