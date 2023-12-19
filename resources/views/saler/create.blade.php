
@extends('pages.base')

@section('content')
    <h1>Add Saler</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('salers/create')}}" method="POST">
                @csrf

                <div class="form-group mt-2">
                    <label for="fullname">fullame</label>
                    <input class="form-control" type="text" name="fullname">
                    @error('fullname')
                        <p class="text-danger">{{$message}}</p>
                    @enderror

                <div class="form-group mt-2">
                    <label for="address">address</label>
                    <input class="form-control" type="text" name="address">
                    @error('address')
                        <p class="text-danger">{{$message}}</p>
                    @enderror

                <div class="form-group mt-2">
                    <label for="sex">sex</label>
                    <input class="form-control" type="text" name="sex">
                    @error('sex')
                       <p class="text-danger">{{$message}}</p>
                        @enderror
                  <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button class="btn btn-primary me-md-2 mt-2" type="submit">
                        Add Saler
                    </button>
                </div>

            </form>
        </div>
    </div>




@endsection
