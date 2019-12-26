@extends('Admin.Common.layout')

@section('content')

<div class="row">
    <div class="col-md-7 col-md-offset-2" style="margin-top: 10%;">
      <div class="panel panel-default">
        <div class="panel-heading" style="padding-top: 22px;">
          <h3 class="panel-title text-center">Create Service</h3>
        </div>

        <div class="panel-body overflow-hidden">
          <form
             action="/input" method="post" id="form" enctype="multipart/form-data">
              @csrf
              
            @include('Admin.Food.form', [
             'submitButtonText' => 'create',
             'service' => new \App\food,
            ])

          </form>
        </div>
      </div>

    </div>
</div>
@stop