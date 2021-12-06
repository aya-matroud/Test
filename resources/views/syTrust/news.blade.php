@extends('layout')


@section('content')



    <section id="about" class="about">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6  d-flex justify-content-center align-items-stretch ">
                    <img src="{{asset('storage/images/' . $news->image)}}" class="img-fluid">
                </div>
              <div class="col-xl-5 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <div class="section-title">

                        <h3><span>{{$news->title}}</span> </h3>
                        <p>

                        </p>
                    </div>

                    {{$news->dateOfNew}}

                    <p>{{$news->description}}</p>

                    @foreach ($news->governorates as $gov)
                   <li><strong>{{$gov->name}}</strong></li>
                     @endforeach


                </div>
            </div>

        </div>
    </section><!-- End About Section -->




@endsection