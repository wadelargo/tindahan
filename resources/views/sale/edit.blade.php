
@extends('pages.base')

@section('content')
  <!-- Modal -->
  <div class="modal fade" id="deleteSaleModal" tabindex="-1" aria-labelledby="deleteSaleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteSaleModalLabel">Delete sales - {{$sale->salesmonth}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('sales/delete/' .$sale->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
                Are you sure you want to delete this sale?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
      </div>
    </div>
  </div>

  <h1>Edit sales</h1>
  <div class="row">
      <div class="col-md-5">
          <form action="{{url('sales/' .$sale->id)}}" method="POST">
              @csrf

              <div class="form-group mt-2">
                  <label for="salesmonth">salesmonth</label>
                  <input type="date" name="salesmonth" class="form-control" value="{{$sale->salesmonth}}">
                  @error('salesmonth')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
              </div>

            <div class="form-group mt-2">
                <label for="salesquantity">salesquantity</label>
                <input type="numeric" name="salesquantity" class="form-control" value="{{$sale->salesquantity}}">
                @error('salesquantity')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>





              <div class="form-group my-3 d-grid gap 2 d-md-flex justify-content-end">
                  <button type="button" class="btn btn-danger me-md-2 mt-2" data-bs-toggle="modal" data-bs-target="#deleteSaleModal">Delete Sale</button>
                  <button class="btn btn-primary me-md-2 mt-2" type="submit">Edit Sale</button>
              </div>
          </form>
      </div>
  </div>


@endsection






