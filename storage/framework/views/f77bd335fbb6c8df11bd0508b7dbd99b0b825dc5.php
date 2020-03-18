<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
            <?php echo $__env->make('assets.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="show-top-grids">
				<div class="col-sm-8 single-left">
					<div class="song">
						<div class="song-info">
            <h3><?php echo e($data->video_name); ?> </h3>
         
					</div>
						<div class="video-grid">
           
                <video controls crossorigin playsinline poster="<?php echo e(URL::to('/')); ?>/images/<?php echo e($data->image); ?>" height="200px" width="200px" id="player">
                <!-- Video files -->
                <source src="<?php echo e(URL::to('/')); ?>/videos/<?php echo e($data->video); ?>" type="video/mp4" size="576">
               
						</div>
					</div>
					<div class="song-grid-right">
						<div class="share">
							<h5>Share this</h5>
							<ul><br><br>
								<li>
								<form method="post" action="<?php echo e(route('like.store' )); ?>" >
								<?php echo csrf_field(); ?>
								<input type="hidden" name="id"value="<?php echo e($data->id); ?>">
								<input type="hidden" name="u_id"value="<?php echo e(Auth::user()->id); ?>">
							
								<button class="btn btn-success"><i class="fa fa-thumbs-o-up fa-3x" aria-hidden="true"></i></button>
								
								<h3><?php echo e($query); ?></h3>
								</form>
								</li>
								<li>
								<form action="<?php echo e(route('like.destroy', $data->id)); ?>" method="post">
								<?php echo csrf_field(); ?>
								<?php echo method_field('DELETE'); ?>
								<button class="btn btn-danger"><i class="fa fa-thumbs-o-down fa-3x" aria-hidden="true"></i></button>
							
								</form>
								</li>
								<li>
								<form method="post" action="<?php echo e(route('favourites.store' )); ?>" >
								<?php echo csrf_field(); ?>
								<input type="hidden" name="id"value="<?php echo e($data->id); ?>">
								<input type="hidden" name="u_id"value="<?php echo e(Auth::user()->id); ?>">
								<button class="btn btn-info"><i class="fa fa-heart-o fa-3x" aria-hidden="true"></i></button>
								</form>
								</li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="published">
            
							<div class="load_more">	
								<ul style="list-style: none;">
									<li>
                   					 <h3>Author:<?php echo e($result1->name); ?></h3>
                  
									</li>
									<li>
										<h3><?php echo e($data->video_des); ?></h3>
									
									</li>
								</ul>
							</div>
					</div>
					<div class="all-comments">
						<div class="all-comments-info">
							<a href="#">All Comments</a>
							<div class="box">
								<form method="post" action="<?php echo e(route('comment.store' )); ?>" >
								<?php echo csrf_field(); ?>
									<input type="hidden" class="textbox" name="vid" value="<?php echo e($data->id); ?>">
									<input type="hidden" class="textbox" name="u_id"value="<?php echo e(Auth::user()->id); ?>">
									<input type="text" value="<?php echo e(Auth::user()->name); ?>" disabled><br><br>		           					   
									<input type="text" value="<?php echo e(Auth::user()->email); ?>" disabled> 
									<textarea placeholder="Message" name="comment" required=" "></textarea>
									<input  type="submit" value="submit"  class=" btn btn-info">
									<div class="clearfix"> </div>
								</form>
							</div>
						</div>
						<div class="media-grids">
						<h3>All Comments</h3>
							<div class="media">
							<?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<h4>Name: <?php echo e($row3->name); ?></h4>
								<h4>Email: <?php echo e($row3->email); ?></h4>
								<div class="media-left">
									<a href="/profile">
									<img src="/profileimages/<?php echo e($row3->avatar); ?>" style="width:65px; height:65px;  border-radius:50%">
									</a>
								</div>
								<div class="media-body">
									
									
									<h4>Comment:<?php echo e($row3->comment); ?></h4>
									<h4>Commented on:<?php echo e($row3->updated_at); ?></h4>
									<!-- <span>View all posts by :<a href="#"> Admin </a></span> -->
									
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 single-right">
					<h3>Up Next</h3>
					<?php $__currentLoopData = $data2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="single-grid-right">
					
						<div class="single-right-grids">
						
							<div class="col-md-4 single-right-grid-left">
								<a href="<?php echo e(route('crud.show', $row->id)); ?>"><img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($row->image); ?>" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="<?php echo e(route('crud.show', $row->id)); ?>" class="title"> <?php echo e($row->video_name); ?></a>
								<!-- <p class="author"><a href="#" class="author"><?php echo e($result1->name); ?></a></p> -->
								<!-- <p class="views">2,114,200 views</p> -->
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<div class="col-md-4 single-right-grid-right">
					</div>
				</div>
				
				<div class="clearfix"> </div>
				
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
	
  </body>
  <?php echo $__env->make('assets.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</html><?php /**PATH /var/www/html/laravel/mytube/resources/views/view.blade.php ENDPATH**/ ?>