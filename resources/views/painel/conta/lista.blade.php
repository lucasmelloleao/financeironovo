


@extends('layouts.painel.app')



@section('title', 'conta')

@section('content')








<h1>Conta </h1>
<a href="{{url('/painel/conta/create')}}" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"> </span>

    Cadastrar </a>
<p></p>

<table id="tabela" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th> #</th>
            <th> Nome</th>
            <th> Tipo Conta</th>


            <th width="100px"> Ações</th>

        </tr>
    </thead>
    <tbody>
    @foreach ($contas as $conta)

    <tr>
        <td> {{$conta->id}} </td>
        <td> {{$conta->nome}} </td>
        <td> {{$conta->tipo}} </td>


        <td> 


            <a href="{{route('conta.edit', $conta->id)}}" class="action edit"> 
                <span class = "glyphicon glyphicon-pencil"></span>
            </a>

            <a href="{{route('conta.show', $conta->id)}}" class="action delete"> 
                <span class = "glyphicon glyphicon-trash"></span>
            </a>
        </td>

    </tr>
    @endforeach
</tbody>
</table>
{!! $contas->links() !!} 
<p>.</p>


	
<script>
/* global $ */
   $(document).ready(function() {
    $('#tabela').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"
        }
    } );
} );
</script>



@endsection

	