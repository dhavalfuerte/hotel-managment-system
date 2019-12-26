@extends('User.Common.layout')
@section('content')

<div class="content">
  <div class="contact">
  <div class="contact-top">        
  </div>  

<div class="contact-bottom" style="margin-left:29% ;">
     <div class="b-box">
            <h1>Login / SignIn</h1>
            
            <div class="form">  
                <form class="cmxform" action="{{url('/adduser')}}" method="post" ><br>
                  @csrf

                <div class="form-group row">
                            <span><label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label></span>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <span><span><label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label></span>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <span><label for="name" class="col-md-4 col-form-label text-md-right">{{ __('User_name') }}</label>
</span>
                            <div class="col-md-6">
                                <input id="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" required autocomplete="user_name" autofocus>

                                @error('user_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <span><label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label></span>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <span><label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label></span>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <span><label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label></span>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <span><label for="mobile_no" class="col-md-4 col-form-label text-md-right">{{ __('Mobile no') }}</label></span>

                            <div class="col-md-6">
                                <input id="mobile_no" type="text" class="form-control @error('mobile_no') is-invalid @enderror" name="mobile_no" value="{{ old('mobile_no') }}" required autocomplete="mobile_no" autofocus>

                                @error('mobile_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <span><label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label></span>                       <div class="col-md-6">  <span>
                                <input id="female" type="radio" class="@error('gender') is-invalid @enderror" name="gender" value="FeMale" required autofocus> Female &nbsp;&nbsp;&nbsp;
                                
                                <input id="male" type="radio" class="@error('gender') is-invalid @enderror" name="gender" value="Male" required autofocus>Male</span>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       <br><br>

                        <div class="form-group row">
                            <span><label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label></span>

                            <div class="col-md-6">
                                <input id="address" type="textarea" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="last_name" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <span><label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

    </span>                        <div class="col-md-6">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <span><label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

  </span>                          <div class="col-md-6">
                                <input id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" required autocomplete="state" autofocus>

                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <span><label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label></span>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus>

                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <span><label for="zip_code" class="col-md-4 col-form-label text-md-right">{{ __('Zip Code') }}</label></span>

                            <div class="col-md-6">
                                <input id="zip_code" type="text" class="form-control @error('zip_code') is-invalid @enderror" name="zip_code" value="{{ old('zip_code') }}" required autocomplete="zip_code" autofocus>

                                @error('zip_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>        

            <!---    <div>
                    <span><span><label for="fnm">First Name</label></span>
                    <span><input type="text" id="fn</span>m" name="fnm" /></span>
          
                    <span><span><label for="lnm">Last Name</label></span>
                    <span><input type="text" id="lnm</span>" name="lnm" /></span>
          
                    <span><span><label for="email">Email</label></span>
                    <span><input type="text" id="email</span>" name="email" /></span>
          
                    <span><span><label for="mno">Mobile No</label></span>
                    <span><input type="text" id="mno</span>" name="mno" /></span>
          
                    <span><span><label for="gender">Gender</label></span>
                    <span><input type="text" id="gen</span>der" name="gender" /></span>
          
                    <span><span><label for="address">Address</label></span>
                    <span><input type="text" id="a</span>ddress" name="address" /></span>
          
                    <span><span><label for="city">city</label></span>
                    <span><input type="text" id="city" n</span>ame="city" /></span>
          
                    <span><span><label for="state">State</label></span>
                    <span><input type="text" id="state</span>" name="state" /></span>
          
                    <span><span><label for="country">County</label></span>
                    <span><input type="text" id="co</span>untry" name="country" /></span>
          
                    <span><span><label for="zcode">Zip Code</label></span>
                    <span><input type="text" id="zc</span>ode" name="zcode" /></span>
          
                    <span><span><label for="username">UserName</label></span>
                    <span><input type="text" id=</span>"username" name="username" /></span>
          
                    <span><span><label for="password">Password</label></span>
                    <span><input type="text" id=</span>"Password" name="password" /></span>
          
                    <span><span><label for="conpwd">Confirm Password</label></span>
                    <span><input type="tex</span>t" id="conpwd" name="conpwd" /></span>  
          
                   <button class="tsc_c3b_large tsc_c3b_white tsc_button">Submit</button>  
               
                </div>  -->

                
          </div>  
          </form>
            </div>
          </div>
 <!--- <div class="food-right">
    <div class="sub-right">
         <div class="sub1-image">
            <a href="#"><img src="{{asset('User/images/food1.png')}}" /></a>
        </div>
    </div>
                </div>
     <div class="contact-det">
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
