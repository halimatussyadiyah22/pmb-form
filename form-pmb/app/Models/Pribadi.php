<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Jurusan;

class Pribadi extends Model
{
    use HasFactory;
    protected $table = 'i_pribadi';
    protected $fillable = [
        'no_register',
        'nama_lengkap',
        'gelombang',
        'tempat_lahir',
        'jalan_dusun',
        'desa_kelurahan',
        'rt',
        'rw',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'agama',
        'no_kk',
        'email',
        'status',
        'golongan_darah',
        'no_wa',
        'kewarganegaraan',
        'jurusan1_id',
        'jurusan2_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function jurusan1():hasMany{
        return $this->hasMany(Jurusan::class);
    }
    public function jurusan2():hasMany{
        return $this->hasMany(Jurusan::class);
    }
}
