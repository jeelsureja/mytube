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
		<!-- upload -->
		<div class="upload">
			<!-- container -->
			<div class="container">
			<?php if($errors->any()): ?>
<div class="alert alert-danger">
  <ul>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($error); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>
</div>
<?php endif; ?>
<div align="right">
  <a href="<?php echo e(route('crud.index')); ?>" class="btn btn-default">Back</a>
</div>

<form method="post" action="<?php echo e(route('crud.store')); ?>" enctype="multipart/form-data">

  <?php echo csrf_field(); ?>
  <div class="form-group">
    <label class="col-md-4 text-right" style="font-size:20px;">Enter Video Name</label>
    <div class="col-md-8">
      <input type="text" name="video_name" class="form-control input-lg" />
    </div>
  </div>
  <br />
  <br />
  <br />
  <br />
  <br />
  <div class="form-group">
    <label class="col-md-4 text-right" style="font-size:20px;">Enter Video Description</label>
    <div class="col-md-8">
      <input type="text" name="video_des" class="form-control input-lg" />
    </div>
  </div>
  <br />
  <br />
  <br />
  <div class="form-group">
		<div class="col-md-8">
			<input type="hidden" name="u_id" class="form-control input-lg" value="<?php echo e(Auth::user()->id); ?>" />
		</div>
	</div>
  <div class="form-group">
    <label class="col-md-4 text-right" style="font-size:20px;">Category Name:</label>
    <div class="col-md-8">
	<select class="form-control" name="category_id">
        <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    	<option value="<?php echo e($category->id); ?>">
        <?php echo e($category->category_name); ?>

        </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    </div>
  </div>
  <br />
  <br />
  <br />
<br />
  <div class="form-group">
    <label class="col-md-4 text-right" style="font-size:20px;">Select Thumbnail Image</label>
    <div class="col-md-8">
      <input type="file" name="image" class="form-control"/>
    </div>
  </div>
  
  <br /><br /><br />
  <div class="form-group">
    <label class="col-md-4 text-right" style="font-size:20px;">Select Video</label>
    <div class="col-md-8">
      <input type="file" name="video" class="form-control"/>
    </div>
  </div>
  <br /><br /><br />
  <div class="form-group text-center">
    <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
  </div>

</form>
			</div>
			<!-- //container -->
		</div>
		<!-- //upload -->
		
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
</html><?php /**PATH /var/www/html/projects/mytube/resources/views/create.blade.php ENDPATH**/ ?>