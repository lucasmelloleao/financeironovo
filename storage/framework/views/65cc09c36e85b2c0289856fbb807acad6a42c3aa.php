<?php $__env->startSection('title', 'lancamento','parceiros','conta','despesareceita'); ?>
<?php $__env->startSection('content'); ?>





<?php if(isset($lancamento)): ?> 

<form class="form" method="post"  action="<?php echo e(route('lancamento.update', $lancamento->id)); ?>">
    <?php echo method_field('PUT'); ?>



    <?php else: ?>

    <form class="form" method="post"  action="<?php echo e(url('/painel/lancamento/store')); ?>">
        <?php endif; ?> 




        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Lançamentos</h5>

                    </div>
                    <div class="ibox-content">
                        <div class="row col-lg-3">

                            <?php echo csrf_field(); ?>



                            <?php if(isset($lancamento)): ?>                                 
                            
                             <div class="form-control col-lg-3">
                             
                             <div class="input-group date">
                                    <input name = "data" type="text" 
                                           value="<?php echo e(isset($lancamento->data) ? $lancamento->data : old('data')); ?>"
                                           class="form-control datepicker" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                                
                                <select name="parceiro" class="selectpicker" data-live-search="true">
                                    <?php $__currentLoopData = $parceiros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parceiro): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?> 
                                    <?php if($lancamento->parceiro == $parceiro->id): ?>
                                     <option selected value="<?php echo e($parceiro->id); ?>"><?php echo e($parceiro->nome); ?></option>
                                    <?php else: ?>                                       
                                     <option value="<?php echo e($parceiro->id); ?>"><?php echo e($parceiro->nome); ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>  
                                </select>

                             
                                
                            </div>

                            <select name="conta" class="selectpicker" data-live-search="true">
                                <?php $__currentLoopData = $contas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conta): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>  
                                <?php if($lancamento->conta == $conta->id): ?>	                         	
                                 <option selected value="<?php echo e($conta->id); ?>"><?php echo e($conta->nome); ?></option>
                                <?php else: ?> 	                       
                                 <option value="<?php echo e($conta->id); ?>"><?php echo e($conta->nome); ?></option>                                    
                                <?php endif; ?>      
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>  
                            </select>

                            <div class="form-group">
                             <select name="despesareceita" class="selectpicker" data-live-search="true">
                                <?php $__currentLoopData = $despesareceitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $despesareceita): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>  
                                  <?php if($lancamento->despesareceita == $despesareceita->id): ?>
                                    <option selected value="<?php echo e($despesareceita->id); ?>" ><?php echo e($despesareceita->nome); ?></option>
                                  <?php else: ?>
                                    <option          value="<?php echo e($despesareceita->id); ?>" ><?php echo e($despesareceita->nome); ?></option>
                                  <?php endif; ?> 


                                                                                      
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>  
                             </select>
                            </div>

                            <div class="form-group">
                            <input type="text" id="money" class="lg-col-12 form-control" name= "valor" placeholder="Valor do Lançamento"
                                   value="<?php echo e(number_format($lancamento->valor, 2, ',', '.')); ?>" >

                             </div>
                             
                            <div class="form-group">
                               <input type="text"  class="lg-col-12 form-control" name= "descricao" placeholder="Descrição" value="<?php echo e($lancamento->descricao); ?>" 
                            </div>

                          
                           <?php endif; ?>
                           
                           <?php if(!isset($lancamento)): ?>
                            <div class="form-group lg-col-6">  
                                <div class="input-group date">
                                    <input name = "data" type="text" 
                                           class="form-control datepicker" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                                <div class="form-group lg-col-6" >  </div>
                                <div class="form-group lg-col-6">  </div>
                            </div>
                            
                               <div class="form-group"> 
                                 <select name="parceiro" class="selectpicker" data-live-search="true">
                                 <?php $__currentLoopData = $parceiros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parceiro): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>  
                                 <option value="<?php echo e($parceiro->id); ?>"><?php echo e($parceiro->nome); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>  
                             </select>
                             
    
                            <select name="conta" class="selectpicker" data-live-search="true">
                                <?php $__currentLoopData = $contas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conta): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>  
                                <option value="<?php echo e($conta->id); ?>"><?php echo e($conta->nome); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>  
                            </select>
                           
                            <select name="despesareceita" class="selectpicker" data-live-search="true">
                                <?php $__currentLoopData = $despesareceitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $despesareceita): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>  
                                  <option value="<?php echo e($despesareceita->id); ?>" ><?php echo e($despesareceita->nome); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>  
                            </select>
                            <div class="form-group"> 
                              <div class="row">
                               <input type="text"  class="form-control" name= "valor" placeholder="Valor do Lançamento"   >
                               <input type="text"  class="form-control" name= "descricao" placeholder="Descrição" 
                              </div>
                            </div>
                            </div>


                            <?php endif; ?>




                            <div class="panel-body ">
                                <button class="btn btn-primary">Salvar</buton>
                            </div>
                        </div>

                    </div>
                </div>
            </div>





        </div>











    </form> 


    <script>

        $('.datepicker').datepicker({
            format: "d/m/Y"


        });</script>








    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.painel.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>