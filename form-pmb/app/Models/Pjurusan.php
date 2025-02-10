<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\Jurusan2;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Pjurusan extends Model
{
    use HasFactory;
    protected $table = 'p_jurusan';
    protected $fillable = [
        
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
