<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
     protected $table = 'conta';
     protected $filltable = ['empresa', 'nome','tipo'];
     protected $guarded = ['id'];
     
     public $timestamps = false;
     
       public function relLancamento()
    {
        return $this->hasMany('App\models\Lancamento', 'conta');
    }
}