<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permisodocentes extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    //relaciokn uno a muchos inversa
    public function permiso(){
        return $this->belongsTo(Permisos::class);
    }

    public function mes(){
        return $this->belongsTo(Meses::class);
    }

    public function docente(){
        return $this->belongsTo(Docente::class);
    }
}
