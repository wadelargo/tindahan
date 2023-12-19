
@extends('pages.base')

@section('content')
  <!-- Modal -->
  <div class="modal fade" id="deleteBookingModal" tabindex="-1" aria-labelledby="deleteBookingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteBookingModalLabel">Delete saler - {{$saler->fullname}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('salers/delete/' .$saler->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
                Are you sure you want to delete this saler?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
      </div>
    </div>
  </div>

<h1>Edit Saler</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{url('/salers/' .$saler->id)}}" method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="fullname">fullname</label>
                <input type="text" name="fullname" class="form-control" value="{{$saler->fullname}}">
                @error('fullname')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="address">address</label>
                <input type="text" name="address" class="form-control" value="{{$saler->address}}">
                @error('address')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="sex">sex</label>
                <input type="text" name="sex" class="form-control" value="{{$saler->sex}}">
                @error('sex')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group my-3 d-grid gap 2 d-md-flex justify-content-end">
                <button type="button" class="btn btn-danger me-md-2 mt-2" data-bs-toggle="modal" data-bs-target="#deleteBookingModal">Delete Booking</button>
                <button class="btn btn-primary me-md-2 mt-2" type="submit">Edit booking</button>
            </div>
        </form>
    </div>
</div>


@endsection



