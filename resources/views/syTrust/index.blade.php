
@extends('layout')


@section('content')


    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="2000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">
            @php($i=0)
            @foreach ($slides as $slide)
                <!-- Slide 1 -->
                    <div class="carousel-item @if($i==0) active @endif"
                         style="background-image: url('{{asset('storage/images/' . $slide->image)}}')">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animated fadeInDown"> {{$slide->title}}</h2>
                                <p class="animated fadeInUp">{{ \Illuminate\Support\Str::limit($slide->desc, $limit = 120, $end = '...') }}</p>

                               <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
                            </div>
                        </div>
                    </div>
                    @php($i++)
                @endforeach
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </section><!-- End Hero -->




    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
        <div class="container-fluid">

            <div class="row counters">
                @foreach ($numbers as $num)
                <div class="col-lg-4 col-6 text-center">
                  <span data-purecounter-start="0" data-purecounter-end="{{$num->num}}" data-purecounter-duration="1"
                          class="purecounter"></span>
                    <p>{{$num->title}}</p>
                </div>

                @endforeach

            </div>

        </div>



{{--        //section news v1--}}
{{--    </section><!-- End Counts Section -->--}}

{{--    <!-- ======= Testimonials Section ======= -->--}}
{{--    <section id="testimonials" class="testimonials section-bg">--}}
{{--        <div class="container-fluid">--}}

{{--            <div class="section-title">--}}

{{--                <h3><span>News</span> </h3>--}}
{{--                <p>This is our news in all fields and in all governeratos.</p>--}}
{{--            </div>--}}

{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-xl-10">--}}

{{--                    <div class="row">--}}
{{--                        @foreach ($news as $newsy)--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="testimonial-item">--}}
{{--                                <img src="{{asset('storage/images/' . $newsy->image)}}" class="testimonial-img" alt="">--}}
{{--                                <h3>{{$newsy->title}}</h3>--}}
{{--                                <h4>{{$newsy->dateOfNew}}</h4>--}}
{{--                                <h4>--}}
{{--                                <ul style="display: inline">--}}
{{--                                @foreach ($newsy->governorates as $gov)--}}
{{--                                        <li>{{$gov->name}}</li>--}}
{{--                                @endforeach--}}
{{--                                </ul></h4>--}}
{{--                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                                    {{$newsy->description}}--}}
{{--                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}

{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div><!-- End testimonial-item -->--}}
{{--                        @endforeach--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="testimonial-item mt-4 mt-lg-0">--}}
{{--                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">--}}
{{--                                <h3>Sara Wilsson</h3>--}}
{{--                                <h4>Designer</h4>--}}
{{--                                <p>--}}
{{--                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid--}}
{{--                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet--}}
{{--                                    legam anim culpa.--}}
{{--                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div><!-- End testimonial-item -->--}}

{{--                        <div class="col-lg-6">--}}
{{--                            <div class="testimonial-item mt-4">--}}
{{--                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">--}}
{{--                                <h3>Jena Karlis</h3>--}}
{{--                                <h4>Store Owner</h4>--}}
{{--                                <p>--}}
{{--                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem--}}
{{--                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint--}}
{{--                                    minim.--}}
{{--                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div><!-- End testimonial-item -->--}}

{{--                        <div class="col-lg-6">--}}
{{--                            <div class="testimonial-item mt-4">--}}
{{--                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">--}}
{{--                                <h3>Matt Brandon</h3>--}}
{{--                                <h4>Freelancer</h4>--}}
{{--                                <p>--}}
{{--                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim--}}
{{--                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem--}}
{{--                                    dolore labore illum veniam.--}}
{{--                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div><!-- End testimonial-item -->--}}

{{--                        <div class="col-lg-6">--}}
{{--                            <div class="testimonial-item mt-4">--}}
{{--                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">--}}
{{--                                <h3>John Larson</h3>--}}
{{--                                <h4>Entrepreneur</h4>--}}
{{--                                <p>--}}
{{--                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster--}}
{{--                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam--}}
{{--                                    culpa fore nisi cillum quid.--}}
{{--                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div><!-- End testimonial-item -->--}}

{{--                        <div class="col-lg-6">--}}
{{--                            <div class="testimonial-item mt-4">--}}
{{--                                <img src="assets/img/testimonials/testimonials-6.jpg" class="testimonial-img" alt="">--}}
{{--                                <h3>Emily Harison</h3>--}}
{{--                                <h4>Store Owner</h4>--}}
{{--                                <p>--}}
{{--                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>--}}
{{--                                    Eius ipsam praesentium dolor quaerat inventore rerum odio. Quos laudantium adipisci--}}
{{--                                    eius. Accusamus qui iste cupiditate sed temporibus est aspernatur. Sequi officiis ea--}}
{{--                                    et quia quidem.--}}
{{--                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div><!-- End testimonial-item -->--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
    </section><!-- End Testimonials Section -->





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
                @endforeach
{{--                <br><br><br><br><br><br><br>--}}
{{--    <div class="pagination-sm">--}}
{{--                    {{ $news->links() }}--}}
{{--       </div>--}}
{{--                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">--}}
{{--                    <div class="card">--}}
{{--                        <img src="assets/img/about-boxes-2.jpg" class="card-img-top" alt="...">--}}
{{--                        <div class="card-icon">--}}
{{--                            <i class="ri-calendar-check-line"></i>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title"><a href="">Our Plan</a></h5>--}}
{{--                            <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">--}}
{{--                    <div class="card">--}}
{{--                        <img src="assets/img/about-boxes-3.jpg" class="card-img-top" alt="...">--}}
{{--                        <div class="card-icon">--}}
{{--                            <i class="ri-movie-2-line"></i>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title"><a href="">Our Vision</a></h5>--}}
{{--                            <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet. </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>

        </div>
    </section><!-- End About Boxes Section -->







{{--    <!-- ======= Contact Section ======= -->--}}
{{--    <section id="contact" class="contact section-bg">--}}
{{--        <div class="container-fluid">--}}

{{--            <div class="section-title">--}}
{{--                <h2>Contact</h2>--}}
{{--                <h3>Get In Touch With <span>Us</span></h3>--}}
{{--                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque--}}
{{--                    vitae autem.</p>--}}
{{--            </div>--}}

{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-xl-10">--}}
{{--                    <div class="row">--}}

{{--                        <div class="col-lg-6">--}}

{{--                            <div class="row justify-content-center">--}}

{{--                                <div class="col-md-6 info d-flex flex-column align-items-stretch">--}}
{{--                                    <i class="bx bx-map"></i>--}}
{{--                                    <h4>Address</h4>--}}
{{--                                    <p>A108 Adam Street,<br>New York, NY 535022</p>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 info d-flex flex-column align-items-stretch">--}}
{{--                                    <i class="bx bx-phone"></i>--}}
{{--                                    <h4>Call Us</h4>--}}
{{--                                    <p>+1 5589 55488 55<br>+1 5589 22548 64</p>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 info d-flex flex-column align-items-stretch">--}}
{{--                                    <i class="bx bx-envelope"></i>--}}
{{--                                    <h4>Email Us</h4>--}}
{{--                                    <p>contact@example.com<br>info@example.com</p>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 info d-flex flex-column align-items-stretch">--}}
{{--                                    <i class="bx bx-time-five"></i>--}}
{{--                                    <h4>Working Hours</h4>--}}
{{--                                    <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>--}}
{{--                                </div>--}}

{{--                            </div>--}}

{{--                        </div>--}}

{{--                        <div class="col-lg-6">--}}
{{--                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-6 form-group">--}}
{{--                                        <label for="name">Your Name</label>--}}
{{--                                        <input type="text" name="name" class="form-control" id="name" required>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-6 form-group mt-3 mt-md-0">--}}
{{--                                        <label for="email">Your Email</label>--}}
{{--                                        <input type="email" class="form-control" name="email" id="email" required>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group mt-3">--}}
{{--                                    <label for="subject">Subject</label>--}}
{{--                                    <input type="text" class="form-control" name="subject" id="subject" required>--}}
{{--                                </div>--}}
{{--                                <div class="form-group mt-3">--}}
{{--                                    <label for="message">Message</label>--}}
{{--                                    <textarea class="form-control" name="message" rows="8" required></textarea>--}}
{{--                                </div>--}}
{{--                                <div class="my-3">--}}
{{--                                    <div class="loading">Loading</div>--}}
{{--                                    <div class="error-message"></div>--}}
{{--                                    <div class="sent-message">Your message has been sent. Thank you!</div>--}}
{{--                                </div>--}}
{{--                                <div class="text-center">--}}
{{--                                    <button type="submit">Send Message</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}


@endsection