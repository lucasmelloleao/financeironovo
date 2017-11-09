@extends('layouts.painel.app')
@section('title', 'Despesareceita')
@section('content')






@if (isset($despesareceita)) 

<form class="form" method="post"  action="{{route('despesareceita.update', $despesareceita->id)}}">
    {!! method_field('PUT') !!}
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Cadastro de Despesas e Receitas</h5>

                </div>
                <div class="ibox-content">
                    <div class="row">

                        @else

                        <form class="form" method="post"  action="{{url('/painel/despesareceita/store')}}">
                            @endif 



                            {!! csrf_field() !!}



                            <div class="form-group col-lg-6">
                                <input readonly type="text" name="id" class="form-control col-lg-6" value="{{$despesareceita->id or old('id')}}" >

                            </div>


                            <div class="col-lg-12"> 
                                <div class="form-group">
                                    <input type="text" name= "nome" placeholder="Descrição da Conta" class="form-control" value="{{$despesareceita->nome or old('nome')}}" >
                                </div>
                            </div>

                            <div class="col-lg-12"> 
                                <div class="form-group">
                                    <input type="text" name= "debcred" placeholder="D/C" class="form-control" value="{{$despesareceita->debcred or old('debcred')}}" >
                                </div>
                            </div>




                        <div class="panel-body ">
                            <button class="btn btn-primary">Salvar</buton>
                        </div>
                    </div>

                </div>
            </div>
        </div>












    </div>

</div>


</form> 




<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript">
$(function () {
    $(".removerFone").bind("click", function () {
        $a = ($("tr.linhasFone").length);

        if ($("tr.linhasFone").length > 0) {
            $(this).parent().parent().find(".removidoFone").val(1);
            $(this).parent().parent().css("display", "none");
        }
    });

    $(".removerEndereco").bind("click", function () {
        $a = ($("tr.linhasEndereco").length);

        if ($("tr.linhasEndereco").length > 0) {
            $(this).parent().parent().find(".removidoEndereco").val(1);
            $(this).parent().parent().css("display", "none");
        }
    });


    $(".removerDocumento").bind("click", function () {
        $a = ($("tr.linhasDocumento").length);

        if ($("tr.linhasDocumento").length > 0) {
            $(this).parent().parent().find(".removidoDocumento").val(1);
            $(this).parent().parent().css("display", "none");
        }
    });


    $(".adicionarFone").click(function () {
        $a = $("tr.linhasFone").length;

        novoCampo = $("tr.linhasFone:first").clone();
        novoCampo.find("input").val("");
        novoCampo.css('display', '');
        novoCampo.insertAfter("tr.linhasFone:last");
        novoCampo.find("input").each(function (k, v) {
            v = $(v);
            if (v.attr('name').indexOf('[0]') >= 0) {
                v.attr('name', v.attr('name').replace('[0]', '[' + ($("tr.linhas").length - 1) + ']'));
            }
        });
    });






    $(".adicionarEndereco").click(function () {
        $a = $("tr.linhasEndereco").length;

        novoCampo = $("tr.linhasEndereco:first").clone();
        novoCampo.find("input").val("");
        novoCampo.css('display', '');
        novoCampo.insertAfter("tr.linhasEndereco:last");
        novoCampo.find("input").each(function (k, v) {
            v = $(v);
            if (v.attr('name').indexOf('[0]') >= 0) {
                v.attr('name', v.attr('name').replace('[0]', '[' + ($("tr.linhasEndereco").length - 1) + ']'));
            }
        });
    });

    $(".adicionarDocumento").click(function () {
        $a = $("tr.linhasDocumento").length;

        novoCampo = $("tr.linhasDocumento:first").clone();
        novoCampo.find("input").val("");
        novoCampo.css('display', '');
        novoCampo.insertAfter("tr.linhasDocumento:last");
        novoCampo.find("input").each(function (k, v) {
            v = $(v);
            if (v.attr('name').indexOf('[0]') >= 0) {
                v.attr('name', v.attr('name').replace('[0]', '[' + ($("tr.linhas").length - 1) + ']'));
            }
        });
    });




});
</script>



<script type="text/javascript">

    jQuery("#tipodespesareceita").change(function(){
       // Aqui você tem o value selecionado assim que o usuário muda o option
       var id = jQuery(this).val();
       var tp_despesareceita = $("#PJ").val();
       if (tp_despesareceita == 1) {
   alert ("B"); 
   }else{alert ("A" );}
           
       
     
       
     //  var id1 = $("#nm_mae").val();
     //  alert (id1);
        //$("#nm_mae").val("");
    });

</script>


@endsection