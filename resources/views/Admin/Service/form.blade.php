
<div class="form-group col-md-12">
  <label for="service">Service</label>
  <input type="text" class="form-control"  name="service" value="{{$service->service}}">
</div>

 <!-- closes the panel body div-->

<div class="panel-footer">
  <div class="row">
    <div class="col-md-12">
      <div class="form-action">
        <a href="{{route('adminService.index')}}" class="btn btn-sm btn-default">Cancel</a>
        <button type="submit" id="btn-save" class="btn bg-olive btn-sm pull-right">
          {{ $submitButtonText ? : 'create' }}
        </button>
      </div>
    </div>
  </div>
</div>