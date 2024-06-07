
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><h1><img src="../images/logo.png" alt="" /></h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<!-- <div class="top-search">
				<form class="navbar-form navbar-right">
					<input type="text" class="form-control" placeholder="Search...">
					<input type="submit" value=" ">
				</form>
			</div> -->
			<div class="header-top-right">
      
				<div class="file">
	        <a  href="<?php echo e(route('crud.create')); ?>"><i class="fa fa-upload" aria-hidden="true"></i> Upload</a>
          
          
          <a href="<?php echo e(route('feedback.create')); ?>"><i class="fa fa-envelope" aria-hidden="true"></i> Feedback</a>
          <a href="<?php echo e(url('/profile')); ?>"><i class="fa fa-user" aria-hidden="true"></i> Profile</a>
				</div>
				
				<div class="signin">
					<?php if(auth()->guard()->guest()): ?>
					<a href="<?php echo e(route('login')); ?>" class="play-icon popup-with-zoom-anim"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a>
					<?php if(Route::has('register')): ?>	
					<a href="<?php echo e(route('register')); ?>" class="play-icon popup-with-zoom-anim"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a>	
					<?php endif; ?>
					<?php else: ?>
					
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i>
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            
							<?php endif; ?>
					
				</div>	

				

			
				
			

			</div>
				<div class="clearfix"> </div>
			</div>
        </div>
		<div class="clearfix"> </div>
      </div>
    </nav><?php /**PATH /var/www/html/projects/mytube/resources/views/assets/navbar.blade.php ENDPATH**/ ?>