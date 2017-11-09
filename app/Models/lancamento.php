<?php

namespace app\models;

use Illuminate\Database\Eloquent\Model;

class lancamento extends Model
{
     protected $table = 'lancamento';
     protected $filltable = ['empresa', 'data','parceiro','conta','despesareceita','valor','datapago'];
     protected $guarded = ['id'];
     
     public $timestamps = false;
     
     public function relParceiro()
    {
        return $this->belongsTo('App\models\Parceiro', 'parceiro');
    }
 
     public function relConta()
    {
        return $this->belongsTo('App\models\Conta', 'conta');
    }   
    
      public function relDespesareceita()
    {
        return $this->belongsTo('App\models\Despesareceita', 'despesareceita');
    }  
    
}