<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\Jurusan2;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        'jurusan_id',
        'jurusan2_id',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function jurusan():HasMany{
        return $this->hasMany(Jurusan::class);
    }
    public function jurusan2():HasMany{
        return $this->hasMany(Jurusan2::class);
    }
}
