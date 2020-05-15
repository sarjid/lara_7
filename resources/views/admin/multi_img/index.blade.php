@extends('layouts.admin_master')

@section('admin_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
       
                
            <div class="card-deck">
                @foreach ($images as $multi_img)
                <div class="col-md-4 mt-5">
                <div class="card">
                  <img class="card-img-top" src="{{ asset($multi_img->image) }}"  height="300px;" width="300px;" alt="Card image cap">
                  <div class="card-body">

                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                </div>
                @endforeach

              </div>
          

        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header"> Add Brand
                </div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                    <form action="{{ route('store.image') }}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group">
                            <label for="exampleInputEmail1">Multiple Image </label>
                            <input type="file" name="image[]" class="form-control @error('image') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" multiple >

                            @error('image')
                          <span class="text-danger">{{$message}}</span>
                            @enderror

                          </div>

                        <button type="submit" class="btn btn-primary">Add</button>
                      </form>




                </div>
            </div>
        </div>



</div>
@endsection
