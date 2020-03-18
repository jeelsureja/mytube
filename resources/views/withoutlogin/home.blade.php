
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
			@include('withoutlogin.sidebar')
        </div>
       
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="main-grids">
				<div class="recommended">
			
					<div class="recommended-grids">
				
						<div class="recommended-info">
							<!-- @foreach($categorys as $category)

							<h3>{{$category->category_name}}</h3>
							@endforeach -->
						</div>
						@foreach($data as $row)
						<div class="col-md-3 resent-grid recommended-grid">
						
							<div class="resent-grid-img recommended-grid-img">
								<a href="{{ route('videoplay.show', $row->id) }}"><img src="{{ URL::to('/') }}/images/{{ $row->image }}" alt="" width="200px" height="200px"/></a>
								
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
		@include('assets.script')
  </body>
</htm>