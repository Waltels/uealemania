<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docdocente extends Model
{
    
    use HasFactory;


    //relaicon uno a muchos
    public function docdireccion(){
        return $this->hasMany(Docdireccion::class);
    }
}
