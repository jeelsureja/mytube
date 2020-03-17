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
<link href="{{URL::asset('../css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
<link href="{{URL::asset('../css/dashboard.css')}}" rel="stylesheet">
<!-- Custom Theme files -->
<link href="{{URL::asset('../css/style.css')}}" rel='stylesheet' type='text/css' media="all" />
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
              <h2>Feedback</h2>
            </div>
            <form method="post" action="{{route('feedback.store')}}">
            @csrf
              <input type="hidden" data-form-email="true">
              <div class="form-group">
                <input type="hidden" class="form-control" name="u_id" required="" value="{{ Auth::user()->id }}">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" value="{{ Auth::user()->name }}"disabled>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" value="{{ Auth::user()->email }}" disabled>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" placeholder="Message" rows="7" required=""></textarea>
              </div>
              <div>
                <button type="submit" class="btn btn-lg btn-danger">CONTACT US</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
                <!--//feedbackform-->

           
  </body>

</html>