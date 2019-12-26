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
            <h1>Contact Us</h1>
            <div class="form">
            	
                <form class="cmxform" action="/contact" method="post" >
                  @csrf
                <div>
                    <span><label for="name">Name</label></span>
                    <span><input type="text" id="name" name="name" /></span>
					<span><label for="email">Email</label></span>
                    <span><input type="text" id="email" name="email" /></span>
					
                       <span><label for="subject">Subject</label></span>
                       <span><input type="textarea" id="sub" name="sub" /></span>
                
               	   <button class="tsc_c3b_large tsc_c3b_white tsc_button">Submit</button>
                </div>
                </form>

            </div>
          </div>
          <div class="contact-det">
          	 <h1>Contact Address</h1>
					<p>"Royal Hotel"</p>
          <p>Raiya Chowk</p>
          <p>Mavdi road</p>
          <p>Near Sterling Hospital</p>
          <p>Rajkot - Gujarat</p>	
					<p>Telephone:0281-2211520</p>
					<p>Fax:1-22-5555</p>
					<p>Email: <a href="mailto:info@gmail.com"> support(at)royalhotel.com</a></p>
		</div>

     </div>
         <div class="clear"></div>
      </div>
   </div>
  </div>
</div>
</div>

@endsection
