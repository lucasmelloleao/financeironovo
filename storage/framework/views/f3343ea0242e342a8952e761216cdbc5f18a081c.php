<?php $__env->startSection('content'); ?>

<h1> Excluir Despesa/Receita?</h1>


<?php $__currentLoopData = $despesareceita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $despesareceitas): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>


<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>


<p>Código: <?php echo e($despesareceitas->id); ?></p>
<p>Descrição: <?php echo e($despesareceitas->nome); ?></p>
<p>Tipo: <?php echo e($despesareceitas->debcred); ?></p>

<hr>


 <?php echo Form::open(['route' => ['despesareceita.destroy',$despesareceitas->id], 'method'=> 'DELETE']); ?>


<?php echo Form::submit ("Deletar DespesaReceita",  ['class'=> 'btn btn-danger']); ?>

<?php echo Form::close(); ?> 


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.painel.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>