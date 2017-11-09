<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Despesareceita extends Model
{
     protected $table = 'despesareceita';
     protected $filltable = ['empresa', 'nome','debcred'];
     protected $guarded = ['id'];
     
     public $timestamps = false;
       public function relLancamento()
    {
        return $this->hasMany('App\models\Lancamento', 'despesareceita');
    }
}