<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\organograma;
use App\Models\atividade;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

//use DB;




class PainelController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct() {
        $this->middleware('auth');
    }


 

    

    public function minor() {
        return view('home.minor');
    }

    public function organograma() {

       
            return view('painel.organograma.index');
      
           
      
    }

   

    public function dadosorganograma($id) {
        $org = new organograma;
        $orgs = $org->all();

        return view('painel.organograma.dadosorganograma', compact('orgs'));
    }

    public function index() {
        $user = Auth::user();
        $admin = $user->administrador;



  session:: put('empresa', 2);


  
        if ($admin != 1)
         return view('painel.proibido');
        else
        return view('painel.index');
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
