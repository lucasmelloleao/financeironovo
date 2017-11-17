<?php

namespace App\Http\Controllers\Painel;
use Illuminate\Http\Helpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Painel;
use App\Models\lancamento;
use App\Models\parceiro;
use App\Models\conta;
use App\Models\despesareceita;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class LancamentoController extends Controller {

    private $lancamento;

    private $parceiro;
    private $paginate;

    public function __construct() {

        $lancamento = new lancamento;
        $parceiro = new parceiro;
        $this->middleware('auth');
    }



    public function index(lancamento $request) {

        $this->paginate = 20;

  $data = date('Y-m-d');
  
  $data = date('Y-m-d', strtotime("-60 days",strtotime($data))); 
  
//  dd ($data);



//$data2 = date('Y-m-d', strtotime("+30 days",strtotime($data))); 
//$data3 = date('Y-m-d', strtotime("+32 days",strtotime($data))); 



        $lancamentos = $request->where('empresa', session('empresa'))
                        ->whereDate('data','>=', $data)->get();
                        
                  //     ->where ('data','>=', $data2)
                       //->where ('data','<=', $data3)->get();
                                           
                        //paginate($this->paginate);
$a = 0;

foreach ($lancamentos as $lancamento)
 
{
   $a = $a + $lancamento->valor;
}


  
 

        return view('painel.lancamento.lista', compact('lancamentos','a'));
    }

    public function create() {
        $title = 'Cadastrar Lancamento';
        $parceiro = new parceiro;
        $parceiros = $parceiro
                        ->where('empresa', session('empresa'))
                        ->get();
               

    	$conta = new conta;
        $contas = $conta ->where('empresa', session('empresa'))
                        ->get();

                        
      	$despesareceita = new despesareceita;
        $despesareceitas = $despesareceita ->where('empresa', session('empresa'))
                        ->get();


                        
        
        return view('painel/lancamento/create', compact('title','parceiros','contas','despesareceitas'));
    }

    public function store(Request $request) {
        // dd ($request->all());
        // dd($request->only(['name','number']));
        // dd($request->except(['_token']);
        // dd($request->input('name'));
        $dataForm = ($request->except(['_token']));




	
        $dataForm["empresa"] = session('empresa');
        $dataForm["id"] = 0;


        $valor =  str_replace(",", ".", $dataForm["valor"]);
        $dataForm["valor"] = $valor;

        $data = $dataForm["data"];
        $data =  date($data);
        $data = date('Y-m-d', strtotime($data));
        $dataForm["data"] = $data;

//str_replace("/", "-", 
//$data =  str_replace("\r\n", "", $data);

        $lancamento = new lancamento;
        $insert = $lancamento->insert($dataForm);

        if ($insert)
            return redirect()->route('lancamento.index');
        else
            return redirect()->route('lancamento.create');
    }

    public function show($id) {
        $lancamento = new lancamento;

        $lancamento = $lancamento->where('id', $id)
                ->where('empresa', session('empresa'))
                ->get();

        return view('painel.lancamento.delete', compact('lancamento'));
    }



    public function edit($id) {

        $lancamento = new lancamento;



        $lancamento = $lancamento->where('id', $id)
                ->where('empresa', session('empresa'))
                ->get();

        

        $lancamento = $lancamento[0];
        
        
                $parceiro = new parceiro;
        $parceiros = $parceiro
                        ->where('empresa', session('empresa'))
                        ->get();
               

    	$conta = new conta;
        $contas = $conta ->where('empresa', session('empresa'))
                        ->get();

                        
      	$despesareceita = new despesareceita;
        $despesareceitas = $despesareceita ->where('empresa', session('empresa'))
                        ->get();



        
        
        

                
        return view('painel/lancamento/create', compact('title', 'lancamento', 'parceiros','contas','despesareceitas'));
    }

    public function update(Request $request, $id) {


        $lancamento = new lancamento;

        $dataForm = $request->except(['_token', '_method']);



        $lancamento = $lancamento->where('id', $id)
                        ->where('empresa', session('empresa'))
                        ->get()->first();
//dd ($dataForm);


        $data = $dataForm["data"];
        $data =  date($data);
        $data = date('Y-m-d', strtotime($data));
        $dataForm["data"] = $data;
        $dataForm["valor"] =  str_replace(",", ".", $dataForm["valor"]);
   

// inicia a atualizacao

        $update = $lancamento->where('id', $id)
                ->update($dataForm);








            if ($update)
                return redirect()->route('lancamento.index');
            else
                return redirect()->route('lancamento.edit', $id); //->with(['errors'=>'Falha ao editar']);
        }
   


    public function destroy($id) {
        $lancamento = new lancamento;

        $lancamento = $lancamento->where('id', $id)
                        ->where('empresa', session('empresa'))
                        ->get()->first();

        $delete = $lancamento->where('id', $id)
                ->where('empresa', session('empresa'))
                ->delete();
        if ($delete)
            return redirect()->route('lancamento.index');
        else
            return redirect()->route('lancamento.delete');
    }

}




    
function subtotal ($dataini, $datafim, $valor){


$lancamentos = new lancamento;

$data = date('Y-m-d', strtotime("+30 days",strtotime($dataini))); 
$data2 = date('Y-m-d', strtotime("+32 days",strtotime($dataini))); 


 

$dad = $lancamentos->where('empresa', session('empresa'))
                   ->where ('data','>=', $data)
                   ->where ('data','<=', $data2)
                       ->orderBy('data', 'asc')->get();

foreach ($dad as $lancamento)
{

$valor = $valor + floatval($lancamento->valor);
//echo floatval($lancamento->valor);
}

return $valor;

}
