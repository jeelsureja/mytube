
<!DOCTYPE HTML>
<html>
<head>
<title>My Play Video</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Play Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<?php echo $__env->make('assets.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
  <body>

    <?php echo $__env->make('assets.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
        <div class="col-sm-3 col-md-2 sidebar">
			<?php echo $__env->make('withoutlogin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
       
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="main-grids">
				<div class="recommended">
			
					<div class="recommended-grids">
				
						<div class="recommended-info">
							<!-- <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<h3><?php echo e($category->category_name); ?></h3>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
						</div>
						<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-md-3 resent-grid recommended-grid">
						
							<div class="resent-grid-img recommended-grid-img">
								<a href="<?php echo e(route('videoplay.show', $row->id)); ?>"><img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($row->image); ?>" alt="" width="200px" height="200px"/></a>
								
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><?php echo e($row->video_name); ?></h5>
							
							</div>
						</div>
					
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<div class="clearfix"> </div>
					</div>
					
				</div>
				
			</div>
			
			
		</div>
		<div class="clearfix"> </div>
	<div class="drop-menu">
		<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
		  <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
		</ul>
	</div>
		<?php echo $__env->make('assets.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</htm><?php /**PATH /var/www/html/laravel/mytube/resources/views/withoutlogin/home.blade.php ENDPATH**/ ?>