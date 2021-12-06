@extends('layout')


@section('content')


  <!-- ======= news  Section ======= -->
    <section id="about-boxes" class="testimonials section-bg">
        <div class="container-fluid" data-aos="fade-up">
            <div class="section-title">

                <h3><span>News</span> </h3>
                <p>This is our news in all fields and in all governeratos.</p>
            </div>

            <div class="row">
                @foreach ($news as $newsy)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="5">
                        <div class="card">
                            <img src="{{asset('storage/images/' . $newsy->image)}}" class="card-img-top" alt="...">
                            <div class="card-icon">

                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ url('news/' . $newsy->id) }}">{{$newsy->title}}</a></h5>
                                <h4>{{$newsy->dateOfNew}}</h4>
                                {{--                            <ul style="display: inline-block;">--}}
                                {{--                                @foreach ($newsy->governorates as $gov)--}}
                                {{--                                    <li><i class="bx bxl-periscope"></i>{{$gov->name}}</li>--}}
                                {{--                                @endforeach--}}
                                {{--                            </ul>--}}

                                <p class="card-text">
                                    {{ \Illuminate\Support\Str::limit($newsy->description, $limit = 150, $end = '...') }}</p>
                                {{--                              <p>  {{$newsy->description}} </p>--}}
                                <a href="{{ url('news/' . $newsy->id) }}" class="btn-get-started animated fadeInUp scrollto">Read More</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br> <br>
                    <br>
                    <br>
                    <br>
                @endforeach

            </div>

        </div>
    </section><!-- End About Boxes Section -->



@endsection