
@extends('Admin.Common.layout')

@section('content')


<section class="wrapper">	
<div class="row">
  <div class="col-md-12">
    <div class="box box-success with-border no-padding">

      <div class="box-header with-border">
       <a href="{{ route('adminRooms.create') }}" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-plus"></i>Create Rooms</a>      
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
            <th>Room No</th>
            <th>Room Type</th>
            <th>Action</th>
          </tr>
       
          <tr>
            <td><div class="col-md-6 offset-md-3 book-desc">
    			<div class="card">
        			<img class="card-img-top" src="{{url('uploads/'.$result[1]->filename)}}" height="100px" width="100px" />
        		</div>
			</div>
            
            <td>
                 <div class="btn-group">
                  <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"
                          aria-expanded="false">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                   <li><a  href= " " ><i class="glyphicon glyphicon-edit"></i>Edit </a></li>
                   <li><form method="post" action="">
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
        
          </thead>
        </table>
       
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


