<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Sekolah extends Model
{
    use HasFactory;
    protected $table = 'i_sekolah';

    protected $fillable=[
        'nama_sekolah',
        'jurusan',
        'alamat_sekolah',
        'tahun_lulus',
        'no_ijazah',
        'user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
