@extends('layouts.painel.app')



@section('content')

<h1> Excluir Despesa/Receita?</h1>


@foreach ($despesareceita as $despesareceitas)


@endforeach


<p>Código: {{$despesareceitas->id}}</p>
<p>Descrição: {{$despesareceitas->nome}}</p>
<p>Tipo: {{$despesareceitas->debcred}}</p>

<hr>


 {!! Form::open(['route' => ['despesareceita.destroy',$despesareceitas->id], 'method'=> 'DELETE']) !!}

{!! Form::submit ("Deletar DespesaReceita",  ['class'=> 'btn btn-danger']) !!}
{!! Form::close() !!} 


@endsection