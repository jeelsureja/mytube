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
					@foreach($data3 as $row)
					<div class="single-grid-right">
					
						<div class="single-right-grids">
						
							<div class="col-md-4 single-right-grid-left">
								<a href="{{ route('videoplay.show', $row->id) }}"><img src="{{ URL::to('/') }}/images/{{ $row->image }}" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="{{ route('videoplay.show', $row->id) }}" class="title"> {{ $row->video_name }}</a>
								<!-- <p class="author"><a href="#" class="author">{{$result1->name}}</a></p> -->
								<!-- <p class="views">2,114,200 views</p> -->
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					@endforeach
					<div class="col-md-4 single-right-grid-right">
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
		@include('assets.script')
  </body>
</html>