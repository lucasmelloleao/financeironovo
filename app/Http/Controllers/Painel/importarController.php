<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Painel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\models\conta;
use App\models\despesareceita;
use App\models\lancamento;

class ImportarController extends Controller {


    private $paginate;

    public function __construct() {

     
	
    
    }




    public function index(request $request) {
    

//dd ($request);
   //indica o caminho do arquivo no servidor
        $arquivo = 'arquivos/arquivo.csv';


        //cria um array que receberá os dados importados do arquivo txt
        $arquivoArr = array();
        
        //aqui é enviado para função fopen o endereço do arquivo e a instrução 'r' que indica 'somente leitura' e coloca o ponteiro no começo do arquivo
        $arq = fopen($arquivo, 'r');
        
        //variável armazena o total de linhas importadas
        $total_linhas_importadas = 0;
        
        //a função feof retorna true (verdadeiro) se o ponteiro estiver no fim do arquivo aberto
        //a negação do retorno de feof indicada pelo caracter "!" do lado esquerdo da função faz com 
        //que o laço percorra todas as linhas do arquivo até fim do arquivo (eof - end of file)
        while(!feof($arq)){
                
                //retorna a linha do ponteiro do arquivo                        
                $conteudo = fgets($arq);

                //transforma a linha do ponteiro em uma matriz de string, cada uma como substring de string formada a partir do caracter ';'
                $linha = explode(';', $conteudo);
                
                //array recebe as substring contidas na matriz carregada na variável $linha 
                $arquivoArr[$total_linhas_importadas] = $linha;

                //incremente a variável que armazena o total de linhas importadas
                $total_linhas_importadas++;
        }
    
        

//        $this->paginate = 20;

  //      $parceiros = $request->where('empresa', session('empresa'))
//                        ->orderBy('nome', 'asc')->paginate($this->paginate);



//dd ($arquivoArr);

foreach($arquivoArr as $linha)
{




$dataForm["empresa"] = session('empresa');




if ($linha[4] == "")
{




 $data = date('Y-m-d', "2017-10-19");
}
else {
$data =  date(str_replace("/", "-", $linha[4]));
$data = date('Y-m-d', strtotime($data));
}


$dataForm["data"] = date($data);
$dataForm["parceiro"] = 2;
$valor = $linha[5];

$valor =  str_replace(".", "", $valor);
$valor =  str_replace(",", ".", $valor);

$dataForm["valor"] = $valor;


$data =  date(str_replace("/", "-", $linha[6]));
$data =  str_replace("\r\n", "", $data);
$data = date('Y-m-d', strtotime($data));

$dataForm["datapago"] = $data;



$dataForm["descricao"] = $linha[0];
$dataForm["id"] = 0;



// buscar as contas
   $conta = new conta;
       $conta = DB::table('conta')
                        ->where('empresa', session('empresa'))
                        ->where('nome', $linha[2])->get();

        $i = -1;
        foreach ($conta as $i => $end)
        {   }        

        if ($i == -1) {
        
        $dados = array();
        $dados["id"] = 0;
        $dados["tipo"] = "Banco";
        $dados["empresa"] = session('empresa');
        $dados["nome"] = $linha[2];
        $conta = new conta;
        $update = $conta->insert($dados);
        
        
        
        
         }    else {	
        
         $conta = $conta[0];
         $dataForm["conta"] = $conta->id;

         }
       
// buscar as despesas
  $despesareceita = new despesareceita;
       $despesareceita = DB::table('despesareceita')
                        ->where('empresa', session('empresa'))
                        ->where('nome', $linha[1])->get();

        $i = -1;
        foreach ($despesareceita as $i => $end)
        {   }        

        if ($i == -1) {
       
       
        $dados = array();
        $dados["id"] = 0;

        $dados["empresa"] = session('empresa');
        $dados["nome"] = $linha[1];
        
        if ($valor < 0)
        	{$dados["debcred"] = "D";}
       if ($valor >0)
      
          {$dados["debcred"] = "C";}
                	
    
    
   	
        $despesareceita = new despesareceita;
        $update = $despesareceita->insert($dados);
       
       
       
       
       
         }    else {	
        

         $despesareceita = $despesareceita[0];
       
         
         $dataForm["despesareceita"] = $despesareceita->id;

         }

//dd ($dataForm);
       
        $lancamento = new lancamento;
        $insert = $lancamento->insert($dataForm);






}
   foreach($linha as $campo)
{
	
 
}}


  //      return view('home.importar', compact('arquivoArr'));
    

  

}



