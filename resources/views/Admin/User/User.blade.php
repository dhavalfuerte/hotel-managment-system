@extends('Admin.Common.layout')

@section('content')

<section class="wrapper">	
<div class="row">
  <div class="col-md-12">
    <div class="box box-success with-border no-padding">

  <!---    <div class="box-header with-border">
        <a href="{{ route('adminUser.create') }}" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-plus"></i> Users</a>
        <div class="box-tools pull-left">  -->

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
            <th>Name</th>
            
           
            <th>Email</th>
            
            <th>Mobile No</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Zip Code</th>

            <th>Action</th>
          </tr>
          
          @forelse ($result as $row)
          <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->first_name}} {{$row->last_name}}</td>
            <td>{{$row->email}}</td>
            
           
            
            <td>{{$row->mobile_no}}</td>
            <td>{{$row->gender}}</td>
            <td>{{$row->address}}<br>
            {{$row->city}}<br>
            {{$row->state}}<br>
            {{$row->country}}</td>
            <td>{{$row->zip_code}}</td>
            <td>
                 <div class="btn-group">
                  <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"
                          aria-expanded="false">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                   <li><form method="post" action="{{  route('adminUser.destroy',$row->id)}}">
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
      {{$result->onEachSide(1)->links()}}
      </div>
      <!-- /.box-body -->
      <div class="panel-footer">
        Details of All Users
      </div>

    </div>
    <!-- /.box -->
  </div>
</div>
		
</section>
@stop