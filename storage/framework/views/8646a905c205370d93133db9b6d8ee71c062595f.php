
<!DOCTYPE HTML>
<html>
<head>
<title>My Play Video</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Play Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap -->
<link href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
<link href="<?php echo e(URL::asset('css/dashboard.css')); ?>" rel="stylesheet">
<!-- Custom Theme files -->
<link href="<?php echo e(URL::asset('css/style.css')); ?>" rel='stylesheet' type='text/css' media="all" />
<script src="<?php echo e(URL::asset('js/jquery-1.11.1.min.js')); ?>"></script>
<script src="https://use.fontawesome.com/fe459689b4.js"></script>

<!--start-smoth-scrolling-->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- //fonts -->
<style>
.footer {
position: fixed;
left: 0;
bottom: 0;
width: 100%;
color: white;
text-align: center;
}
</style>
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
								<div class="time small-time">
									<p>2:34</p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><?php echo e($row->video_name); ?></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
									<li class="right-list"><p class="views views-info">2,114,200 views</p></li>
								</ul>
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
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>
</htm><?php /**PATH /var/www/html/laravel/mytube/resources/views/withoutlogin/home.blade.php ENDPATH**/ ?>