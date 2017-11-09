@extends('layouts.painel.app')



@section('title', 'parceiro')

@section('content')








<h1>Parceiro XXXX </h1>
<a href="{{url('/painel/parceiro/create')}}" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"> </span>

    Cadastrar </a>
<p></p>

<table id="example" class="display" cellspacing="0" width="100%">

    <thead>
        <tr>
            <th> #</th>
            <th> Nome</th>


            <th width="100px"> Ações</th>

        </tr>
    </thead>
    
     <tfoot>
        <tr>
            <th> #</th>
            <th> Nome</th>


            <th width="100px"> Ações</th>

        </tr>
    </tfoot>
    <tbody>
    @foreach ($parceiros as $parceiro)

    <tr>
        <td> {{$parceiro->id}} </td>
        <td> {{$parceiro->nome}} </td>


        <td> 


            <a href="{{route('parceiro.edit', $parceiro->id)}}" class="action edit"> 
                <span class = "glyphicon glyphicon-pencil"></span>
            </a>

            <a href="{{route('parceiro.show', $parceiro->id)}}" class="action delete"> 
                <span class = "glyphicon glyphicon-trash"></span>
            </a>
        </td>

    </tr>
    @endforeach
</tbody>
</table>
{!! $parceiros->links() !!} 
<p>.</p>









<script>


   $(document).ready(function() {
    $('#example').DataTable( {
        "language": {
            
            "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"
        }
    } );
} );
</script>



@endsection

