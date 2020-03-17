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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap -->

<link href="{{URL::asset('css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' media="all" />

<!-- //bootstrap -->
<link href="{{URL::asset('css/dashboard.css')}}" rel="stylesheet">
<!-- Custom Theme files -->
<link href="{{URL::asset('css/style.css')}}" rel='stylesheet' type='text/css' media="all" />
<script src="{{URL::asset('js/jquery-1.11.1.min.js')}}"></script>
<script src="https://use.fontawesome.com/fe459689b4.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!--start-smoth-scrolling-->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- //fonts -->
<!--player links-->
<link rel="stylesheet" href="https://cdn.plyr.io/3.5.10/plyr.css" />
<script src="https://cdn.plyr.io/3.5.10/plyr.js"></script>
<style type="text/css">
/* This is purely for the demo */
.container {
max-width: 1040px;
margin: 0 auto;
}
.plyr {
border-radius: 4px;
margin-bottom: 15px;
}
</style>

</head>
  <body>

  @include('assets.navbar')
     
        <div class="col-sm-3 col-md-2 sidebar">
            @include('withoutlogin.sidebar')
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="show-top-grids">
				<div class="col-sm-8 single-left">
					<div class="song">
						<div class="song-info">
            <h3>{{ $data->video_name }} </h3>
         
					</div>
						<div class="video-grid">
            <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', () => {
            // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
            const player = new Plyr('#player');

            // Expose
            window.player = player;

            // Bind event listener
            function on(selector, type, callback) {
            document.querySelector(selector).addEventListener(type, callback, false);
            }

            // Play
            on('.js-play', 'click', () => {
            player.play();
            });

            // Pause
            on('.js-pause', 'click', () => {
            player.pause();
            });

            // Stop
            on('.js-stop', 'click', () => {
            player.stop();
            });

            // Rewind
            on('.js-rewind', 'click', () => {
            player.rewind();
            });

           	// Forward
			on('.js-forward', 'click', () => {
			player.forward();
			});
			});
            </script>
                <video controls crossorigin playsinline poster="{{URL::to('/')}}/images/{{$data->image}}" height="200px" width="200px" id="player">
                <!-- Video files -->
                <source src="{{ URL::to('/') }}/videos/{{ $data->video }}" type="video/mp4" size="576">
               
						</div>
					</div>
					<div class="song-grid-right">
						<div class="share">
							<h5>Share this</h5><br><br><br>
							<ul>
							<li>
							<button class="btn btn-success" data-toggle="popover" title="Like this video?" data-placement="bottom" data-content="Sign in to make your opinion count."><i class="fa fa-thumbs-o-up fa-3x" aria-hidden="true"></i></button>
								<h3>{{$query}}</h3>
								</li>
								<li>

								</li>
								<button class="btn btn-danger" data-toggle="popover" title="Don't like this video??" data-placement="bottom" data-content="Sign in to make your opinion count."><i class="fa fa-thumbs-o-down fa-3x" aria-hidden="true"></i></button>
								<li>
								<button class="btn btn-info" data-toggle="popover" title="favourite this video??" data-placement="bottom" data-content="Sign in to make your opinion count."><i class="fa fa-heart-o fa-3x" aria-hidden="true"></i></button>
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
                    <h3>Author:{{$result1->name}}</h3>
                   
									</li>
									<li>
										<h3>{{ $data->video_des }}</h3>
									
									</li>
								</ul>
							</div>
					</div>
					<div class="all-comments">
						<div class="all-comments-info">
							<a href="#">All Comments</a>
							<div class="box">
								<form>
								
								
									<input type="text"  placeholder="Name" disabled><br><br>		           					   
									<input type="text"  placeholder="Email" disabled> 
									<textarea placeholder="Message" name="comment" disabled></textarea>
									<input type="submit" value="submit" disabled>
									<div class="clearfix"> </div>
								</form>
							</div>
						</div>
						<div class="media-grids">
						<h3>All Comments</h3>
							<div class="media">
							@foreach($result as $row3)
								<h4>Name: {{ $row3->name}}</h4>
								<h4>Email: {{ $row3->email}}</h4>
								<div class="media-left">
								<a href="/profile">
								<img src="/profileimages/{{ $row3->avatar }}" style="width:65px; height:65px;  border-radius:50%">
								</a>
								</div>
								<div class="media-body">
									<h4>Comment:{{ $row3->comment}}</h4>
									<h4>Commented on:{{ $row3->updated_at}}</h4>
									<!-- <span>View all posts by :<a href="#"> Admin </a></span> -->
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 single-right">
					<h3>Up Next</h3>
					<div class="single-grid-right">
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.html"><img src="images/r1.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.html" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.html"><img src="images/r2.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.html" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views </p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.html"><img src="images/r3.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.html" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.html"><img src="images/r4.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.html" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.html"><img src="images/r5.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.html" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.html"><img src="images/r6.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.html" class="title"> Nullam interdum metus</a>
								<p class="author">By <a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.html"><img src="images/r1.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.html" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.html"><img src="images/r2.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.html" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.html"><img src="images/r3.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.html" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.html"><img src="images/r4.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.html" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.html"><img src="images/r5.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.html" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.html"><img src="images/r6.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="single.html" class="title"> Nullam interdum metus</a>
								<p class="author"><a href="#" class="author">John Maniya</a></p>
								<p class="views">2,114,200 views</p>
							</div>
							<div class="clearfix"> </div>
						</div>
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
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
	<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
  </body>
</html>