<?php $__env->startSection('title', 'Atividades'); ?>

<?php $__env->startSection('content'); ?>

<h1> Atividades </h1>
<a href="<?php echo e(url('/painel/atividade/create')); ?>" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"> </span>

 Cadastrar </a>
 <p></p>
 
<table class="table table-hover">
	<tr>
		<th> Data</th>
		<th> Horário</th>
		<th> Atividade</th>
		<th width="100px"> Ações</th>
		
	</tr>
	<?php $__currentLoopData = $orgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $org): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	<tr>
		<td> <?php echo e($org->data); ?> </td>
		<td> <?php echo e($org->horario); ?> </td>
		<td> <?php echo e($org->atividade); ?> </td>		
				
		<td> 
<!--		  <a href="<?php echo e(url("/painel/atividade/{$org->id}/edit")); ?>" class="action edit"> !-->
 		  <a href="<?php echo e(route('atividade.edit', $org->id)); ?>" class="action edit"> 
		  <span class = "glyphicon glyphicon-pencil"></span>
		  </a>
			
	          <a href="#" class="action delete"> 
		  <span class = "glyphicon glyphicon-trash"></span>
		  </a>
		  </td>

	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.painel.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>