@extends('User.Common.layout')
@section('content')


<div class="content">
  <div class="contact">
  <div class="contact-top">
        
  </div>
  @if(Session::has('message'))
   <p class="alert alert-info">{{ Session::get('message') }}</p>
  @endif
    
<div class="food-right">
   <div class="b-box">
            <h1>Login / SignIn</h1>
            
            <div class="form">  
                <form class="cmxform" action="{{ route('login.success') }}" method="POST" ><br>
                  @csrf

                 <div class="form-group row">
                            
                            <span><label for="name">{{ __('Email') }}</label></span>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
          
                      <div class="form-group row">
                            <span><label for="name">{{ __('Password') }}</label></span>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                   <div class="form-group row">
                           <span><label for="remember">{{ __('Remember Me') }} <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}></label></span>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div>
                                <button type="submit" class="tsc_c3b_large tsc_c3b_white tsc_button" name="login" value="login">
                                    {{ __('Login') }}
                                </button>
                                  
                               
                                     <button type="submit" class="tsc_c3b_large tsc_c3b_white tsc_button" name="signup" value="signup">
                                    {{ __('Sign Up') }}
                                </button>
                                  
                                 
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                
                            </div>
                    
                              
                        </div>
                </form>  

                 
                
          </div>  
         
            </div>
                </div>
<div class="contact-bottom">

    <div class="sub-right">
         <div class="sub1-image"><br>
            <a href="#"><img src="{{asset('User/images/sign5.png')}}" />
            <!--  <img src="{{asset('User/images/sign1.png')}}"   /></a>  -->
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
