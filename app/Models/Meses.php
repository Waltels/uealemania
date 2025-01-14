<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meses extends Model
{
    protected $guarded = ['id'];
    
    use HasFactory;

    //relaicon uno a muchos
    public function faltadocente(){
        return $this->hasMany(Faltadocentes::class);
    }
    public function permisodocente(){
        return $this->hasMany(Permisos::class);
    }
}
