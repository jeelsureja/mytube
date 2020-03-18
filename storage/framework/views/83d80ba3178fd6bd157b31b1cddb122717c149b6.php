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

                <!--feedbackform-->
                <div><br><br><br>
            <div class="row" style="padding-left:20px;">
            <div class="col-sm-12">
            <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
            <div>
              <h2>Feedback</h2>
            </div>
            <form method="post" action="<?php echo e(route('feedback.store')); ?>">
            <?php echo csrf_field(); ?>
              <input type="hidden" data-form-email="true">
              <div class="form-group">
                <input type="hidden" class="form-control" name="u_id" required="" value="<?php echo e(Auth::user()->id); ?>">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" value="<?php echo e(Auth::user()->name); ?>"disabled>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" value="<?php echo e(Auth::user()->email); ?>" disabled>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" placeholder="Message" rows="7" required=""></textarea>
              </div>
              <div>
                <button type="submit" class="btn btn-lg btn-danger">CONTACT US</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
              
  </body>
      <?php echo $__env->make('assets.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</html><?php /**PATH /var/www/html/laravel/mytube/resources/views/feedback.blade.php ENDPATH**/ ?>