<?php $__env->startSection('title', 'conta'); ?>

<?php $__env->startSection('content'); ?>








<h1>Conta </h1>
<a href="<?php echo e(url('/painel/conta/create')); ?>" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"> </span>

    Cadastrar </a>
<p></p>

<table id="tabelax" class="display" cellspacing="0" width="100%">
    <tbody>
    <thead>
        <tr>
            <th> #</th>
            <th> Nome</th>
            <th> Tipo Conta</th>


            <th width="100px"> Ações</th>

        </tr>
    </thead>
    <?php $__currentLoopData = $contas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conta): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

    <tr>
        <td> <?php echo e($conta->id); ?> </td>
        <td> <?php echo e($conta->nome); ?> </td>
        <td> <?php echo e($conta->tipo); ?> </td>


        <td> 


            <a href="<?php echo e(route('conta.edit', $conta->id)); ?>" class="action edit"> 
                <span class = "glyphicon glyphicon-pencil"></span>
            </a>

            <a href="<?php echo e(route('conta.show', $conta->id)); ?>" class="action delete"> 
                <span class = "glyphicon glyphicon-trash"></span>
            </a>
        </td>

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</tbody>
</table>
<?php echo $contas->links(); ?> 
<p>.</p>


	
<script>

   $(document).ready(function() {
    $('#tabelax').DataTable( {
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"
        }
    } );
} );
</script>



<?php $__env->stopSection(); ?>

	
<?php echo $__env->make('layouts.painel.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>