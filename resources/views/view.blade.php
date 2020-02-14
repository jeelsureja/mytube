@extends('parent')

@section('main')

<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
	</div>
	<br />
	<!-- <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" /> -->
	<video
    id="my-video"
    class="video-js"
    controls
    preload="auto"
    width="640"
    height="264"
    poster="{{URL::to('/')}}/images/{{$data->image}}"
    data-setup="{}"
  >
    <source src="{{ URL::to('/') }}/videos/{{ $data->video }}" type="video/mp4" />
    <source src="{{ URL::to('/') }}/videos/{{ $data->video }}" type="video/webm" />
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a
      web browser that
      <a href="https://videojs.com/html5-video-support/" target="_blank"
        >supports HTML5 video</a
      >
    </p>
  </video>

  <script src="https://vjs.zencdn.net/7.6.6/video.js"></script>
  <iframe src="{{ URL::to('/') }}/videos/{{$data->video}}" width="750px" height="300px"></iframe>
	<h3>First Name - {{ $data->first_name }} </h3>
	<h3>Last Name - {{ $data->last_name }}</h3>
</div>
@endsection
