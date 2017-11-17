<?php $__env->startSection('title', 'lancamento'); ?>

<?php $__env->startSection('content'); ?>





  <style type="text/css">
    
td.bgVerde {

  color: #07CC36;
}
td.bgVermelho {

  color: #c12536;
}


  </style>







<h1>lancamento </h1>
<a href="<?php echo e(url('/painel/lancamento/create')); ?>" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"> </span>

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
    <?php $__currentLoopData = $lancamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lancamento): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

    <tr>


        <td> <?php echo e($lancamento->data); ?> </td>
        <td> <?php echo e($lancamento->relParceiro->nome); ?> </td>
        <td> <?php echo e($lancamento->relConta->nome); ?> </td>
        <td> <?php echo e($lancamento->relDespesareceita->nome); ?> </td>
        <td> <?php echo e($lancamento->descricao); ?>         </td>
        <?php if($lancamento->valor > 0): ?>      
           <td class="bgVerde">  <?php echo e(number_format($lancamento->valor, 2, ',', '.')); ?> </td>
        <?php else: ?>
           <td class="bgVermelho">  <?php echo e(number_format($lancamento->valor, 2, ',', '.')); ?> </td>
        <?php endif; ?>        
      







        <td> 


            <a href="<?php echo e(route('lancamento.edit', $lancamento->id)); ?>" class="action edit"> 
                <span class = "glyphicon glyphicon-pencil"></span>
            </a>

            <a href="<?php echo e(route('lancamento.show', $lancamento->id)); ?>" class="action delete"> 
                <span class = "glyphicon glyphicon-trash"></span>
            </a>
        </td>

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</tbody>
</table>

Valor dos lancamentos <?php echo e(number_format($a, 2, ',', '.')); ?> 


<p>.</p>
<p>.</p>

<p>.</p>





	
<script>
/* global $ */
   $(document).ready(function() {
    $('#tabela').DataTable( {
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"
        }
    } );
} );
</script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.painel.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>