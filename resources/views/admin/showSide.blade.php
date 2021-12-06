@extends('admin.controlPanel')

@section('content')

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="container" style="margin-top: 60px">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-lg-10"><h2>Slide <b style="color: #428bca">Details</b></h2></div>
                </div>
                <div class="row">
                    <div class="col-lg-10">
                        <a type="submit" href="/slide/create" class="btn btn-primary add-new" style="background: #428bca;border: 2px solid #428bca;margin: 8px" ><i class="fa fa-plus" ></i> Add New</a>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($slides as $slide)
                <tr>
                    <td>{{ $slide->id }}</td>
                    <td>{{ $slide->title }}</td>
                    <td>{{ $slide->desc }}</td>
                    <td><img src="{{asset('storage/images/' . $slide->image)}}" width="60px" height="60px"></td>

                    <td>
                        <form action='{{ url('slide/' .$slide->id) }}' method="post">

                            @csrf
                            @method('DELETE')
                            <button  style="background-color: white;color: #428bca;border: white;margin: 8px" type="submit" value="delete" title="Delete" data-toggle="tooltip"><i class="bx bx-trash"></i></button>
                        </form>

                        <a href="slide/{{$slide->id}}/edit" class=" btn-primary" style="background-color: white;color: #428bca;border: white;margin: 12px"   title="Delete" data-toggle="tooltip"><i class="bx bxs-edit-alt"></i></a>


                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $slides->Links() !!}
    </div>
@endsection