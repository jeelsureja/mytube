<!DOCTYPE HTML>
<html>
<head>
<title>My Play Video</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Play Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    
    @include('assets.head')

</head>
  <body>
            @include('assets.navbar')

            <div class="col-sm-3 col-md-2 sidebar">
            @include('assets.sidebar')
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
                            <img src="/profileimages/{{ $user->avatar }}" style="width:150px; height:150px; border-radius:50%; "/><br><br>
                            <div class="form-group">
                            <h3>Profile Image</h3><br>
                                <h4>Update Profile Image</h4>
                                <form enctype="multipart/form-data" action="/profile" method="POST">
                                @csrf
                                <input type="file" class="form-control" name="avatar" required=""/><br>
                                
                                <input type="submit" value="Upload" class=" btn btn-sm btn-info" style="font-size:25px;">
                                </form>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                        <h3>
                                       Name:{{Auth::user()->name}}'s Profile
                                    </h3>
                                    <h3>
                                    Email:{{Auth::user()->email}}
                                    </h3>
                                 
                                    
                                    
                                  
                           
                        </div><br>
                        <a href="{{ route('video.index') }}" type="button" class="btn btn-info" style="font-size:20px;">My Videos</a>
                        &nbsp;&nbsp;&nbsp;<a href="{{ route('favourites.index') }}" type="button" class="btn btn-info" style="font-size:20px;">Favourites Videos</a>
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
           
  </body>
        @include('assets.script')
</html>