
<!DOCTYPE HTML>
<html>
<head>
<title>My Play Video </title>
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
<script src="https://use.fontawesome.com/fe459689b4.js"></script>

<!--start-smoth-scrolling-->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- //fonts -->
<style>
.footer {

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
       
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="main-grids">
			
				<div class="recommended">
			
					<div class="recommended-grids">
						<div class="recommended-info">
						<h1>Home</h1>
						</div>
						@foreach($data as $row)
						<div class="col-md-3 resent-grid recommended-grid">
						
							<div class="resent-grid-img recommended-grid-img">
								<a href="{{ route('crud.show', $row->id) }}"><img src="{{ URL::to('/') }}/images/{{ $row->image }}" alt="" width="200px" height="200px"/></a>
								
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5>{{ $row->video_name }}</h5>
								<ul>
									
								</ul>
							</div>
						</div>
					
						@endforeach
						<div class="clearfix"> </div>
					</div>
					
				</div>
				
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
  </body>
</htm>