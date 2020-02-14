@extends('parent')

@section('main')

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div align="right">
	<a href="{{route('crud.create')}}" class="btn btn-success btn-sm">Add</a>
</div>
<br />
<!-- @if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif -->



	@foreach($data as $row)

<form action="{{ route('crud.destroy', $row->id) }}" method="post">

<!-- <div class="container">
<div class="col-md-4">
<div class="card" style="width:200px ">
<img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="200" />
<div class="card-body">
<h4 class="card-title">{{ $row->first_name }}</h4>
<p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>

</div>
</div>
</div>
</div> -->
<div class="col-md-4 col-sm-6">
<div class="item">
<div class="thumb">
<a href="img/second_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
<div class="hover-content">

</div>
</div></a>
<div class="image">
<img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="200" />
<h2>{{ $row->first_name }}</h2>
<a href="{{ route('crud.show', $row->id) }}"  class = "btn btn-default"><span class="glyphicon glyphicon-play"></span> Play Video</a>
</div>
</div>
</div>
</div>
<!-- <a href="{{ route('crud.edit', $row->id) }}" class="btn btn-warning">Edit</a> -->
<!-- @csrf -->
<!-- @method('DELETE') -->
<!-- <button type="submit" class="btn btn-danger">Delete</button> -->

</form>

@endforeach

@endsection