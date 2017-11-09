<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Painel;
use App\models\despesareceita;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class DespesareceitaController extends Controller {

    private $despesareceita;
    private $paginate;

    public function __construct() {

        $despesareceita = new despesareceita;

        $this->middleware('auth');
    }




    public function index(despesareceita $request) {

        $this->paginate = 20;

        $despesareceitas = $request->where('empresa', session('empresa'))
                        ->orderBy('nome', 'asc')->get();
                        //paginate($this->paginate);


        return view('painel.despesareceita.lista', compact('despesareceitas'));
    }

    public function create() {
        $title = 'Cadastrar despesareceita';
        return view('painel/despesareceita/create', compact('title'));
    }

    public function store(Request $request) {
        // dd ($request->all());
        // dd($request->only(['name','number']));
        // dd($request->except(['_token']);
        // dd($request->input('name'));
        $dataForm = ($request->except(['_token']));

	
        $dataForm["empresa"] = session('empresa');
        $dataForm["id"] = 0;

        $despesareceita = new despesareceita;
        $insert = $despesareceita->insert($dataForm);


        if ($insert)
            return redirect()->route('despesareceita.index');
        else
            return redirect()->route('despesareceita.create');
    }

    public function show($id) {
        $despesareceita = new despesareceita;

        $despesareceita = $despesareceita->where('id', $id)
                ->where('empresa', session('empresa'))
                ->get();

        return view('painel.despesareceita.delete', compact('despesareceita'));
    }



    public function edit($id) {

        $despesareceita = new despesareceita;



        $despesareceita = $despesareceita->where('id', $id)
                ->where('empresa', session('empresa'))
                ->get();

        

        $despesareceita = $despesareceita[0];

                
        return view('painel/despesareceita/create', compact('title', 'despesareceita'));
    }

    public function update(Request $request, $id) {


        $despesareceita = new despesareceita;

        $dataForm = $request->except(['_token', '_method']);


        $despesareceita = $despesareceita->where('id', $id)
                        ->where('empresa', session('empresa'))
                        ->get()->first();
//dd ($dataForm);


   

// inicia a atualizacao

        $update = $despesareceita->where('id', $id)
                ->update($dataForm);








            if ($update)
                return redirect()->route('despesareceita.index');
            else
                return redirect()->route('despesareceita.edit', $id); //->with(['errors'=>'Falha ao editar']);
        }
   


    public function destroy($id) {
        $despesareceita = new despesareceita;

        $despesareceita = $despesareceita->where('id', $id)
                        ->where('empresa', session('empresa'))
                        ->get()->first();

        $delete = $despesareceita->where('id', $id)
                ->where('empresa', session('empresa'))
                ->delete();
        if ($delete)
            return redirect()->route('despesareceita.index');
        else
            return redirect()->route('despesareceita.delete');
    }

}
