<?php $__env->startSection('title', 'pessoa'); ?>

<?php $__env->startSection('content'); ?>








<h1>Parceiro </h1>
<a href="<?php echo e(url('/painel/pessoa/create')); ?>" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"> </span>

    Cadastrar </a>
<p></p>

<table id="example" class="display" cellspacing="0" width="100%">
    <tbody>
    <thead>
        <tr>
            <th> #</th>
            <th> Nome</th>


            <th width="100px"> Ações</th>

        </tr>
    </thead>
    <?php $__currentLoopData = $pessoas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pessoa): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

    <tr>
        <td> <?php echo e($pessoa->cd_parceiro); ?> </td>
        <td> <?php echo e($pessoa->nm_pessoa); ?> </td>


        <td> 


            <a href="<?php echo e(route('pessoa.edit', $pessoa->cd_parceiro)); ?>" class="action edit"> 
                <span class = "glyphicon glyphicon-pencil"></span>
            </a>

            <a href="<?php echo e(route('pessoa.show', $pessoa->cd_parceiro)); ?>" class="action delete"> 
                <span class = "glyphicon glyphicon-trash"></span>
            </a>
        </td>

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</tbody>
</table>
<?php echo $pessoas->links(); ?> 
<p>.</p>



<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables_themeroller.css">

<script  src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
<script  src="//cdn.datatables.net/1.10.16/js/dataTables.bootstrap.js"></script>
<script  src="//cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script  src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>





<script>
    $(document).ready(function(){
    $('#example').dataTable();
});
</script>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.painel.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>