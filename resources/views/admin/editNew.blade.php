@extends('admin.controlPanel')

@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    <div class="container" style="margin-top:90px;;height: 817px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="opacity: 0.4;background-color:black;color: white">
                    <div class="card-header"><h2 style="color: #428bca"><b>Edit News:</b></h2></div>

                    <div class="card-body">
                        {{--                    <form action='{{ url('/admin/updateslide/' .$slide->id) }}' method="post">--}}
                        <form action='{{url('news/'.$news->id)}}' method="post">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="title"
                                       class="col-md-4 col-form-label text-md-right">{{ __('title') }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="text"
                                           class="form-control @error('title') is-invalid @enderror"
                                           value="{{$news->title}}" name="title" autocomplete="title">

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="productionDate"
                                       class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>

                                <div class="col-md-6">
                                    <input id="productionDate" type="text"
                                           class="form-control  @error('content') is-invalid @enderror"
                                           value="{{$news->description}}" name="description" autocomplete="description"
                                           autofocus>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="productionDate"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>

                                <div class="col-md-6">
                                    <input id="productionDate" type="Date"
                                           class="form-control  @error('content') is-invalid @enderror"
                                           value="{{$news->dateOfNew}}" name="dateOfNew" autocomplete="dateOfNew"
                                           autofocus>
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
                                <label class="col-md-4 col-form-label text-md-right">This is the old image</label>
                                <div class="col-md-6">
                                    <img src="{{asset('storage/images/' . $news->image)}}"
                                         class="img-fluid rounded-start"
                                         alt="There is an error">
                                </div>
                            </div>
                            <div class="form-group row">


                                <label for="Image" class="col-md-4 col-form-label text-md-right">Choose your image for
                                    News</label>

                                <div class="col-md-6">
                                    {{--                                <label class="control-label small" for="Image">image (jpg/png):</label> <input type="file" name="Image"  class="form-control  @error('Image') is-invalid @enderror" value="{{ old('Image') }}">--}}
                                    <div class="custom-file" style="margin-top: 12px">
                                        <input type="file" class="custom-file-input " value="{{$news->image}}"
                                               name="image">
                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                        <label class="custom-file-label">Choose file</label>

                                    </div>

                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <label for="governorate"
                                       class="col-md-4 col-form-label text-md-right">Governorates</label>
                                <div class="col-md-6">
                                    <select name="governorates[]" class="form-control" multiple>


{{--                                        @foreach($governorate as $gov)--}}
{{--                                            <option value="{{$gov->id}}"--}}



{{--                                                    @foreach($news->governorates as $govs)--}}
{{--                                                    @if($gov->id == $govs->id)--}}
{{--                                                    selected="selected"--}}
{{--                                                    @endif--}}
{{--                                                    @endforeach--}}
{{--                                            >--}}
{{--                                                {{$gov->name}}</option>--}}
{{--                                        @endforeach--}}

                                        @foreach ($governorate as $gov)
{{--                                            <option value="{{ $gov->id }}"--}}
{{--                                                    {{ isset($news) && in_array($gov->id, $news->governorates->pluck('id')->toArray()) ? 'selected' : '' }}>--}}
                                            <option value="{{ $gov->id }}"
                                                     @if (in_array($gov->id, $news->governorates->pluck('id')->toArray()))  selected="true"  @endif >
                                                {{ $gov->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row ">
                                <div class="col-md-7  text-right ">
                                    <button type="submit" class="btn btn-primary" style="background-color: #428bca">
                                        Save Changes
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