<?php $__env->startSection('content'); ?>

<h1> Excluir Parceiro?</h1>


<?php $__currentLoopData = $parceiro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parceiros): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>


<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>


<p>Código: <?php echo e($parceiros->id); ?></p>
<p>Horario: <?php echo e($parceiros->nome); ?></p>

<hr>


 <?php echo Form::open(['route' => ['parceiro.destroy',$parceiros->id], 'method'=> 'DELETE']); ?>


<?php echo Form::submit ("Deletar Parceiro",  ['class'=> 'btn btn-danger']); ?>

<?php echo Form::close(); ?> 


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.painel.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>