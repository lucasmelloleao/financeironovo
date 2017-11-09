<?php $__env->startSection('content'); ?>

<h1 class="font-bold text-center">  <?php echo e($organograma->funcao); ?></h1>
<hr>

<h2 class="text-center">  Objetivos </h2>
<p></p>
<p></p>


<div class="col-lg-12 text-justify">

    Em seu livro "lições de vida para famílias", Maria Tereza Maldonado enumera diversas sugestões que têm por objetivo auxiliar as pessoas a construir uma família harmoniosa, saudável e feliz. Entre elas podemos ressaltar as seguintes: Primeira: escute com atenção antes de falar; tente entender o que a pessoa realmente está dizendo, que pode ser muito diferente do que você acha que ela quer dizer. Segunda: gentileza e boas maneiras são essenciais para construir um bom convívio familiar. Terceira: aumente as opções de atividades prazerosas com seus familiares: conversar, brincar e jogar, ver bons filmes, passear. Quarta: demonstre seu interesse em saber o que seus familiares estão fazendo, experimentando ou descobrindo na vida. 
<hr> 
</div>
<p></p>
<p></p>

<h2 class="text-center">  Trabalhadores </h2>

<div class="col-lg-4">
    <div class="contact-box">
        <a ui-sref="profile">
            <div class="col-sm-4">
                <div class="text-center">
                    <img alt="image" class="img-circle m-t-xs img-responsive" src="../img/a2.jpg">

                    <div class="m-t-xs font-bold">Graphics designer</div>
                </div>
            </div>
            <div class="col-sm-8">
                <h3><strong>John Smith</strong></h3>

                <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                <address>
                    <strong>Twitter, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
            </div>
            <div class="clearfix"></div>
        </a>
    </div>
</div>

<div class="col-lg-4">
    <div class="contact-box">
        <a ui-sref="profile">
            <div class="col-sm-4">
                <div class="text-center">
                    <img alt="image" class="img-circle m-t-xs img-responsive" src="../img/a1.jpg">

                    <div class="m-t-xs font-bold">CEO</div>
                </div>
            </div>
            <div class="col-sm-8">
                <h3><strong>Alex Johnatan</strong></h3>

                <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                <address>
                    <strong>Twitter, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
            </div>
            <div class="clearfix"></div>
        </a>
    </div>
</div>


<div class="col-lg-4">
    <div class="contact-box">
        <a ui-sref="profile">
            <div class="col-sm-4">
                <div class="text-center">
                    <img alt="image" class="img-circle m-t-xs img-responsive" src="../img/a3.jpg">

                    <div class="m-t-xs font-bold">Marketing manager</div>
                </div>
            </div>
            <div class="col-sm-8">
                <h3><strong>Monica Smith</strong></h3>

                <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                <address>
                    <strong>Twitter, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
            </div>
            <div class="clearfix"></div>
        </a>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>