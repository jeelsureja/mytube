<div class="sidebar" data-color="white" data-active-color="dangar">
<div class="logo">
        <a href="<?php echo e(route('admindashboard.index')); ?>" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="admin_dist/img/logo-small.png">
          </div>
        </a>
        <a href="<?php echo e(route('admindashboard.index')); ?>" class="simple-text logo-normal">
          MyPlayVideo
          <div class="logo-image-big">
           
          </div>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="<?php echo e(route('admindashboard.index')); ?>">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="<?php echo e(route('admincategory.index')); ?>">
              <i class="nc-icon nc-tag-content"></i>
              <p>Category</p>
            </a>
          </li>

          <li>
            <a href="<?php echo e(route('usermanage.index')); ?>">
              <i class="nc-icon nc-single-02"></i>
              <p>User</p>
            </a>
          </li>

          <li>
            <a href="<?php echo e(route('adminfeedback.index')); ?>">
              <i class="nc-icon nc-email-85"></i>
              <p>Feedback</p>
            </a>
          </li>
         
        </ul>
      </div>
      </div><?php /**PATH /var/www/html/laravel/mytube/resources/views/adminassets/sidebar.blade.php ENDPATH**/ ?>