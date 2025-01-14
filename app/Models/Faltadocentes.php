<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faltadocentes extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    //relaciokn uno a muchos inversa
    public function falta(){
        return $this->belongsTo(Faltas::class);
    }

    public function mes(){
        return $this->belongsTo(Meses::class);
    }

    public function docente(){
        return $this->belongsTo(Docente::class);
    }
}
