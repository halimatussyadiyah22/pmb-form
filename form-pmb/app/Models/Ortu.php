<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
    use HasFactory;
    protected $table = 'i_ortu';
    protected $fillable = [
        'nama_ayah',
        'umur_ayah',
        'pendidikan_ayah',
        'status_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'no_wa_ayah',
        'alamat_ayah',
        'nama_ibu',
        'umur_ibu',
        'pendidikan_ibu',
        'status_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'no_wa_ibu',
        'alamat_ibu',
        'user_id'
    ];
}
