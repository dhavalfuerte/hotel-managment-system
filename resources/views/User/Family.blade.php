@extends('User.Common.layout')
@section('content')
<div id="container">
</div>
	
<div class="content">
  <div class="contact">
  <div class="contact-top">
        <div class="grid">
			<div class="tariff">
				<div class="sub-image">
					<img src="{{asset('User/images/family2.jpg')}}" height="190px" width="=25px" >
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="grid1">
			<div class="tariff">
				<div class="sub-image">
					<img src="{{asset('User/images/family3.jpg')}}" >
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="grid2">
			<div class="tariff">
				<div class="sub-image">
					<img src="{{asset('User/images/family4.jpg')}}" >
				</div>
				<div class="clear"></div>
			</div>
		</div>
	
  </div>  

<div class="contact-bottom">
	   <div class="b-box">
	   		<div class="rooms">
           		 <h1>Room Details</h1>
		            <table class="table" summary="Sample Table" style="width:100%;">
		   	     		<tr>
		    			    <th scope="col">Room types</th>
		        			<th scope="col">Price Per Person </th>
		        			<th scope="col">Capacity</th>
		        			
		      			</tr>
		      			
		      				 <tr >
		          				<th >{{$result->name}}</th>
		          				<td>{{$result->price}}/-</td>
		          				<td>{{$result->capacity}}</td>
		          			</tr>
		          		
		          
		      		</table>
		      		@if($errors->any())
                    	@foreach($errors->all() as $error)
                    		<span><label for="email">{{$error}}</label></span>            		
                    	@endforeach
                    @endif
      		</div>
            <div class="form">	
                <form class="cmxform" action="{{ route('book.store') }}" method="POST" >
                  @csrf
                <div>
                	<input name="user" type="hidden" value="{{Auth::user()->id}}">
                    <input name="roomid" type="hidden" value="{{$result->id}}">
                    <input name="price" type="hidden" value="{{$result->price}}">
                    <input name="capacity" type="hidden" value="{{$result->capacity}}">
                    
					<span><label for="email">Start Dtae</label></span>            		
            		<input class="date form-control" type="text" name="startdate">
            		<span><label for="email">Ending Date</label></span>
            		<input class="date form-control" type="text" name=enddate>

        <!--            <span><label for="email">Select Members</label></span>
                   <span> <select name="members" class="form-control">
	                    <option value="1">1</option>
	                    <option value="2">2</option>
	                    <option value="3">3</option>
	                    <option value="4">4</option>
	                    <option value="5">5</option>
	                   
              		</select></span>
					
                  
                    <span><label for="days">Select days</label></span>
                   <span> <select name="members" class="form-control">
	                    <option value="1">1</option>
	                    <option value="2">2</option>
	                    <option value="3">3</option>
	                    <option value="4">4</option>
	                    <option value="5">5</option>
	                </select></span>  -->
					
               	   <button class="tsc_c3b_large tsc_c3b_white tsc_button" name="submit">Book</button>
                </div>
              </form>   
          </div>  
        </div>
          </div>

          <br><br>
         
     </div>
         <div class="clear"></div>
      </div>
   </div>
  </div>
</div>
</div>


<script type="text/javascript">

    $('.date').datepicker({  

       format: 'yyyy-mm-dd'

     });  

</script>  
@endsection

