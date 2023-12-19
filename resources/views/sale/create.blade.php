
@extends('pages.base')

@section('content')
    <h1>Add sales</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('sales/create')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="product_id">Select product</label>
                  <select class="form-select" name="product_id" id="product_id">
                     <option hidden="true">Select product</option>
                     <option selected disabled>Select product</option>
                     @foreach ($products as $productId => $product)
                         <option value="{{$productId}}">{{$product}}</option>
                     @endforeach
                  </select>
                  @error('product_id')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="salesmonth">salesmonth</label>
                    <input class="form-control" type="date" name="salesmonth">
                    @error('salesmonth')
                        <p class="text-danger">{{$message}}</p>
                    @enderror

                    <div class="form-group mt-2">
                        <label for="salesquantity">salesquantity</label>
                        <input class="form-control" type="number" name="salesquantity">
                        @error('salesquantity')
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
