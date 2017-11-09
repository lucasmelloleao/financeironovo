<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parceiro extends Model
{
     protected $table = 'parceiro';
     protected $filltable = ['empresa', 'nome'];
     protected $guarded = ['id'];
     
     public $timestamps = false;
     
     public function relLancamento()
    {
        return $this->hasMany('App\models\Lancamento', 'parceiro');
    }
}