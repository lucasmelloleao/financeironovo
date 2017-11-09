<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">Usuário</strong>
                            </span> <span class="text-muted text-xs block">Exemplo <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="<?php echo e(isActiveRoute('painel')); ?>">
                <a href="<?php echo e(url('/painel')); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Início</span></a>
            </li>
 
		<li> 
		 <a href="<?php echo e(url('organograma')); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Organograma</span> </a>
		</li>
		
		<li> 
		 <a href="<?php echo e(url('painel/atividade')); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Atividades</span> </a>
		</li>


        </ul>


    </div>
</nav>
