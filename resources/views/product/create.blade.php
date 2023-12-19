
@extends('pages.base')

@section('content')
    <h1>Add Booking</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('products/create')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="saler_id">Select saler</label>
                  <select class="form-select" name="saler_id" id="saler_id">
                     <option hidden="true">Select saler</option>
                     <option selected disabled>Select saler</option>
                     @foreach ($salers as $salerId => $saler)
                         <option value="{{$salerId}}">{{$saler}}</option>
                     @endforeach
                  </select>
                  @error('saler_id')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="itemname">itemname</label>
                    <input class="form-control" type="text" name="itemname">
                    @error('itemname')
                        <p class="text-danger">{{$message}}</p>
                    @enderror

                    <div class="form-group mt-2">
                        <label for="brandname">brandname</label>
                        <input class="form-control" type="text" name="brandname">
                        @error('brandname')
                            <p class="text-danger">{{$message}}</p>
                        @enderror

                <div class="form-group mt-2">
                    <label for="itemprice">itemprice</label>
                    <input class="form-control" type="number" name="itemprice">
                    @error('itemprice')
                        <p class="text-danger">{{$message}}</p>
                    @enderror

                    <div class="form-group mt-2">
                        <label for="itemstock">itemstock</label>
                        <input class="form-control" type="number" name="itemstock">
                        @error('itemstock')
                            <p class="text-danger">{{$message}}</p>
                        @enderror

                  <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button class="btn btn-primary me-md-2 mt-2" type="submit">
                        Add Booking
                    </button>
                </div>

            </form>
        </div>
    </div>




@endsection
