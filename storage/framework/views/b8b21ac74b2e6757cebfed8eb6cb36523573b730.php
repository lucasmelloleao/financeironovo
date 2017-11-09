<?php $__env->startSection('title', 'pessoas'); ?>

<?php $__env->startSection('content'); ?>

<h1>Pessoas </h1>
<a href="<?php echo e(url('/painel/pessoa/create')); ?>" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"> </span>

 Cadastrar </a>
 <p></p>
 
<table class="table table-hover">
	<tr>
		<th> #</th>
		<th> Nome</th>
		<th> Nascimento</th>
		
		<th width="100px"> Ações</th>
		
	</tr>
	<?php $__currentLoopData = $orgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $org): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	
	<tr>
		<td> <?php echo e($org->cd_parceiro); ?> </td>
		<td> <?php echo e($org->nm_pessoa); ?> </td>
		<td> <?php echo e($org->dt_nascimento); ?> </td>		
				
		<td> 


 		  <a href="<?php echo e(route('pessoa.edit', $org->cd_parceiro)); ?>" class="action edit"> 
		  <span class = "glyphicon glyphicon-pencil"></span>
		  </a>
			
	          <a href="<?php echo e(route('pessoa.show', $org->cd_parceiro)); ?>" class="action delete"> 
		  <span class = "glyphicon glyphicon-trash"></span>
		  </a>
		  </td>

	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</table>
 <?php echo $orgs->links(); ?> 



                                
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.painel.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>