<div class="row border-bottom">
    <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
<!--
            <form role="search" class="navbar-form-custom" method="post" action="/">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search" />
                </div>
            </form> 
    !--> 
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
              
                
                
	<a href="<?php echo e(route('logout')); ?>"
		onclick="event.preventDefault();
		document.getElementById('logout-form').submit();">
		Logout <span class="fa fa-sign-out">
	</a>
		
	<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
		<?php echo e(csrf_field()); ?>

	</form>
               

                </a>
            </li>
        </ul>
    </nav>
</div>
