@extends('layouts.painel.app')



@section('content')

<h1> Excluir Parceiro?</h1>


@foreach ($parceiro as $parceiros)


@endforeach


<p>Código: {{$parceiros->id}}</p>
<p>Horario: {{$parceiros->nome}}</p>

<hr>


 {!! Form::open(['route' => ['parceiro.destroy',$parceiros->id], 'method'=> 'DELETE']) !!}

{!! Form::submit ("Deletar Parceiro",  ['class'=> 'btn btn-danger']) !!}
{!! Form::close() !!} 


@endsection