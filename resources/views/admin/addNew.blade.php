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

    <div class="container" style="margin-top: 90px;height: 586px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="opacity: 0.4;background-color:black;color: white">
                    <div class="card-header"><h2 style="color: #428bca"><b>Add News:</b></h2></div>

                    <div class="card-body">

                        <form action='{{ url('/news') }}' method="post" enctype="multipart/form-data">
                            @csrf


                            <div class="form-group row">
                                <label for="productName" class="col-md-4 col-form-label text-md-right"  >{{ __('title') }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" name="title"   autocomplete="productName" autofocus>

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="productionDate" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>

                                <div class="col-md-6">
                                    <input id="desc" type="text" class="form-control  @error('content') is-invalid @enderror"  value="{{ old('description') }}" name="description"   autocomplete="description" autofocus>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="productionDate" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                                <div class="col-md-6">
                                    <input id="productionDate" type="Date" class="form-control  @error('content') is-invalid @enderror"    name="dateOfNew"   autocomplete="dateOfNew" autofocus>
                                    @error('dateOfNew')
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
                                    <label class="control-label small" for="Image">image (jpg/png):</label> <input type="file" name="image"  class="form-control  @error('image') is-invalid @enderror" value="{{ old('image') }}">
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
                            <div class="form-group row">
                                <label for="Category" class="col-md-4 col-form-label text-md-right">Governorates</label>
                                <div class="col-md-6">
                                    <select name="governorates[]" class="form-control" multiple>
                                       @foreach($governorate as $gov)
                                            <option value="{{$gov->id}}">{{$gov->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row ">
                                <div class="col-md-7  text-right ">
                                    <button type="submit" class="btn btn-primary" style="background-color: #428bca">
                                        Add To News
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