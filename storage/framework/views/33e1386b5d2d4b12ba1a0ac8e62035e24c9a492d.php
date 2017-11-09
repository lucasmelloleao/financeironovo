<?php $__env->startSection('content'); ?>

<h1> Excluir lancamento?</h1>


<?php $__currentLoopData = $lancamento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lancamentos): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>


<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>


<p>Código: <?php echo e($lancamentos->id); ?></p>
<p>Parceiro: <?php echo e($lancamentos->parceiro); ?></p>
<p>Data: <?php echo e($lancamentos->data); ?></p>
<p>Valor: <?php echo e($lancamentos->valor); ?></p>

<hr>


 <?php echo Form::open(['route' => ['lancamento.destroy',$lancamentos->id], 'method'=> 'DELETE']); ?>


<?php echo Form::submit ("Deletar lancamento",  ['class'=> 'btn btn-danger']); ?>

<?php echo Form::close(); ?> 


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.painel.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>