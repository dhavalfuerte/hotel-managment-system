@extends('Admin.Common.layout')

@section('content')

  <div class="row">

    <div class="col-md-7 col-md-offset-2" style="margin-top: 10%;">
      <div class="panel panel-default">
        <div class="panel-heading"  style="padding-top: 22px;">
          <h3 class="panel-title text-center">Edit {{ $service->name }} Service </h3>
        </div>

        <div class="panel-body ">
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <form
                  action="{{ route('adminService.update', $service->id) }}" method="POST" id="form">
            {{ csrf_field() }}

            {{ method_field('PUT') }}

            @include('Admin.Service.form', [
             'submitButtonText' => 'Update',
             'service' => $service
            ])
          </form>
        </div>
      </div>

    </div>
      </div>

@stop