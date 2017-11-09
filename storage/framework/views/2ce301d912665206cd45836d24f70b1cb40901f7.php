<?php $__env->startSection('title', 'Despesas e Receitas'); ?>

<?php $__env->startSection('content'); ?>








<h1>Despesareceita </h1>
<a href="<?php echo e(url('/painel/despesareceita/create')); ?>" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"> </span>

    Cadastrar </a>
<p></p>

<table id="tabela" class="display" cellspacing="0" width="100%">
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
    
      <?php $__currentLoopData = $despesareceitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $despesareceita): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

      <tr>
        <td> <?php echo e($despesareceita->id); ?> </td>
        <td> <?php echo e($despesareceita->nome); ?> </td>
        <td> <?php echo e($despesareceita->debcred); ?> </td>


        <td> 


            <a href="<?php echo e(route('despesareceita.edit', $despesareceita->id)); ?>" class="action edit"> <span class = "glyphicon glyphicon-pencil"></span> </a>
            <a href="<?php echo e(route('despesareceita.show', $despesareceita->id)); ?>" class="action delete">  <span class = "glyphicon glyphicon-trash"></span> </a> 
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
  </tbody>
</table>




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

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.painel.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>