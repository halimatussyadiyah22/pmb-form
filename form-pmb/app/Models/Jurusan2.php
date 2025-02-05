<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan2 extends Model
{
    use HasFactory;
    protected $table = 'jurusan2';
    protected $fillable = [
        'nama_jurusan'
    ];
}
