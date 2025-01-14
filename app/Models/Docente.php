<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    
    //relaciokn uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    //relaicon uno a muchos
    public function personaldoc(){
        return $this->hasMany(Personaldoc::class);
    }    
    public function diplomado(){
        return $this->hasMany(Diplomado::class);
    } 
    public function curso(){
        return $this->hasMany(Curso::class);
    } 
    public function docdireccion(){
        return $this->hasMany(Docdireccion::class);
    }
    public function faltadocente(){
        return $this->hasMany(Docdireccion::class);
    }
    public function permisodocente(){
        return $this->hasMany(Permisos::class);
    }
}
