
@extends('User.Common.layout')
@section('content')

<div class="contact">
  <div class="contact-top">
        
  </div>  

<div class="contact-bottom">
	   <div class="b-box">
            <h1>Feedback</h1>
            {!! $calendar->calendar() !!}
 		</div>           
 </div>
			
</div>
@endsection

