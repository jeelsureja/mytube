

<?php $__env->startSection('main'); ?>

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div align="right">
	<a href="<?php echo e(route('crud.create')); ?>" class="btn btn-success btn-sm">Add</a>
</div>
<br />
<!-- <?php if($message = Session::get('success')): ?>
<div class="alert alert-success">
	<p><?php echo e($message); ?></p>
</div>
<?php endif; ?> -->



	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<form action="<?php echo e(route('crud.destroy', $row->id)); ?>" method="post">

<!-- <div class="container">
<div class="col-md-4">
<div class="card" style="width:200px ">
<img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($row->image); ?>" class="img-thumbnail" width="200" />
<div class="card-body">
<h4 class="card-title"><?php echo e($row->first_name); ?></h4>
<p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>

</div>
</div>
</div>
</div> -->
<div class="col-md-4 col-sm-6">
<div class="item">
<div class="thumb">
<a href="img/second_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
<div class="hover-content">

</div>
</div></a>
<div class="image">
<img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($row->image); ?>" class="img-thumbnail" width="200" />
<h2><?php echo e($row->first_name); ?></h2>
<a href="<?php echo e(route('crud.show', $row->id)); ?>"  class = "btn btn-default"><span class="glyphicon glyphicon-play"></span> Play Video</a>
</div>
</div>
</div>
</div>
<!-- <a href="<?php echo e(route('crud.edit', $row->id)); ?>" class="btn btn-warning">Edit</a> -->
<!-- <?php echo csrf_field(); ?> -->
<!-- <?php echo method_field('DELETE'); ?> -->
<!-- <button type="submit" class="btn btn-danger">Delete</button> -->

</form>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel/Laravel-5.8-Crud-Tutorial-master/resources/views/index.blade.php ENDPATH**/ ?>