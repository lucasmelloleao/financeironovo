<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
     protected $table = 'users';
     protected $filltable = ['name'];
     protected $guarded = ['id'];
     public $timestamp= false;
}
