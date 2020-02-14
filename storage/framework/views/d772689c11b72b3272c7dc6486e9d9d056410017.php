

<?php $__env->startSection('main'); ?>

<div class="jumbotron text-center">
	<div align="right">
		<a href="<?php echo e(route('crud.index')); ?>" class="btn btn-default">Back</a>
	</div>
	<br />
	<!-- <img src="<?php echo e(URL::to('/')); ?>/images/<?php echo e($data->image); ?>" class="img-thumbnail" /> -->
	<video
    id="my-video"
    class="video-js"
    controls
    preload="auto"
    width="640"
    height="264"
    poster="<?php echo e(URL::to('/')); ?>/images/<?php echo e($data->image); ?>"
    data-setup="{}"
  >
    <source src="<?php echo e(URL::to('/')); ?>/videos/<?php echo e($data->video); ?>" type="video/mp4" />
    <source src="<?php echo e(URL::to('/')); ?>/videos/<?php echo e($data->video); ?>" type="video/webm" />
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a
      web browser that
      <a href="https://videojs.com/html5-video-support/" target="_blank"
        >supports HTML5 video</a
      >
    </p>
  </video>

  <script src="https://vjs.zencdn.net/7.6.6/video.js"></script>
  <iframe src="<?php echo e(URL::to('/')); ?>/videos/<?php echo e($data->video); ?>" width="750px" height="300px"></iframe>
	<h3>First Name - <?php echo e($data->first_name); ?> </h3>
	<h3>Last Name - <?php echo e($data->last_name); ?></h3>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel/Laravel-5.8-Crud-Tutorial-master/resources/views/view.blade.php ENDPATH**/ ?>