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
    public function pribadi(){
        return $this->hasOne(Pribadi::class,'jurusan_id');
    }
    
}
