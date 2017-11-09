
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="img/favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portal - <?php echo $__env->yieldContent('title'); ?> </title>


        <link rel="stylesheet" href="<?php echo asset('css/vendor.css'); ?>" />
        <link rel="stylesheet" href="<?php echo asset('node_modules/bootstrap-select/dist/css/bootstrap-select.min.css'); ?>" />
        <link rel="stylesheet" href="<?php echo asset('css/app.css'); ?>" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">        
 
      
         
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

      

    <script src="<?php echo asset('node_modules/bootstrap-select/dist/js/bootstrap-select.min.js'); ?>"></script>
    <script src="<?php echo asset('node_modules/bootstrap-select/dist/js/i18n/defaults-pt_BR.min.js'); ?>"></script>
    <script scr="<?php echo asset('node_modules/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?> "></script>
     


        




<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables_themeroller.css">




   
 


    
    </head>
    <body>

        <!-- Wrapper-->
        <div id="wrapper">

            <!-- Navigation -->
            <?php echo $__env->make('layouts.painel.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- Page wraper -->
            <div id="page-wrapper" class="gray-bg">

                <!-- Page wrapper -->
                <?php echo $__env->make('layouts.painel.topnavbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <!-- Main view  -->
                <?php echo $__env->yieldContent('content'); ?>

                <!-- Footer -->
                <?php echo $__env->make('layouts.painel.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            </div>
            <!-- End page wrapper-->

        </div>
        <!-- End wrapper-->
        
            <script src="<?php echo asset('js/app.js'); ?>"     type="text/javascript"></script>

<script  src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
<script  src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.js"></script>
<script  src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script  src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script  src="https://cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"></script>

          
     



        <?php $__env->startSection('scripts'); ?>
        <?php echo $__env->yieldSection(); ?>

    </body>
</html>
