@extends('User.Common.layout')
@section('content')
<div id="container">
</div>
<div class="content">
	<div class="services">
		<h3>Our Services</h3>
		<div class="services-top">
			<p>There are many Services are available. all service are provided to the customer as per hotel rules. If customer can damage the part of some service then customer can pay the find.</p>
		</div>
		<div class="services-nav">
				<ul>
					@forelse ($result as $row)
   					     <li>{{$row->service}}</li>
    				@empty
					@endforelse
					 <!--<li>24 hrs Generator Backup</li>
					 <li>Free Internet Service</li>	
					 <li>Medical Services</li>	
					 <li>Govt.approved</li>
					 <li>Free Parking</li>	
					 <li>Cash Advance-credit Card</li>
					 <li>Fax</li>
                     <li>Package Tours</li>
                     <li>Free Accommodation for Drivers</li>
                     <li>24 hrs hot and cold water</li>
                     <li>T.V in all rooms</li>
                     <li>Laundry Service</li>
                     <li>Lift is available in all floors</li>
                     <li>Rooms are provided with good furniture</li>-->
               </ul>
	   </div>
  	</div>
 </div>

@endsection
