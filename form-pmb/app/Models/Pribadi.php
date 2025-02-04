<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pribadi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'tempat_lahir',
        'jalan_dusun',
        'desa_kelurahan',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'agama',
        'no_kk',
        'email',
        'status',
        'no_wa',
        'kewarganegaraan',
        'jurusan'
    ];
}
