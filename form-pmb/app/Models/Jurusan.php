<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pribadi;
class Jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusan';

    protected $fillable = [
        'nama_jurusan'
    ];
    public function Pjurusan(){
        return $this->hasOne(Pjurusan::class,'jurusan_id');
    }
    
}
