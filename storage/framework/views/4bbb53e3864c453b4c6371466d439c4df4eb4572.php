<?php $__env->startSection('title', 'Atividades'); ?>

<?php $__env->startSection('content'); ?>

<h1> Cadastrar Funcao </h1>
<?php if(isset($organograma)): ?>
  <form class="form" method="post"  action="<?php echo e(route('organograma.update', $organograma->id)); ?>">
      <?php echo method_field('PUT'); ?>


    <?php else: ?>
    
    <form class="form" method="post"  action="<?php echo e(url('/painel/organograma/store')); ?>">
    <?php endif; ?>    
        <?php echo csrf_field(); ?>

        <div class="form-group">
            <input type="text" name= "funcao" class="form-control" value="<?php echo e(isset($organograma->funcao) ? $organograma->funcao : old('name')); ?>" >
        </div>
        <div class="form-group">
            <input type="text" name= "funcaopai" class="form-control" value="<?php echo e(isset($organograma->funcaopai) ? $organograma->funcaopai : old('horario')); ?>" >
        </div>
     

        <button class="btn btn-primary">Enviar</buton>
    </form>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.painel.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>