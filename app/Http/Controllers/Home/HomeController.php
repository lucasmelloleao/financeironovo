<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\atividade;

class HomeController extends Controller
{
    public function index()
    {
      //  $org = new atividade;
     //   $orgs = $org->all();



   //     return view('home.index', compact ('orgs'));
        return view('home.index');
    }
    
     public function planejamento()
    {
       
        return view('home.planejamento' );
    }   
}
