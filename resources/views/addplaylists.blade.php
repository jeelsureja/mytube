<!DOCTYPE HTML>
<html>
<head>
<title>My Play a Entertainment Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Play Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap -->
<link href="{{URL::asset('../css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
<link href="{{URL::asset('../css/dashboard.css')}}" rel="stylesheet">
<!-- Custom Theme files -->
<link href="{{URL::asset('../css/style.css')}}" rel='stylesheet' type='text/css' media="all" />
<script src="{{URL::asset('../js/jquery-1.11.1.min.js')}}"></script>

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
              <h2>Create Playlists</h2>
            </div>
            <form>
        
              <input type="hidden" data-form-email="true">
             
              <div class="form-group">
                <input type="text" class="form-control" name="title" required="">
              </div>
             
              
              <div>
                <button type="submit" class="btn btn-lg btn-danger">Create Playlists</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
                <!--//feedbackform-->

             <!-- footer -->
			<div class="footer">
				<div class="footer-grids">
					<div class="footer-top">
						<div class="footer-top-nav">
							<ul>
								<li><a href="about.html">About</a></li>
								<li><a href="press.html">Press</a></li>
								<li><a href="copyright.html">Copyright</a></li>
								<li><a href="creators.html">Creators</a></li>
								<li><a href="#">Advertise</a></li>
								<li><a href="developers.html">Developers</a></li>
							</ul>
						</div>
						<div class="footer-bottom-nav">
							<ul>
								<li><a href="terms.html">Terms</a></li>
								<li><a href="privacy.html">Privacy</a></li>
								<li><a href="#small-dialog4" class="play-icon popup-with-zoom-anim">Send feedback</a></li>
								<li><a href="privacy.html">Policy & Safety </a></li>
								<li><a href="try.html">Try something new!</a></li>
							</ul>
						</div>
					</div>
				
				</div>
			</div>
			<!-- //footer -->
  </body>

</html>