<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplomado extends Model
{
    protected $fillable = [
        'docente_id', 'ndoc','descripcion','emisor', 'doc_path'];
    use HasFactory;

    //relaciokn uno a muchos inversa
    public function docente(){
        return $this->belongsTo(Docente::class);
    }
    public function personaldoc(){
        return $this->belongsTo(Personaldoc::class);
    }
}
