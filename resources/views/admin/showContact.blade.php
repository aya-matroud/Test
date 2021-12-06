@extends('admin.controlPanel')

@section('content')

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
        {!! $contact->Links() !!}
    </div>

@endsection