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
              
  </body>
      @include('assets.script')
</html>