<?php $__env->startSection('content'); ?>

<h1> Excluir Pessoa?</h1>


<?php $__currentLoopData = $pessoa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pessoas): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>


<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>


<p>Código: <?php echo e($pessoas->cd_parceiro); ?></p>
<p>Horario: <?php echo e($pessoas->nm_pessoa); ?></p>

<hr>


 <?php echo Form::open(['route' => ['pessoa.destroy',$pessoas->cd_parceiro], 'method'=> 'DELETE']); ?>


<?php echo Form::submit ("Deletar Pessoa",  ['class'=> 'btn btn-danger']); ?>

<?php echo Form::close(); ?> 


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.painel.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>