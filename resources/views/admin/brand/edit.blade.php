@extends('layouts.admin_master')

@section('admin_content')
<div class="container">
    <div class="row justify-content-center">


        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Brand
                </div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                    <form action="{{ url('Update/Brand/'.$brands->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="old_image" value="{{ $brands->brand_image }}">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Brand Name</label>
                          <input type="text" name="brand_name" class="form-control @error('brand_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $brands->brand_name }}">

                          @error('brand_name')
                        <span class="text-danger">{{$message}}</span>
                          @enderror

                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Brand Image</label>
                            <input type="file" name="brand_image" class="form-control @error('brand_image') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $brands->brand_name }}">

                            @error('brand_image')
                          <span class="text-danger">{{$message}}</span>
                            @enderror

                          </div>

                          <div class="form-group">
                              <img src="{{ asset($brands->brand_image) }}" alt="">
                          </div>

                        <button type="submit" class="btn btn-primary">Add</button>
                      </form>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
