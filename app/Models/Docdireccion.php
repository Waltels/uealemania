<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docdireccion extends Model
{
    protected $guarded = ['id'];
    
    use HasFactory;

    //relaciokn uno a muchos inversa
    public function docente(){
        return $this->belongsTo(Docente::class);
    }
    public function docdocente(){
        return $this->belongsTo(Docdocente::class);
    }
}
