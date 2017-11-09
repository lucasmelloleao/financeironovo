<?php $__env->startSection('content'); ?>

<h1> Excluir Item do Organograma?</h1>
<p>Id: <?php echo e($organograma->id); ?></p>
<p>Funcao: <?php echo e($organograma->funcao); ?></p>
<p>FuncaoPai: <?php echo e($organograma->funcaopai); ?></p>
<hr>


 <?php echo Form::open(['route' => ['organograma.destroy',$organograma->id], 'method'=> 'DELETE']); ?>


<?php echo Form::submit ("Deletar organograma",  ['class'=> 'btn btn-danger']); ?>

<?php echo Form::close(); ?> 


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>