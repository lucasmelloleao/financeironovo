<?php $__env->startSection('title', 'Organograma'); ?>

<?php $__env->startSection('content'); ?>

<h1> teste </h1>
<table>
	<tr>
		<th> ' # '</th>
		<th> Eventos</th>
	</tr>
	<?php $__currentLoopData = $orgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $org): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	<tr>
		<td> <?php echo e($org->id); ?> </td>
		<td> <?php echo e($org->nome); ?> </td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>