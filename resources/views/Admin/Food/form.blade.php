
 <!-- closes the panel body div-->
<div class="form-group">
        <label for="author">Cover:</label>
        <input type="file" class="form-control" name="bookcover"/>
    </div>
 
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