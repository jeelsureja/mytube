<!DOCTYPE html>
<html>
<head>
<link href="{{URL::asset('css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
<link href="{{URL::asset('css/dashboard.css')}}" rel="stylesheet">
<!-- Custom Theme files -->

<link href="{{URL::asset('css/style.css')}}" rel='stylesheet' type='text/css' media="all" />
<script src="{{URL::asset('js/jquery-1.11.1.min.js')}}"></script>
<script src="https://use.fontawesome.com/fe459689b4.js"></script>

<!--start-smoth-scrolling-->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<style type="text/css">

/* 
.btn:focus {
  outline: none;
}

.green{
  color: green;
}

.red{
  color: red;
} */
</style>

</head>
<body>

@include('assets.navbar')
<div class="col-sm-3 col-md-2 sidebar">
			@include('assets.sidebar')
        </div>



<div class="container">    
  		
  



<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
	</div>
	<br />
  <h3>{{ $data->video_name }} </h3>
	<!-- <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" /> -->
	<!DOCTYPE html>
<html>
<head>
<title>Video</title>
<link rel="stylesheet" href="https://cdn.plyr.io/3.5.10/plyr.css" />
<script src="https://cdn.plyr.io/3.5.10/plyr.js"></script>
</head>

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

<body>

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

<div class="container">
<video controls crossorigin playsinline poster="{{URL::to('/')}}/images/{{$data->image}}" id="player">
<!-- Video files -->
<source src="{{ URL::to('/') }}/videos/{{ $data->video }}" type="video/mp4" size="576">
<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">
<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1440p.mp4" type="video/mp4" size="1440">

<!-- Caption files -->
<track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt"
default>
<track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">

<!-- Fallback for browsers that don't support the <video> element -->
<a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download>Download</a>
</video>


</div>
</body>
</html>
<div align="left">
<h3>Author:{{ $result1}}</h3><br>
<form method="post" action="{{ route('like.store' )}}" >
@csrf
<input type="hidden" name="id"value="{{ $data->id }}">
<input type="hidden" name="u_id"value="{{ Auth::user()->id }}">
<button  id="green"><i class="fa fa-thumbs-o-up fa-4x" aria-hidden="true"></i></button>
<h5>{{$query}}</h5>
</form>
<form action="{{ route('like.destroy', $data->id) }}" method="post">
@csrf
@method('DELETE')
<button  id="red"><i class="fa fa-thumbs-o-down fa-4x" aria-hidden="true"></i></button>
</form>




</div>
	<h3>{{ $data->video_des }}</h3>
</div>
<div class="all-comments">
						<div class="all-comments-info">
							<a href="#">All Comments (8,657)</a>
							<div class="box">
								<form>
									<input type="text" placeholder="Name" required=" ">			           					   
									<input type="text" placeholder="Email" required=" ">
									<input type="text" placeholder="Phone" required=" ">
									<textarea placeholder="Message" required=" "></textarea>
									<input type="submit" value="SEND">
									<div class="clearfix"> </div>
								</form>
							</div>
							<div class="all-comments-buttons">
								<ul>
									<li><a href="#" class="top">Top Comments</a></li>
									<li><a href="#" class="top newest">Newest First</a></li>
									<li><a href="#" class="top my-comment">My Comments</a></li>
								</ul>
							</div>
						</div>
						<div class="media-grids">
							<div class="media">
								<h5>Tom Brown</h5>
								<div class="media-left">
									<a href="#">
										
									</a>
								</div>
								<div class="media-body">
									<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div>
							<div class="media">
								<h5>Mark Johnson</h5>
								<div class="media-left">
									<a href="#">
										
									</a>
								</div>
								<div class="media-body">
									<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div>
							<div class="media">
								<h5>Steven Smith</h5>
								<div class="media-left">
									<a href="#">
										
									</a>
								</div>
								<div class="media-body">
									<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div>
							<div class="media">
								<h5>Marry Johne</h5>
								<div class="media-left">
									<a href="#">
										
									</a>
								</div>
								<div class="media-body">
									<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div>
							<div class="media">
								<h5>Mark Johnson</h5>
								<div class="media-left">
									<a href="#">
										
									</a>
								</div>
								<div class="media-body">
									<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div>
							<div class="media">
								<h5>Mark Johnson</h5>
								<div class="media-left">
									<a href="#">
										
									</a>
								</div>
								<div class="media-body">
									<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div>
							<div class="media">
								<h5>Peter Johnson</h5>
								<div class="media-left">
									<a href="#">
										
									</a>
								</div>
								<div class="media-body">
									<p>Maecenas ultricies rhoncus tincidunt maecenas imperdiet ipsum id ex pretium hendrerit maecenas imperdiet ipsum id ex pretium hendrerit</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>
							</div>
						</div>
					</div>
</div>
</body>
<script type="text/javascript">
var btn1 = document.querySelector('#green');
var btn2 = document.querySelector('#red');

btn1.addEventListener('click', function() {
  
    if (btn2.classList.contains('red')) {
      btn2.classList.remove('red');
    } 
  this.classList.toggle('green');
  
});

btn2.addEventListener('click', function() {
  
    if (btn1.classList.contains('green')) {
      btn1.classList.remove('green');
    } 
  this.classList.toggle('red');
  
});


</script>
</html>



