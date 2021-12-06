@extends('admin.controlPanel')

@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div class="container" style="margin-top: 90px;height: 425px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="opacity: 0.4;background-color:black;color: white">
                <div class="card-header"><h2 style="color: #428bca"><b>Add Slide:</b></h2></div>

                <div class="card-body">
{{--                    <form action='{{ url('/admin/saveslide') }}' method="post" enctype="multipart/form-data">--}}
                    <form action='{{ url('/slide') }}' method="post" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group row">
                            <label for="productName" class="col-md-4 col-form-label text-md-right"  >{{ __('title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('productName') is-invalid @enderror" value="{{ old('productName') }}" name="title"   autocomplete="productName" autofocus>

                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="productionDate" class="col-md-4 col-form-label text-md-right">{{ __('desc') }}</label>

                            <div class="col-md-6">
                                <input id="desc" type="text" class="form-control  @error('content') is-invalid @enderror"  value="{{ old('productionDate') }}" name="desc"   autocomplete="desc" autofocus>
                                @error('desc')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
               <!-- form-group // -->
                        <hr>

                        <div class="form-group row">
                            <label for="Image" class="col-md-4 col-form-label text-md-right">Choose your image for slide</label>
                            <div class="col-md-6">
                                                                <label class="control-label small" for="Image">image (jpg/png):</label> <input type="file" name="image"  class="form-control  @error('Image') is-invalid @enderror" value="{{ old('Image') }}">
                         {{--       <div class="custom-file" style="margin-top: 12px">
                                    <input type="file" class="custom-file-input @error('Image') is-invalid @enderror" value="{{ old('image') }}" name="image">
                                    @error('Image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror


                                </div>--}}

                            </div>
                        </div>

                        <hr>
                        <div class="form-group row ">
                            <div class="col-md-7  text-right ">
                                <button type="submit" class="btn btn-primary" style="background-color: #428bca">
                                    Add To Slide
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection