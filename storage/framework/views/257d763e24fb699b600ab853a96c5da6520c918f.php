<?php $__env->startSection('title', 'Atividades'); ?>

<?php $__env->startSection('content'); ?>

<h1> Cadastrar Atividades </h1>
<?php if(isset($atividade)): ?>
  <form class="form" method="post"  action="<?php echo e(route('atividade.update', $atividade->id)); ?>">
      <?php echo method_field('PUT'); ?>


    <?php else: ?>
    
    <form class="form" method="post"  action="<?php echo e(url('/painel/atividade/store')); ?>">
    <?php endif; ?>    
        <?php echo csrf_field(); ?>

        <div class="form-group">
            <input type="text" name= "data" class="form-control" value="<?php echo e(isset($atividade->data) ? $atividade->data : old('name')); ?>" >
        </div>
        <div class="form-group">
            <input type="text" name= "horario" class="form-control" value="<?php echo e(isset($atividade->horario) ? $atividade->horario : old('horario')); ?>" >
        </div>
        <div class="form-group">
            <input type="textarea" name= "atividade" class="form-control" value="<?php echo e(isset($atividade->atividade) ? $atividade->atividade : old('atividade')); ?>" >
        </div>

        <button class="btn btn-primary">Enviar</buton>
    </form>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.painel.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>