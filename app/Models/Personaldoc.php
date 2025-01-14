<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personaldoc extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    //relaciokn uno a muchos inversa
    public function docente(){
        return $this->belongsTo(Docente::class);
    }

    public function documentofile(){
        return $this->belongsTo(Documentofile::class);
    }
    public function diplomado(){
        return $this->belongsTo(Diplomado::class);
    }

    

}
