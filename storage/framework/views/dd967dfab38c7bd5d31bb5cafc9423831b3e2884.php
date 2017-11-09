



        <table border="1" style="width:100%;">
                <thead>
                        <tr>
                                <th>Nome</th>
                                <th>Profissão</th>
                                <th>Estado</th>
                        </tr>
                </head>
                
                <tbody>
                       <?php $__currentLoopData = $arquivoArr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linha): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <tr>
                                      <?php $__currentLoopData = $linha; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $campo): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                <td><?php echo e($campo); ?> </td>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                </tbody>
        </table>


