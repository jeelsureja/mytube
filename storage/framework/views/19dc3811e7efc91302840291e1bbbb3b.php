			
			<div class="top-navigation">
				<div class="t-menu">MENU</div>
				<div class="t-img">
					<img src="images/lines.png" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
				<div class="drop-navigation drop-navigation">
				
				  <ul class="nav nav-sidebar">
				 
					<li class="active"><a href="<?php echo e(route('crud.index')); ?>" class="home-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
					<?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li><a href="<?php echo e(route('category.show',$category->id)); ?>" class="user-icon"> <span class="glyphicon glyphicon-film" aria-hidden="true"></span> <?php echo e($category->category_name); ?></a></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
				</div>
				
					<div class="side-bottom">
						
						<div class="copyright">
							
						</div>
					</div>
				</div><?php /**PATH /var/www/html/projects/mytube/resources/views/assets/sidebar.blade.php ENDPATH**/ ?>