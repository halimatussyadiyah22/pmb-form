<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Dokumen extends Model
{
    use HasFactory;
    protected $table = 'dokumen';

    protected $fillable = [
            'pas_foto',
            'ktp',
            'kk',
            'ijazah',
            'transkip_nilai',
            'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
