@extends('Admin.Common.layout')

@section('content')


<section class="wrapper">	
<div class="row">
  <div class="col-md-12">
    <div class="box box-success with-border no-padding">

      <div class="box-header with-border">
             
        <div class="box-tools pull-left">

          <div class="btn-group btn-group-sm">
         
           
          </div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="panel-body ">
        <table class="table table-hover table-condensed" id="table">
          <thead>
          <tr>
            <th>Id</th>
            <th>UserName</th>
            <th>Room No</th>
            <th>Price</th>
            <th>Members</th>
            <th>Time From</th>
            <th>Time To</th>
            <th>Action</th>
          </tr>
          
          @forelse ($room as $row)
          <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->first_name}}</td>
            <td>{{$row->room_no}}</td>
            <td>{{$row->Price}}</td>
            <td>{{$row->Capacity}}</td>
            <td>{{$row->time_from}}</td>
            <td>{{$row->time_to}}</td>
            <td>
                 <div class="btn-group">
                  <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"
                          aria-expanded="false">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                   <li><form method="post" action="{{  route('book.destroy',$row->id)}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn" style = "background-color:transparent">
                            <i class="glyphicon glyphicon-trash"></i>Delete
                        </button>
                        
             </form>
                      </li>
                  </ul>
                </div>
            </td>
          </tr>
          @empty
          @endforelse
          </thead>
        </table>
        {{$room->onEachSide(1)->links()}}
      </div>
      <!-- /.box-body -->
      <div class="panel-footer">
        Details of All Rooms
      </div>

    </div>
    <!-- /.box -->
  </div>
</div>
		
</section>
@stop

