@extends('layout')


@section('content')



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container-fluid">

            <div class="section-title">
                <h2>Contact</h2>
                <h3>Get In Touch With <span>Us</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.</p>
            </div>

            <div class="row justify-content-center">


                <div class="col-xl-10">
                    <div class="row">

                        <div class="col-lg-6">

                            <div class="row justify-content-center">

                                <div class="col-md-6 info d-flex flex-column align-items-stretch">
                                    <i class="bx bx-map"></i>
                                    <h4>Address</h4>
                                    <p>,دمشق , باب شرقي <br> جادة محمد زهير شمس الدين</p>
                                </div>
                                <div class="col-md-6 info d-flex flex-column align-items-stretch">
                                    <i class="bx bx-phone"></i>
                                    <h4>Call Us</h4>
                                    <p>(+963)-11-4731300</p>
                                </div>
                                <div class="col-md-6 info d-flex flex-column align-items-stretch">
                                    <i class="bx bx-envelope"></i>
                                    <h4>Email Us</h4>
                                    <p>info@syriatrust.sy</p>
                                </div>
                                <div class="col-md-6 info d-flex flex-column align-items-stretch">
                                    <i class="bx bx-time-five"></i>
                                    <h4>Working Hours</h4>
                                    <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 5PM</p>
                                </div>

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <form action='{{ url('/contact') }}' method="post" role="form" class="php-email-form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="name">Full name</label>
                                        <input type="text" name="fullName" class="form-control" id="name" >
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <label for="email">E-mail</label>
                                        <input type="email" class="form-control" name="email" id="email" >
                                    </div>
                                </div>
                                <div class="row">
                                <div class="form-group mt-3">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" >
                                </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6 form-group">
                                        <label for="mobile">Mobile Number</label>
                                        <input type="number" name="mobileNumber" class="form-control" id="name" >
                                    </div>
                                    <div class="col-md-6 form-group ">
                                        <label for="email">Governorates</label>
                                        <select name="governorate_id" class="form-control">
                                            @foreach($gov as $g)
                                                <option value="{{$g->id}}"> {{$g->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" name="message" rows="8" ></textarea>
                                </div>





{{--                                  *******method 1 for captcha*********--}}
                                <div class="form-group mt-4 mb-4">
                                    <div class="captcha">
                                        <span>{!! captcha_img('flat') !!}</span>
                                        <button type="button" class="btn btn-primary reload" id="reload" style="background:#428bca;">
                                            &#x21bb;
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                                </div>



{{--                                --}}{{--    /*****method2 for captcha************--}}
{{--                                <div class="form-group row">--}}
{{--                                    <label for="captcha" class="col-md-4 col-form-label text-md-right">Captcha</label>--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <span class="captcha-image">{!! Captcha::img() !!}</span> &nbsp;&nbsp;--}}
{{--                                        <button type="button" class="btn btn-success refresh-button">Refresh</button>--}}
{{--                                        <input id="captcha" type="text" class="form-control @error('captcha') is-invalid @enderror" name="captcha" required>--}}
{{--                                        @error('captcha')--}}
{{--                                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                </div>--}}


                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center">
                                    <button type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
{{--        /*****method1************--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
        $('#reload').click(function () {
            $.ajax({
                type: 'GET',
                url: '{{ route('refreshCaptcha') }}',
                success: function (data) {
                    $(".captcha span").html(data.captcha);
                }
            });

        });

    </script>




{{--    /*****method2************--}}

{{--    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>--}}
{{--    <script type="text/javascript">--}}
{{--        $(document).ready(function() {--}}
{{--            $('.reload').click(function() {--}}
{{--                $.ajax({--}}
{{--                    type: 'get',--}}
{{--                    url: '{{ route('refreshCaptcha') }}',--}}
{{--                    success:function(data) {--}}
{{--                        $('.captcha-image').html(data.captcha);--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}




@endsection