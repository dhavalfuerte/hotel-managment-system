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
            <th>Name</th>
            <th>Email</th>
            <th>Feedback</th>
           
            <th>Action</th>
          </tr>
          
          @forelse ($result as $row)
          <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->feedback}}</td>
            <td>
                 <div class="btn-group">
                  <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"
                          aria-expanded="false">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                  
                   <li><form method="post" action="{{  route('adminFeedback.destroy',$row->id)}}">
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
        Details of All Feedback
      </div>

    </div>
    <!-- /.box -->
  </div>
</div>
		
</section>
@stop