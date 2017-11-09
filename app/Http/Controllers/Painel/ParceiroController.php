<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Painel;
use App\models\parceiro;
use App\models\municipio;
use App\models\documento;
use App\models\endereco;
use App\models\fone;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class ParceiroController extends Controller {

    private $parceiro;
    private $paginate;

    public function __construct() {

        $parceiro = new parceiro;

        $this->middleware('auth');
    }




    public function index(parceiro $request) {

        $this->paginate = 20;

        $parceiros = $request->where('empresa', session('empresa'))
                        ->orderBy('nome', 'asc')->paginate($this->paginate);


        return view('painel.parceiro.lista', compact('parceiros'));
    }

    public function create() {
        $title = 'Cadastrar parceiro';
        return view('painel/parceiro/create', compact('title'));
    }

    public function store(Request $request) {
        // dd ($request->all());
        // dd($request->only(['name','number']));
        // dd($request->except(['_token']);
        // dd($request->input('name'));
        $dataForm = ($request->except(['_token']));

	
        $dataForm["empresa"] = session('empresa');
        $dataForm["id"] = 0;

$parceiro = new parceiro;
        $insert = $parceiro->insert($dataForm);


        if ($insert)
            return redirect()->route('parceiro.index');
        else
            return redirect()->route('parceiro.create');
    }

    public function show($id) {
    $parceiro = new parceiro;

        $parceiro = $parceiro->where('id', $id)
                ->where('empresa', session('empresa'))
                ->get();

        return view('painel.parceiro.delete', compact('parceiro'));
    }



    public function edit($id) {

$parceiro = new parceiro;



 $parceiro = $parceiro->where('id', $id)
                ->where('empresa', session('empresa'))
                ->get();

        

        $parceiro = $parceiro[0];

                
        return view('painel/parceiro/create', compact('title', 'parceiro'));
    }

    public function update(Request $request, $id) {


$parceiro = new parceiro;

        $dataForm = $request->except(['_token', '_method']);


        $parceiro = $parceiro->where('id', $id)
                        ->where('empresa', session('empresa'))
                        ->get()->first();
//dd ($dataForm);


   

// inicia a atualizacao

        $update = $parceiro->where('id', $id)
                ->update($dataForm);








            if ($update)
                return redirect()->route('parceiro.index');
            else
                return redirect()->route('parceiro.edit', $id); //->with(['errors'=>'Falha ao editar']);
        }
   


    public function destroy($id) {
        $parceiro = new parceiro;

        $parceiro = $parceiro->where('id', $id)
                        ->where('empresa', session('empresa'))
                        ->get()->first();

        $delete = $parceiro->where('id', $id)
                ->where('empresa', session('empresa'))
                ->delete();
        if ($delete)
            return redirect()->route('parceiro.index');
        else
            return redirect()->route('parceiro.delete');
    }

}
