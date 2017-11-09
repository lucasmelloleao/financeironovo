<?php $__env->startSection('content'); ?>

<h1> Excluir Atividade?</h1>
<p>Data: <?php echo e($atividade->data); ?></p>
<p>Horario: <?php echo e($atividade->horario); ?></p>
<p>Horario: <?php echo e($atividade->atividade); ?></p>
<hr>


 <?php echo Form::open(['route' => ['atividade.destroy',$atividade->id], 'method'=> 'DELETE']); ?>


<?php echo Form::submit ("Deletar atividade",  ['class'=> 'btn btn-danger']); ?>

<?php echo Form::close(); ?> 


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.painel.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>