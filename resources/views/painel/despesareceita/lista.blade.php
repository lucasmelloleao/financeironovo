@extends('layouts.painel.app')



@section('title', 'Despesas e Receitas')

@section('content')








<h1>Despesareceita </h1>
<a href="{{url('/painel/despesareceita/create')}}" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"> </span>

    Cadastrar </a>
<p></p>

<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th> $ </th>
            <th> Nome</th>
            <th> D/C</th>
            <th width="100px"> Ações</th>

        </tr>
    </thead>
    
    
     <tfoot>
        <tr>
            <th> $ </th>
            <th> Nome</th>
            <th> D/C</th>
            <th width="100px"> Ações</th>

        </tr>
    </tfoot>

  <tbody>
    
      @foreach ($despesareceitas as $despesareceita)

      <tr>
        <td> {{$despesareceita->id}} </td>
        <td> {{$despesareceita->nome}} </td>
        <td> {{$despesareceita->debcred}} </td>


        <td> 


            <a href="{{route('despesareceita.edit', $despesareceita->id)}}" class="action edit"> <span class = "glyphicon glyphicon-pencil"></span> </a>
            <a href="{{route('despesareceita.show', $despesareceita->id)}}" class="action delete">  <span class = "glyphicon glyphicon-trash"></span> </a> 
        </td>
      </tr>
      @endforeach
  </tbody>
</table>




<p>.</p>




<script>
   $(document).ready(function() {
    $('#example').DataTable( {
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"
        }
    } );
} );
</script>



@endsection

