@extends('layouts.painel.app')



@section('title', 'lancamento')

@section('content')





  <style type="text/css">
    
td.bgVerde {

  color: #07CC36;
}
td.bgVermelho {

  color: #c12536;
}


  </style>







<h1>lancamento </h1>
<a href="{{url('/painel/lancamento/create')}}" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"> </span>

    Cadastrar </a>
<p></p>

<table id="tabela" class="display" cellspacing="0" width="100%">

    <thead>
        <tr>
            <th> Data</th>
            <th> Parceiro</th>
            <th> Conta</th>
            <th> Despesa</th>
            <th> Descrição</th>
            <th> Valor</th>
            <th width="100px"> Ações</th>
        </tr>
    </thead>
    
    
     <tfoot>
        <tr>
            <th> Data</th>
            <th> Parceiro</th>
            <th> Conta</th>
            <th> Despesa</th>
            <th> Descrição</th>
             <th> Valor</th>
            <th width="100px"> Ações</th>
        </tr>
    </tfoot>
    
    <tbody>
    @foreach ($lancamentos as $lancamento)

    <tr>


        <td> {{$lancamento->data}} </td>
        <td> {{$lancamento->relParceiro->nome}} </td>
        <td> {{$lancamento->relConta->nome}} </td>
        <td> {{$lancamento->relDespesareceita->nome}} </td>
        <td> {{$lancamento->descricao}}         </td>
        @if ($lancamento->valor > 0)      
           <td class="bgVerde">  {{number_format($lancamento->valor, 2, ',', '.')}} </td>
        @else
           <td class="bgVermelho">  {{number_format($lancamento->valor, 2, ',', '.')}} </td>
        @endif        
      







        <td> 


            <a href="{{route('lancamento.edit', $lancamento->id)}}" class="action edit"> 
                <span class = "glyphicon glyphicon-pencil"></span>
            </a>

            <a href="{{route('lancamento.show', $lancamento->id)}}" class="action delete"> 
                <span class = "glyphicon glyphicon-trash"></span>
            </a>
        </td>

    </tr>
    @endforeach
</tbody>
</table>



<p>.</p>





	
<script>
/* global $ */
   $(document).ready(function() {
    $('#tabela').DataTable( {
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"
        }
    } );
} );
</script>



@endsection