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
	@include('assets.head')
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
						
						</div>
						<h3>{{$cat->category_name}}</h3>
						@foreach($data as $row)
						<div class="col-md-3 resent-grid recommended-grid">
						
							<div class="resent-grid-img recommended-grid-img">
								<a href="{{ route('crud.show', $row->id) }}"><img src="{{ URL::to('/') }}/images/{{ $row->image }}" alt="" width="200px" height="200px"/></a>
								
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5>{{ $row->video_name }}</h5>
								
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
  
  </body>
  @include('assets.script')
</htm>