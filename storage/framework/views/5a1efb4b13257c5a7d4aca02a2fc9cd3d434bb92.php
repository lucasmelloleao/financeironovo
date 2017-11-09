<?php
$servidor = "localhost";
$usuario = "root";
$senha = "123456";
$database = "bdsem";



$conn = mysqli_connect($servidor, $usuario, $senha, $database);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = "select id as id, funcao as cargo , id as idcargo,  funcaopai as pai from funcaosem";

// $result = mysqli_query($conn,$query);


$result = mysqli_query($conn, $query) or die("Error: " . mysqli_error($conn));


while ($r = mysqli_fetch_array($result)) {

    $row[] = $r;
}



$a = json_encode($row);


mysqli_close($conn);
?>


<html>
    <link rel="stylesheet" href="<?php echo asset('css/vendor.css'); ?>" />
 <body style="background:#2f4050">
    <div class="wrapper wrapper-content animated fadeInRight">


        <link rel="stylesheet" href="css/main.css">

        <!--[if lt IE 9]>
              <script src="browsers/IE/html5shiv.min.js"></script>
        <![endif]-->
        <noscript>
        <style type="text/css">
            .noscript-aviso{
                text-indent: 16px;
                font-size: 24px;
                padding: 20px;
            }
            .noscript-aviso a {
                color: #CCC;
                text-decoration: underline;
            }
            .organograma{
                display: none;
            }
        </style>
        </noscript>



        <header  class="wrap-titulo-pagina" style="background:#2f4050">
            <a  href="<?php echo e(url('/painel')); ?>"> <span class="glyphicon glyphicon-arrow-left"><strong>  Voltar ao Sistema</strong></span></a>
            <h1>Organograma SEM</h1>
        </header>

       
            <section id="organograma-exemplo" class="organograma" >
                <ul id="ul-0" class="organograma-exemplo-base">
                </ul>
                <!-- Não deixar espaço vazio dentro -->
            </section>

            <input type="hidden" id="conteudo" name="conteudo" value=' <?php echo $a ?> '> 

        </body>
        <noscript>

        <p class="noscript-aviso">O JavaScript tem que ser ativado para que você possa visualizar esta página corretamente. Porém, aparentemente, o JavaScript está desativado ou é incompatível com o seu navegador. Ative o JavaScript alterando as opções do navegador e <a href="http://www.yuricamara.com.br/">tente novamente</a>.</p>
        </noscript>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script>
!window.jQuery && document.write('<script src="js/jquery-1.11.1.min.js"><\/script>')
        </script>
        <script src="js/main.js"></script>



</html>