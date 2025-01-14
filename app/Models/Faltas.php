<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faltas extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    //relaicon uno a muchos
    public function faltadocente(){
        return $this->hasMany(Faltadocentes::class);
    }
}
