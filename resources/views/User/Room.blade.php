@extends('User.Common.layout')
@section('content')
<div id="container">
</div>

<div class="content">
	<div class="rooms">
   

  @if(Session::has('message'))
   <p class="alert alert-info">{{ Session::get('message') }}</p>
  @endif
  <table class="table" summary="Sample Table" style="width:100%;">
   	<thead>
      <tr>
        <th scope="col">Room types</th>
        <th scope="col">Price per person</th>
        <th scope="col">Capacity</th>
        <th scope="col">Details</th>
       
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th scope="row">Total</th>
        <td colspan="7">5 types</td>
      </tr>
    </tfoot>
    <tbody>
      @forelse ($result as $row)
        <tr  >
          <th >{{$row->name}}</th>
          <td>{{$row->price}}/-</td>
          <td>{{$row->capacity}}</td>
          
          <td><a  href= "{{route('family.show',$row->id)}} "><i class="glyphicon glyphicon-edit"></i>Details </a></td>
        </tr>
      @empty
      @endforelse
       <!-- <tr class="odd">
          <th scope="row">Standard Rooms</th>
          <td>1500/-</td>
          <td>3</td>
          <td>5%</td>
          <td><a href="#">details</a></td>
        </tr>
        <tr >
          <th scope="row">Executive Rooms</th>
          <td>2000/-</td>
          <td>3</td>
          <td>5%</td>
          <td><a href="#">details</a></td>
        </tr>
        <tr class="odd">
          <th scope="row">Deluxe Rooms</th>
          <td>3500/-</td>
          <td>4</td>
          <td>5%</td>
          <td><a href="#">details</a></td>
        </tr>
        <tr class="odd">
          <th scope="row">Suite Rooms</th>
          <td>1200/-</td>
          <td>2</td>
          <td>5%</td>
          <td><a href="#">details</a></td>
        </tr> -->
   
    </tbody>
  </table> 
</div>

@endsection
