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
<link href="<?php echo e(URL::asset('../css/bootstrap.min.css')); ?>" rel='stylesheet' type='text/css' media="all" />

<!-- //bootstrap -->
<link href="<?php echo e(URL::asset('../css/dashboard.css')); ?>" rel="stylesheet">
<!-- Custom Theme files -->
<link href="<?php echo e(URL::asset('../css/style.css')); ?>" rel='stylesheet' type='text/css' media="all" />
<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
<script src="https://use.fontawesome.com/fe459689b4.js"></script>


<!--start-smoth-scrolling-->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- //fonts -->
<style>
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file1 {
    position: relative;
    overflow: hidden;
   
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file1 input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
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
            <?php echo $__env->make('assets.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
             </div>

                <!--feedbackform-->
                <div><br><br><br>
            <div class="row" style="padding-left:20px;">
            <div class="col-sm-12">
            <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
            <div>
              <h2>Profile</h2>
              <div class="container emp-profile">
            
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="/profileimages/<?php echo e($user->avatar); ?>" style="width:150px; height:150px; border-radius:50%; "/><br><br>
                            <div class="form-group">
                            <h3>Profile Image</h3><br>
                                <h4>Update Profile Image</h4>
                                <form enctype="multipart/form-data" action="/profile" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="file" class="form-control" name="avatar" required=""/><br>
                                
                                <input type="submit" class=" btn btn-sm btn-info">
                                </form>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                        <h3>
                                       Name:<?php echo e(Auth::user()->name); ?>'s Profile
                                    </h3>
                                    <h3>
                                    Email:<?php echo e(Auth::user()->email); ?>

                                    </h3>
                                 
                                    
                                    
                                  
                           
                        </div><br>
                        <a href="<?php echo e(route('video.index')); ?>" type="button" class="btn btn-info">My Videos</a>
                        <a href="<?php echo e(route('favourites.index')); ?>" type="button" class="btn btn-info">Favourites Videos</a>
                    </div>
                    
                    <div class="col-md-2">
                   
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                       
                    </div>
                  
                </div>
               
        </div>
            </div>
                
          </div>
        </div>
      </div>
    </div>
  </div>
                <!--main-->

                            
                <!--//main-->
           
  </body>

</html><?php /**PATH /var/www/html/laravel/mytube/resources/views/userprofile.blade.php ENDPATH**/ ?>