<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Painel;
use App\Models\conta;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class ContaController extends Controller {

    private $conta;
    private $paginate;

    public function __construct() {

        $conta = new conta;

        $this->middleware('auth');
    }




    public function index(conta $request) {

        $this->paginate = 20;

        $contas = $request->where('empresa', session('empresa'))
                        ->orderBy('nome', 'asc')->paginate($this->paginate);


        return view('painel.conta.lista', compact('contas'));
    }

    public function create() {
        $title = 'Cadastrar conta';
        return view('painel/conta/create', compact('title'));
    }

    public function store(Request $request) {
        // dd ($request->all());
        // dd($request->only(['name','number']));
        // dd($request->except(['_token']);
        // dd($request->input('name'));
        $dataForm = ($request->except(['_token']));

	
        $dataForm["empresa"] = session('empresa');
        $dataForm["id"] = 0;

$conta = new conta;
        $insert = $conta->insert($dataForm);


        if ($insert)
            return redirect()->route('conta.index');
        else
            return redirect()->route('conta.create');
    }

    public function show($id) {
    $conta = new conta;

        $conta = $conta->where('id', $id)
                ->where('empresa', session('empresa'))
                ->get();

        return view('painel.conta.delete', compact('conta'));
    }



    public function edit($id) {

$conta = new conta;



 $conta = $conta->where('id', $id)
                ->where('empresa', session('empresa'))
                ->get();

        

        $conta = $conta[0];

                
        return view('painel/conta/create', compact('title', 'conta'));
    }

    public function update(Request $request, $id) {


$conta = new conta;

        $dataForm = $request->except(['_token', '_method']);


        $conta = $conta->where('id', $id)
                        ->where('empresa', session('empresa'))
                        ->get()->first();
//dd ($dataForm);


   

// inicia a atualizacao

        $update = $conta->where('id', $id)
                ->update($dataForm);








            if ($update)
                return redirect()->route('conta.index');
            else
                return redirect()->route('conta.edit', $id); //->with(['errors'=>'Falha ao editar']);
        }
   


    public function destroy($id) {
        $conta = new conta;

        $conta = $conta->where('id', $id)
                        ->where('empresa', session('empresa'))
                        ->get()->first();

        $delete = $conta->where('id', $id)
                ->where('empresa', session('empresa'))
                ->delete();
        if ($delete)
            return redirect()->route('conta.index');
        else
            return redirect()->route('conta.delete');
    }

}
