@extends('User.Common.layout')
@section('content')

<div class="content">
  <div class="contact">
  <div class="contact-top">
        
  </div>  
  @if(Session::has('message'))
   <p class="alert alert-info">{{ Session::get('message') }}</p>
  @endif
  
<div class="contact-bottom">
	   <div class="b-box">
            <h1>Feedback</h1>
            
            <div class="form">	
                <form class="cmxform" action="/feedback" method="post" >
                  @csrf
                <div>
                    <span><label for="name">Name</label></span>
                    <span><input type="text" id="name" name="name" /></span>
					
                    <span><label for="email">Email</label></span>
                    <span><input type="text" id="email" name="email" /></span>
					
                    <span><label for="feedback">Feedback</label></span>
                    <span><input type="text" id="feedback" name="feedback" /></span>
          
               	   <button class="tsc_c3b_large tsc_c3b_white tsc_button">Submit</button>
                </div>
              </form>   
          </div>  
        </div>
          </div>

          <br><br>
          <div class="food-right">
    <div class="sub-right">
         <div class="sub1-image">
            <a href="#"><img src="{{asset('User/images/feedback.jpg')}}" /></a>
        </div>
    </div>
  </div>
<!---     <div class="contact-det">
          	 <h1>Contact Address</h1>
					<p>"The Royal Hotel"</p>
          <p>Raiya Chowk</p>
          <p>Mavdi road</p>
          <p>Near Sterling Hospital</p>
          <p>Rajkot - Gujarat</p>	
					<p>Telephone:0286-2211520</p>
					<p>Fax:1-22-5555</p>
					<p>Email: <a href="mailto:info@gmail.com"> support(at)royalhotel.com</a></p>
    		  </div>  -->
     </div>
         <div class="clear"></div>
      </div>
   </div>
  </div>
</div>
</div>

@endsection
