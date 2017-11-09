<?php $__env->startSection('title', 'Main page'); ?>

<?php $__env->startSection('content'); ?>

    <div class="hero-unit">
  <h1>Cabeçalho</h1>
  <p>Linha de tag</p>
  <p>
    <a class="btn btn-primary btn-large">
      Aprenda mais
    </a>
  </p>
</div>


<div class="alert alert-primary" role="alert">
  This is a primary alert—check it out!
</div>

    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
                            <h1>
                                Bem Vindo ao Projeto Gestão Comercial
                            </h1>
                            <small>
                                Controle Exemplo
                            </small>
                            
                            
                             
        
                        </div>
                    </div>
                </div>
            </div>
            
           
            
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.painel.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>