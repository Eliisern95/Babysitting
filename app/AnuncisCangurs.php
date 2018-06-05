<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnuncisCangurs extends Model
{
    //
    protected $table = "anuncis_cangurs";
    protected $fillable = ['usuaris','titol','descripcio','preu'];
    public $timestramps = true;
}
