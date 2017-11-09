<?php $__env->startSection('title', 'Atividades'); ?>

<?php $__env->startSection('content'); ?>

<h1> Organograma </h1>



    <a href="<?php echo e(url('/painel/organograma/create')); ?>"
       class="btn btn-primary">
        <span class="glyphicon glyphicon-plus"> </span> Cadastrar </a>



    <a href="<?php echo e(url('/organograma/')); ?>" 
        class="btn btn-primary"> 
        <span class="glyphicon glyphicon-plus"> </span> Gráfico </a>



<p></p>

<table class="table table-hover">
    <tr>
        <th>'#'</th>
        <th>Funcao</th>
        <th>Funcao Pai</th>

        <th width="100px"> Ações</th>

    </tr>
    <?php $__currentLoopData = $orgs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $org): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <tr>
        <td> <?php echo e($org->id); ?> </td>
        <td> <?php echo e($org->funcao); ?> </td>
        <td> <?php echo e($org->funcaopai); ?> </td>


        <td> 
            <a href="<?php echo e(url('/buscaorganograma',$org->id)); ?>" class="action buscar"> 
                <span class = "glyphicon glyphicon-eye-open"></span>
            </a>
            <!--		  <a href="<?php echo e(url("/painel/atividade/{$org->id}/edit")); ?>" class="action edit"> !-->
            <a href="<?php echo e(route('organograma.edit', $org->id)); ?>" class="action edit"> 
                <span class = "glyphicon glyphicon-pencil"></span>
            </a>

            <a href="<?php echo e(route('organograma.show', $org->id)); ?>" class="action delete"> 
                <span class = "glyphicon glyphicon-trash"></span>
            </a>


        </td>

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</table>
<?php echo $orgs->links(); ?> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>