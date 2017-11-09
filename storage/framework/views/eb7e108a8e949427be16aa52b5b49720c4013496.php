

<h1> teste </h1>
<table>
	<tr>
		<th> ' # '</th>
		<th> Descricao</th>
	</tr>
	<?php $__currentLoopData = $orgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $org): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	<tr>
		<td> <?php echo e($org->id); ?> </td>
		<td> <?php echo e($org->funcao); ?> </td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</table>

