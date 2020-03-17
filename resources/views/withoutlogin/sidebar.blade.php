			
			<div class="top-navigation">
				<div class="t-menu">MENU</div>
				<div class="t-img">
					<img src="images/lines.png" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
				<div class="drop-navigation drop-navigation">
				
				  <ul class="nav nav-sidebar">
				  
					<li class="active"><a href="{{route('homepage.index')}}" class="home-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
					@foreach($categorys as $category)
					<li><a href="{{ route('vcategory.show',$category->id) }}" class="user-icon"> <span class="glyphicon glyphicon-film" aria-hidden="true"></span> {{ $category->category_name }}</a></li>
					@endforeach
				
				</div>
				
					<div class="side-bottom">
						
					</div>
				</div>