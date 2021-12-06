@extends('layout')

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

                                <a href="news/{{$slide->id}}/edit" class=" btn-primary" style="background-color: white;color: #428bca;border: white;margin: 12px"   title="Delete" data-toggle="tooltip"><i class="bx bxs-edit-alt"></i></a>


                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
        <div class="container" style="margin-top: 60px">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-lg-10"><h2>News <b style="color: #428bca">Details</b></h2></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
{{--                            <a type="submit" href="/admin/create" class="btn btn-primary add-new" ><i class="fa fa-plus"></i> Add New</a>--}}
                            <a type="submit" href="/news/create" class="btn btn-primary add-new" style="background: #428bca;border: 2px solid #428bca;margin: 8px"><i class="fa fa-plus"></i> Add New</a>
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
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($news as $new)
                    <tr>
                        <td>{{ $new->id }}</td>
                        <td>{{ $new->title }}</td>
                        <td>{{ $new->description }}</td>

                        <td><img src="{{asset('storage/images/' . $new->image)}}" width="60px" height="60px"></td>
                        <td>{{ $new->dateOfNew }}</td>

                        <td>
                            <form action='{{ url('news/' .$new->id) }}' method="post">

                                @csrf
                                @method('DELETE')
                                <button class="delete btn-primary" style="background-color: white;color: #428bca;border: white;margin: 8px" type="submit" value="delete" title="Delete" data-toggle="tooltip"><i class="bx bx-trash"></i></button>
                            </form>

{{--                            <a href="/admin/editslide/{{$slide->id}}" class=" btn-primary"   title="Delete" data-toggle="tooltip"><i class="bx bxs-edit-alt"></i></a>--}}
                            <a href="news/{{$new->id}}/edit" class=" btn-primary"  style="background-color: white;color: #428bca;border: white;margin: 12px" title="Delete" data-toggle="tooltip"><i class="bx bxs-edit-alt"></i></a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
            <div class="container" style="margin-top: 60px">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-lg-10"><h2>Contacts <b style="color: #428bca">Details</b></h2></div>
                        </div>

                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Mobile Number</th>
                        <th>Governorate</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($contact as $con)
                        <tr>
                            <td>{{ $con->id }}</td>
                            <td>{{ $con->fullName }}</td>
                            <td>{{ $con->subject }}</td>
                            <td> {{ $con->mobileNumber }}</td>
                            <td> {{ $con->governorate->name }}</td>
                            <td> {{ $con->email }}</td>
                            <td> {{ $con->message }}</td>

                            <td>

                                <form action='{{ url('contact/' .$con->id) }}' method="post">

                                    @csrf
                                    @method('DELETE')
                                    <button class="delete btn-primary" style="background-color: white;color: #428bca;border: white" type="submit" value="delete" title="Delete" data-toggle="tooltip"><i class="bx bx-trash"></i></button>
                                </form>


                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif






@endsection
