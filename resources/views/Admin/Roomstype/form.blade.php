<div class="form-group col-md-12">
<label for="name">Name</label>
<input type="text" class="form-control"  name="name" value="{{ $roomstype->name }}">
</div>

<div class="form-group col-md-12">
  <label for="subject">Description</label>
  <input type="text" class="form-control"  name="description" value="{{ $roomstype->description }}">
</div>

<div class="form-group col-md-12">
  <label for="email">Capacity</label>
  <input type="text" class="form-control"  name="capacity" value="{{ $roomstype->capacity }}">
</div>

<div class="form-group col-md-12">
  <label for="subject">Floor</label>
  <input type="text" class="form-control"  name="floor" value="{{ $roomstype->floor }}">
</div>

<div class="form-group col-md-12">
  <label for="subject">Price</label>
  <input type="text" class="form-control"  name="price" value="{{ $roomstype->price }}">
</div>


 <!-- closes the panel body div-->

<div class="panel-footer">
  <div class="row">
    <div class="col-md-12">
      <div class="form-action">
        <a href="{{route('adminRoomstype.index')}}" class="btn btn-sm btn-default">Cancel</a>
        <button type="submit" id="btn-save" class="btn bg-olive btn-sm pull-right">
          {{ $submitButtonText ? : 'create' }}
        </button>
      </div>
    </div>
  </div>
</div>