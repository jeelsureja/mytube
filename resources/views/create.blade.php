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

<link href="/css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
<link href="/css/dashboard.css" rel="stylesheet">
<!-- Custom Theme files -->
<link href="/css/style.css" rel='stylesheet' type='text/css' media="all" />
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://use.fontawesome.com/fe459689b4.js"></script>
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
		<!-- upload -->
		<div class="upload">
			<!-- container -->
			<div class="container">
			@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<div align="right">
  <a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
</div>

<form method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data">

  @csrf
  <div class="form-group">
    <label class="col-md-4 text-right" style="font-size:20px;">Enter Video Name</label>
    <div class="col-md-8">
      <input type="text" name="video_name" class="form-control input-lg" />
    </div>
  </div>
  <br />
  <br />
  <br />
  <br />
  <br />
  <div class="form-group">
    <label class="col-md-4 text-right" style="font-size:20px;">Enter Video Description</label>
    <div class="col-md-8">
      <input type="text" name="video_des" class="form-control input-lg" />
    </div>
  </div>
  <br />
  <br />
  <br />
  <div class="form-group">
		<div class="col-md-8">
			<input type="hidden" name="u_id" class="form-control input-lg" value="{{ Auth::user()->id }}" />
		</div>
	</div>
  <div class="form-group">
    <label class="col-md-4 text-right" style="font-size:20px;">Category Name:</label>
    <div class="col-md-8">
	<select class="form-control" name="category_id">
        @foreach($categorys as $category)
    	<option value="{{$category->id}}">
        {{$category->category_name}}
        </option>
        @endforeach
    </select>
    </div>
  </div>
  <br />
  <br />
  <br />
<br />
  <div class="form-group">
    <label class="col-md-4 text-right" style="font-size:20px;">Select Thumbnail Image</label>
    <div class="col-md-8">
      <input type="file" name="image" class="form-control"/>
    </div>
  </div>
  
  <br /><br /><br />
  <div class="form-group">
    <label class="col-md-4 text-right" style="font-size:20px;">Select Video</label>
    <div class="col-md-8">
      <input type="file" name="video" class="form-control"/>
    </div>
  </div>
  <br /><br /><br />
  <div class="form-group text-center">
    <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
  </div>

</form>
			</div>
			<!-- //container -->
		</div>
		<!-- //upload -->
		
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
</html>