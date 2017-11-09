<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="img/favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portal - @yield('title') </title>


        <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
        <link rel="stylesheet" href="{!! asset('node_modules/bootstrap-select/dist/css/bootstrap-select.min.css') !!}" />
        <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">        
 
      
         
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

      

    <script src="{!! asset('node_modules/bootstrap-select/dist/js/bootstrap-select.min.js')    !!}"></script>
    <script src="{!! asset('node_modules/bootstrap-select/dist/js/i18n/defaults-pt_BR.min.js') !!}"></script>
    <script scr="{!! asset('node_modules/bootstrap-datepicker/js/bootstrap-datepicker.js')     !!} "></script>
     





<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables_themeroller.css">




   
 


    
    </head>
    <body>

        <!-- Wrapper-->
        <div id="wrapper">

            <!-- Navigation -->
            @include('layouts.painel.navigation')

            <!-- Page wraper -->
            <div id="page-wrapper" class="gray-bg">

                <!-- Page wrapper -->
                @include('layouts.painel.topnavbar')

                <!-- Main view  -->
                @yield('content')

                <!-- Footer -->
                @include('layouts.painel.footer')

            </div>
            <!-- End page wrapper-->

        </div>
        <!-- End wrapper-->
        
            <script src="{!! asset('js/app.js') !!}"     type="text/javascript"></script>


<script  src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
<script  src="http://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.js"></script>
<script  src="http://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script  src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script  src="//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"></script>
        
          
     



        @section('scripts')
        @show

    </body>
</html>
