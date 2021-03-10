<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $table='profissional';
    protected $fillable=['disponibilidade','email','github','imagem','password','titulo','taxa','skills','nome','linkedin','portfolio'];
    public $timestamps = false;
}
