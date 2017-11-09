<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="img/favicon.png">
    <title>Portal - @yield('title') </title>


    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />

</head>
<body>
<br><br>

            <!-- Main view  -->
            @yield('content')



<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>

@section('scripts')
@show

</body>
</html>
