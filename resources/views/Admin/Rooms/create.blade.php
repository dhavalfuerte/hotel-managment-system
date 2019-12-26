@extends('Admin.Common.layout')

@section('content')

<div class="row">
    <div class="col-md-7 col-md-offset-2" style="margin-top: 10%;">
      <div class="panel panel-default">
        <div class="panel-heading" style="padding-top: 22px;">
          <h3 class="panel-title text-center">Create Rooms</h3>
        </div>

        <div class="panel-body overflow-hidden">
          <form
             action="{{ route('adminRooms.store') }}" method="post" id="form">
              @csrf
              
            @include('admin.Rooms.form', [
             'submitButtonText' => 'create',
             'rooms' => new \App\room,
             'roomTypes' => $roomTypes, 
             
            ])

          </form>
        </div>
      </div>

    </div>
</div>
@stop