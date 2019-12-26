@extends('User.Common.layout')
@section('content')

<!--- 
<div class="content">
<div class="content-top">
		<div class="grid">
				<div class="tariff">
					   	<div class="text">
				 			<h2>24 hours Reception</h2>
							<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</p>

						</div>
				<div class="clear"></div>
				</div>
		</div>
		<div class="grid1">
					<div class="tariff">
					   	<div class="text">
				 			<h2>Breakfast</h2>
							<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</p>

						</div>
					<div class="clear"></div>
					</div>
		</div>
		<div class="grid2">
			<div class="tariff">
								   	<div class="text">
							 			<h2>Breakfast</h2>
										<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</p>

									</div>
								<div class="clear"></div>
								</div>

            <div class="clear"></div>
         </div>
		</div>
		<div class="clear"></div>
      </div>
   </div>
  </div>
 </div>
</div>

-->
<div id="container">
	<div class="text">
					@guest
						<span></span>
					@else
						<h2><center>Welcome {{ Auth::user()->first_name }}</center></h2>
					@endguest	
         </div>               
        <div id="banner">
		<script src="{{asset('User/js/responsiveslides.min.js')}}"></script> 
						<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: true,
										nav: false,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
						</script>
						


<div  id="top" class="callbacks_container">

							<ul class="rslides" id="slider3">
								  <li><img src="{{asset('User/images/m.jpg')}}"/></li>

								  <li><img src="{{asset('User/images/banner2.jpg')}}" /></li>  
								  <li><img src="{{asset('User/images/banner1.jpg')}}" /></li>  
						   
							</ul>
						</div>
        </div>
   
               
<div class="content-bottom">
<div class="wrap">
<div class="text">
	<h2>&nbsp;&nbsp; Delicious Food, &nbsp;Rooms, &nbsp;Best Services &nbsp;and &nbsp;so &nbsp;on</h2>
	<div class="bottom-gallery">			
			<div class="bottom-image">
				<img src="{{asset('User/images/pic.jpg')}}">
			</div>
			<div class="bottom-image">
				<img src="{{asset('User/images/pic4.jpg')}}">
			</div>
			<div class="bottom-image">
				<img src="{{asset('User/images/pic10.jpg')}}">
			</div>
			<div class="bottom-image1">
				<img src="{{asset('User/images/pic7.jpg')}}">
			</div>

			<div class="bottom-image">
				<img src="{{asset('User/images/family1.jpg')}}">
			</div>
			<div class="bottom-image">
				<img src="{{asset('User/images/luxury2.jpg')}}">
			</div>
			<div class="bottom-image">
				<img src="{{asset('User/images/suite1.jpg')}}">
			</div>
			<div class="bottom-image1">
				<img src="{{asset('User/images/simple1.jpg')}}">
			</div>
			
			<div class="clear"></div>
	</div>
</div>
</div>
</div>

@endsection
