@extends('layouts.painel.app')



@section('content')

<h1> Excluir lancamento?</h1>


@foreach ($lancamento as $lancamentos)


@endforeach


<p>Código: {{$lancamentos->id}}</p>
<p>Parceiro: {{$lancamentos->parceiro}}</p>
<p>Data: {{$lancamentos->data}}</p>
<p>Valor: {{$lancamentos->valor}}</p>

<hr>


 {!! Form::open(['route' => ['lancamento.destroy',$lancamentos->id], 'method'=> 'DELETE']) !!}

{!! Form::submit ("Deletar lancamento",  ['class'=> 'btn btn-danger']) !!}
{!! Form::close() !!} 


@endsection