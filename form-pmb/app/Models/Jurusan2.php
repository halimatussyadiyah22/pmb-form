<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pribadi;

class Jurusan2 extends Model
{
    use HasFactory;
    protected $table = 'jurusan2';
    protected $fillable = [
        'nama_jurusan'
    ];
    public function pribadi(){
        return $this->hasOne(Pribadi::class,'jurusan2_id');
    }
}
