<?php $__env->startSection('title', 'Pessoa','documento', 'endereco','fone'); ?>
<?php $__env->startSection('content'); ?>






<?php if(isset($pessoa)): ?> 

<form class="form" method="post"  action="<?php echo e(route('pessoa.update', $pessoa->cd_parceiro)); ?>">
    <?php echo method_field('PUT'); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Cadastro de Pessoas</h5>

                </div>
                <div class="ibox-content">
                    <div class="row">

                        <?php else: ?>

                        <form class="form" method="post"  action="<?php echo e(url('/painel/pessoa/store')); ?>">
                            <?php endif; ?> 



                            <?php echo csrf_field(); ?>




                            <div class="form-group col-lg-6">
                                <input readonly type="text" name="cd_parceiro" class="form-control col-lg-6" value="<?php echo e(isset($pessoa->cd_parceiro) ? $pessoa->cd_parceiro : old('cd_parceiro')); ?>" >

                            </div>
                            <div id="tipoPessoa" class="form-group col-lg-6">
                                
                               

                                <?php if($pessoa->tp_pessoa == 1): ?>   
                                <select id ="PF" class="form-control">
                                    <option value="1"selected>Pessoa Fisica</option>
                                    <option value="2">Pessoa Jurídica</option>
                                </select>
                                <?php else: ?>

                                <select id ="PJ" class="form-control">
                                    <option value="1">Pessoa Fisica</option>
                                    <option value="2" selected>Pessoa Jurídica</option>
                                </select>
                                <?php endif; ?>


                              
                            </div>

                            <div class="col-lg-12"> 
                                <div class="form-group">
                                    <input type="text" name= "nm_pessoa" placeholder="Nome da Pessoa" class="form-control" value="<?php echo e(isset($pessoa->nm_pessoa) ? $pessoa->nm_pessoa : old('nm_pessoa')); ?>" >
                                </div>
                            </div>
                            <div class="col-lg-6"> 
                                <div class="form-group">
                                    <input type="text" name= "nm_apelido" placeholder="Apelido" class="form-control" value="<?php echo e(isset($pessoa->nm_apelido) ? $pessoa->nm_apelido : old('nm_apelido')); ?>" >
                                </div>
                            </div>

                            <div class="col-lg-6"> 
                                <div class="form-group">
                                    <input type="text" id= "nm_fantasia" name= "nm_fantasia" placeholder="nome Fantasia" class="form-control" value="<?php echo e(isset($pessoa->nm_fantasia) ? $pessoa->nm_fantasia : old('nm_fantasia')); ?>" >
                                </div>
                            </div>

                            <div class="col-lg-6"> 
                                <div class="form-group">
                                    <input type="text" id = "nm_pai" name= "nm_pai" placeholder="Nome do Pai" class="form-control" value="<?php echo e(isset($pessoa->nm_pai) ? $pessoa->nm_pai : old('nm_pai')); ?>" >
                                </div>
                            </div>

                            <div class="col-lg-6"> 
                                <div class="form-group">
                                    <input type="text" id ="nm_mae" name= "nm_mae" placeholder="nome da Mae" class="form-control" value="<?php echo e(isset($pessoa->nm_mae) ? $pessoa->nm_mae : old('nm_mae')); ?>" >
                                </div>
                            </div> 

                            <div class="col-lg-12"> 
                                <div class="form-group">
                                    <input type="text" name= "ds_observa" placeholder="Observações" class="card  form-control" value="<?php echo e(isset($pessoa->ds_observa) ? $pessoa->ds_observa : old('ds_observa')); ?>" >
                                </div>
                            </div>
                    </div>

                    <div class="panel panel-default>"
                         <div class="panel-heading"></div>
                        <div class="panel-body">



                            <?php if(isset($pessoa)): ?> 
                            <div class="col-lg-12">
                                <div class="tabs-container">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#tab-1">Documentos</a></li>
                                        <li class=""><a data-toggle="tab" href="#tab-2">Enderecos</a></li>
                                        <li class=""><a data-toggle="tab" href="#tab-3">Telefones</a></li>
                                        <li class=""><a data-toggle="tab" href="#tab-4">Teste</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="tab-1" class="tab-pane active">
                                            <div class="panel-body">
                                                <input type="button" value="Adicionar" class="btn btn-primary adicionarDocumento" title="Adicionar item">
                                                <table class="tab-pane">
                                                    <th> </th>

                                                    <th><h5> Tipo de Documento</h5> </th>
                                                    <th><h5> Número de Documento </h5></th>


                                                    <?php if(!empty(($documento))): ?> 



                                                    <?php $__currentLoopData = $documento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j => $documentos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                    <tr class="linhasDocumento">
                                                    <div class="form-group">
                                                        <td>
                                                            <input type="hidden" class="removidoDocumento" name="documentos[<?php echo e($j); ?>][in_removidoDocumento]" value=0 /> 
                                                            <input type="hidden" name="documentos[<?php echo e($j); ?>][dt_transacao]" value="<?php echo e($documentos->dt_transacao); ?>" /> </td>
                                                        </td>

                                                        <td> <input type="text" name="documentos[<?php echo e($j); ?>][cd_tpdocto]" value="<?php echo e($documentos->cd_tpdocto); ?>" />  </td>
                                                        <td> <input type="text" name="documentos[<?php echo e($j); ?>][ds_documento]" value="<?php echo e($documentos->ds_documento); ?>" /> </td>



                                                        <td> <a href="#"  class="btn btn-danger removerDocumento" title="Remover linha">  <span class="glyphicon glyphicon-remove"> </span></a> </td>

                                                    </div>                
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                                    <?php endif; ?>  


                                                    <?php if(empty($documento)): ?>

                                                    <tr class="linhasDocumento">

                                                        <td> <input type="hidden" class="removidoDocumento" name="documentos[-1][in_removidoDocumento]" value=0 /> 

                                                        </td>
                                                        <td> <input type="text" name="documentos[-1][cd_tpdocto]" value="" />  </td>
                                                        <td> <input type="text" name="documentos[-1][dt_transacao]" value="" /> </td>

                                                        <td> <a href="#"  class="btn btn-danger removerDocumento" title="Remover linha">  <span class="glyphicon glyphicon-remove"> </span></a> </td>

                                                    </tr>


                                                    <?php endif; ?>


                                                </table>

                                            </div>
                                        </div>
                                        <div id="tab-2" class="tab-pane">
                                            <div class="panel-body">

                                                <input type="button" value="Adicionar" class="btn btn-primary adicionarEndereco" title="Adicionar item">
                                                <table class="tab-pane">
                                                    <th> </th>

                                                    <th><h5> Endereco</h5> </th>
                                                    <th><h5> Numero </h5></th>
                                                    <th><h5>Bairro </h5></th>
                                                    <th> <h5> Complemento</h5></th>
                                                    <th><h5>Cep </h5></th>
                                                    <th><h5>Municipio </h5></th>

                                                    <?php if(!empty(($endereco))): ?> 



                                                    <?php $__currentLoopData = $endereco; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j => $enderecos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                    <tr class="linhasEndereco">
                                                    <div class="form-group">
                                                        <td>
                                                            <input type="hidden" class="removidoEndereco" name="enderecos[<?php echo e($j); ?>][in_removidoEndereco]" value=0 /> 
                                                            <input type="hidden" name="enderecos[<?php echo e($j); ?>][nr_sequencia]" value="<?php echo e($enderecos->nr_sequencia); ?>" />
                                                        </td>

                                                        <td> <input type="text" name="enderecos[<?php echo e($j); ?>][ds_endereco]" value="<?php echo e($enderecos->ds_endereco); ?>" />  </td>
                                                        <td> <input type="text" name="enderecos[<?php echo e($j); ?>][nr_endereco]" value="<?php echo e($enderecos->nr_endereco); ?>" /> </td>
                                                        <td><input  type="text" name="enderecos[<?php echo e($j); ?>][ds_bairro]" value="<?php echo e($enderecos->ds_bairro); ?>" /> </td>
                                                        <td> <input type="text" name="enderecos[<?php echo e($j); ?>][ds_complemento]" value="<?php echo e($enderecos->ds_complemento); ?>" /> </td>
                                                        <td> <input type="text" name="enderecos[<?php echo e($j); ?>][nr_cep]" value="<?php echo e($enderecos->nr_cep); ?>" />                  </td>
                                                        <td> <input  type="text" name="enderecos[<?php echo e($j); ?>][cd_municipio]" value="<?php echo e($enderecos->cd_municipio); ?>" />                  </td>



                                                        <td> <a href="#"  class="btn btn-danger removerEndereco" title="Remover linha">  <span class="glyphicon glyphicon-remove"> </span></a> </td>

                                                    </div>                
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                                    <?php endif; ?>  


                                                    <?php if(empty($endereco)): ?>

                                                    <tr class="linhasEndereco">

                                                        <td> <input type="hidden" class="removidoEndereco" name="enderecos[-1][in_removidoEndereco]" value=0 /> 
                                                            <input type="hidden" name="enderecos[-1][nr_sequencia]" value="" />
                                                        </td>
                                                        <td> <input type="text" name="enderecos[-1][ds_endereco]" value="" />  </td>
                                                        <td> <input type="text" name="enderecos[-1][nr_endereco]" value="" /> </td>
                                                        <td> <input type="text" name="enderecos[-1][ds_bairro]" value="" /> </td>
                                                        <td> <input type="text" name="enderecos[-1][ds_complemento]" value="" /> </td>
                                                        <td> <input type="text" name="enderecos[-1][nr_cep]" value="" />                  </td>
                                                        <td> <input type="text" name="enderecos[-1][cd_municipio]" value="" />                  </td>


                                                        <td> <a href="#"  class="btn btn-danger removerEndereco" title="Remover linha">  <span class="glyphicon glyphicon-remove"> </span></a> </td>

                                                    </tr>


                                                    <?php endif; ?>


                                                </table>

                                            </div>
                                        </div>




                                        <div id="tab-3" class="tab-pane">
                                            <div class="panel-body">
                                                <input type="button" value="Adicionar" class="btn btn-primary adicionarFone" title="Adicionar item">
                                                <table class="tab-pane">
                                                    <th> </th>

                                                    <th><h5> DDD </h5> </th>
                                                    <th><h5> Fone </h5></th>
                                                    <th><h5>Pessoa Contato </h5></th>
                                                    <th> <h5> Email</h5></th>
                                                    <th><h5>Observações </h5></th>

                                                    <?php if(!empty($fone)): ?> 







                                                    <?php $__currentLoopData = $fone; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $fones): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>



                                                    <tr class="linhasFone">

                                                        <td>
                                                            <input type="hidden" class="removidoFone" name="fones[<?php echo e($i); ?>][in_removidoFone]" value=0 /> 
                                                            <input type="hidden" name="fones[<?php echo e($i); ?>][nr_sequencia]" value="<?php echo e($fones->nr_sequencia); ?>" />
                                                        </td>
                                                        <td>  <input class="form-control" type="text" name="fones[<?php echo e($i); ?>][nr_ddd]" value="<?php echo e($fones->nr_ddd); ?>" />  </td>
                                                        <td>  <input class="form-control" type="text" name="fones[<?php echo e($i); ?>][nr_fone]" value="<?php echo e($fones->nr_fone); ?>" /> </td>
                                                        <td>  <input class="form-control"type="text" name="fones[<?php echo e($i); ?>][nm_pessoa]" value="<?php echo e($fones->nm_pessoa); ?>" /> </td>
                                                        <td>  <input class="form-control" type="text" name="fones[<?php echo e($i); ?>][ds_email]" value="<?php echo e($fones->ds_email); ?>" /> </td>
                                                        <td>  <input class="form-control" type="text" name="fones[<?php echo e($i); ?>][ds_observa]" value="<?php echo e($fones->ds_observa); ?>" /></td>
                                                        <td> <a href="#"  class="btn btn-danger removerFone" title="Remover linha">  <span class="glyphicon glyphicon-remove"> </span></a> </td>

                                                    </tr>

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                                                    <?php endif; ?>  






                                                    <?php if(empty($fone)): ?>
                                                    <tr class="linhasFone">
                                                        <td>
                                                            <input type="hidden" class="removidoFone" name="fones[-1][in_removidoFone]" value=0 /> 
                                                            <input type="hidden" name="fones[-1][nr_sequencia]" value="" />
                                                        </td>
                                                        <td>  <input class="form-control" type="text" name="fones[-1][nr_ddd]" value="" />  </td>
                                                        <td>  <input class="form-control" type="text" name="fones[-1][nr_fone]" value="" /> </td>
                                                        <td>  <input class="form-control"type="text" name="fones[-1][nm_pessoa]" value="" /> </td>
                                                        <td>  <input class="form-control" type="text" name="fones[-1][ds_email]" value="" /> </td>
                                                        <td>  <input class="form-control" type="text" name="fones[-1][ds_observa]" value="" /></td>
                                                        <td> <a href="#"  class="btn btn-danger removerFone" title="Remover linha"><span class="glyphicon glyphicon-remove"> </span></a> </td>

                                                    </tr>


                                                    <?php endif; ?>


                                                </table>

                                            </div>
                                        </div>


                                        <div id="tab-4" class="tab-pane">
                                            <div class="panel-body">

                                                ppfpfpfpfp



                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <?php endif; ?>

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

    jQuery("#tipoPessoa").change(function(){
       // Aqui você tem o value selecionado assim que o usuário muda o option
       var id = jQuery(this).val();
       var tp_pessoa = $("#PJ").val();
       if (tp_pessoa == 1) {
   alert ("B"); 
   }else{alert ("A" );}
           
       
     
       
     //  var id1 = $("#nm_mae").val();
     //  alert (id1);
        //$("#nm_mae").val("");
    });

</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.painel.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>