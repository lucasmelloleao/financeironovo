<?php $__env->startSection('title', 'parceiro'); ?>

<?php $__env->startSection('content'); ?>








<h1>Parceiro XXXX </h1>
<a href="<?php echo e(url('/painel/parceiro/create')); ?>" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"> </span>

    Cadastrar </a>
<p></p>

<table id="example" class="display" cellspacing="0" width="100%">

    <thead>
        <tr>
            <th> #</th>
            <th> Nome</th>


            <th width="100px"> Ações</th>

        </tr>
    </thead>
    
     <tfoot>
        <tr>
            <th> #</th>
            <th> Nome</th>


            <th width="100px"> Ações</th>

        </tr>
    </tfoot>
    <tbody>
    <?php $__currentLoopData = $parceiros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parceiro): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

    <tr>
        <td> <?php echo e($parceiro->id); ?> </td>
        <td> <?php echo e($parceiro->nome); ?> </td>


        <td> 


            <a href="<?php echo e(route('parceiro.edit', $parceiro->id)); ?>" class="action edit"> 
                <span class = "glyphicon glyphicon-pencil"></span>
            </a>

            <a href="<?php echo e(route('parceiro.show', $parceiro->id)); ?>" class="action delete"> 
                <span class = "glyphicon glyphicon-trash"></span>
            </a>
        </td>

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</tbody>
</table>
<?php echo $parceiros->links(); ?> 
<p>.</p>









<script>


   $(document).ready(function() {
    $('#example').DataTable( {
        "language": {
            
            "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"
        }
    } );
} );
</script>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.painel.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>