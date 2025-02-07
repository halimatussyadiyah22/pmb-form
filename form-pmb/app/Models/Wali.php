<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory;
    protected $table = 'i_wali';

    protected $fillable=[
        'nama_wali',
        'alamat_wali',
        'pekerjaan',
        'no_wa',
        'user_id'
    ];
}
