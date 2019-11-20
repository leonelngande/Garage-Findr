<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

        <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">

        <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

        <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('css/rangeslider.css') }}">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
    <body>

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar container py-0 bg-white" role="banner">

            <!-- <div class="container"> -->
            <div class="row align-items-center">

                <div class="col-12">
                    <h1 class="mb-0 site-logo text-center"><a href="{{route('welcome')}}" class="text-black mb-0">Garage<span class="text-primary">Findr</span>  </a></h1>
                </div>

            </div>
            <!-- </div> -->

        </header>



        <div class="site-blocks-cover overlay" style="background-image: url({{asset('images/hero_2.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">

                    <div class="col-md-12">


                        <div class="row justify-content-center mb-4">
                            <div class="col-md-8 text-center">
                                <h1 class="" data-aos="fade-up">Find Auto Repairs Near You</h1>
                                <p data-aos="fade-up" data-aos-delay="100">You can search by quarter, subdivision, division, and vehicle types supported.</p>
                            </div>
                        </div>

                        <div class="form-search-wrap" data-aos="fade-up" data-aos-delay="200">
                            <form method="post">
                                <div class="row align-items-center">
                                    <div class="col-lg-12 mb-4 mb-xl-0 col-xl-4">
                                        <input type="text" class="form-control rounded" placeholder="What are you looking for?">
                                    </div>
                                    <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                                        <div class="wrap-icon">
                                            <span class="icon icon-room"></span>
                                            <input type="text" class="form-control rounded" placeholder="Location">
                                        </div>

                                    </div>
                                    <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                                        <div class="select-wrap">
                                            <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                            <select class="form-control rounded" name="" id="">
                                                <option value="">All Categories</option>
                                                <option value="">Real Estate</option>
                                                <option value="">Books &amp;  Magazines</option>
                                                <option value="">Furniture</option>
                                                <option value="">Electronics</option>
                                                <option value="">Cars &amp; Vehicles</option>
                                                <option value="">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-2 ml-auto text-right">
                                        <input type="submit" class="btn btn-primary btn-block rounded" value="Search">
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-light">
            <div class="container">

                <div class="overlap-category">
                    <div class="row align-items-stretch no-gutters">
                        <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                            <a href="#" class="popular-category h-100">
                                {{--<span class="icon"><span class="flaticon-pizza"></span></span>--}}
                                <span class="caption mb-2 d-block">Queries Processed</span>
                                <span class="number">219</span>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                            <a href="#" class="popular-category h-100">
                                {{--<span class="icon"><span class="flaticon-car"></span></span>--}}
                                <span class="caption mb-2 d-block">Mechanic Workshops</span>
                                <span class="number">{{count($mechanicWorkshops)}}</span>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                            <a href="#" class="popular-category h-100">
                                {{--<span class="icon"><span class="flaticon-house"></span></span>--}}
                                <span class="caption mb-2 d-block">Quarters</span>
                                <span class="number">{{count($quarters)}}</span>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                            <a href="#" class="popular-category h-100">
                                {{--<span class="icon"><span class="flaticon-books"></span></span>--}}
                                <span class="caption mb-2 d-block">Vehicle Types</span>
                                <span class="number">{{count($vehicleTypes)}}</span>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                            <a href="#" class="popular-category h-100">
                                {{--<span class="icon"><span class="flaticon-bunk-bed"></span></span>--}}
                                <span class="caption mb-2 d-block">Divisions</span>
                                <span class="number">{{count($divisions)}}</span>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                            <a href="#" class="popular-category h-100">
                                {{--<span class="icon"><span class="flaticon-innovation"></span></span>--}}
                                <span class="caption mb-2 d-block">Subdivisions</span>
                                <span class="number">{{count($subdivisions)}}</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="site-section bg-light">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-7 text-left border-primary">
                        <h2 class="font-weight-light text-primary">Mechanic Workshops</h2>
                    </div>
                </div>
                <div class="row mt-5">
                    @foreach($mechanicWorkshops as $workshop)
                        <div class="col-md-4">

                            <div class="d-block d-md-flex listing">
                                <div class="lh-content">
                                    <span class="category">
                                        <span class="icon-map-marker mechanic-card__icon"></span> {{$workshop->quarter->subdivision->division->name}} <small>></small> {{$workshop->quarter->subdivision->name}} <small>></small> {{$workshop->quarter->name}}
                                    </span>
                                    <h3>{{$workshop->name}}</h3>
                                    <address>{{$workshop->address}}</address>
                                    <span class="category">
                                        <a href="tel:{{$workshop->phone}}">
                                            <span class="icon-phone mechanic-card__icon"></span>
                                        </a>
                                        <a href="sms:{{$workshop->phone}}">
                                            <span class="icon-textsms mechanic-card__icon"></span>
                                        </a> {{$workshop->phone}}
                                    </span>
                                </div>
                            </div>
                            {{--<div class="d-block d-md-flex listing">
                                <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_3.jpg')"></a>
                                <div class="lh-content">
                                    <span class="category">Furniture</span>
                                    <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                    <h3><a href="listings-single.html">Wooden Chair &amp; Table</a></h3>
                                    <address>Don St, Brooklyn, New York</address>
                                    <p class="mb-0">
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-secondary"></span>
                                        <span class="review">(3 Reviews)</span>
                                    </p>
                                </div>
                            </div>--}}
                        </div>
                    @endforeach
                    {{--<div class="col-lg-6">

                        <div class="d-block d-md-flex listing">
                            <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_2.jpg')"></a>
                            <div class="lh-content">
                                <span class="category">Real Estate</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="listings-single.html">House with Swimming Pool</a></h3>
                                <address>Don St, Brooklyn, New York</address>
                            </div>
                        </div>
                        <div class="d-block d-md-flex listing">
                            <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_3.jpg')"></a>
                            <div class="lh-content">
                                <span class="category">Furniture</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="listings-single.html">Wooden Chair &amp; Table</a></h3>
                                <address>Don St, Brooklyn, New York</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Reviews)</span>
                                </p>
                            </div>
                        </div>

                        <div class="d-block d-md-flex listing">
                            <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_4.jpg')"></a>
                            <div class="lh-content">
                                <span class="category">Electronics</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="listings-single.html">iPhone X gray</a></h3>
                                <address>Don St, Brooklyn, New York</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Reviews)</span>
                                </p>
                            </div>
                        </div>



                    </div>
                    <div class="col-lg-6">

                        <div class="d-block d-md-flex listing">
                            <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_1.jpg')"></a>
                            <div class="lh-content">
                                <span class="category">Cars &amp; Vehicles</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="listings-single.html">Red Luxury Car</a></h3>
                                <address>Don St, Brooklyn, New York</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Reviews)</span>
                                </p>
                            </div>
                        </div>

                        <div class="d-block d-md-flex listing">
                            <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_2.jpg')"></a>
                            <div class="lh-content">
                                <span class="category">Real Estate</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="listings-single.html">House with Swimming Pool</a></h3>
                                <address>Don St, Brooklyn, New York</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Reviews)</span>
                                </p>
                            </div>
                        </div>
                        <div class="d-block d-md-flex listing">
                            <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_3.jpg')"></a>
                            <div class="lh-content">
                                <span class="category">Furniture</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="listings-single.html">Wooden Chair &amp; Table</a></h3>
                                <address>Don St, Brooklyn, New York</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Reviews)</span>
                                </p>
                            </div>
                        </div>

                    </div>--}}
                </div>
            </div>
        </div>

        <div class="site-section bg-white">
            <div class="container">

                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center border-primary">
                        <h2 class="font-weight-light text-primary">Testimonials</h2>
                    </div>
                </div>

                <div class="slide-one-item home-slider owl-carousel">
                    <div>
                        <div class="testimonial">
                            <figure class="mb-4">
                                <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-3">
                                <p>John Smith</p>
                            </figure>
                            <blockquote>
                                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                            </blockquote>
                        </div>
                    </div>
                    <div>
                        <div class="testimonial">
                            <figure class="mb-4">
                                <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-3">
                                <p>Christine Aguilar</p>
                            </figure>
                            <blockquote>
                                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                            </blockquote>
                        </div>
                    </div>

                    <div>
                        <div class="testimonial">
                            <figure class="mb-4">
                                <img src="images/person_4.jpg" alt="Image" class="img-fluid mb-3">
                                <p>Robert Spears</p>
                            </figure>
                            <blockquote>
                                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                            </blockquote>
                        </div>
                    </div>

                    <div>
                        <div class="testimonial">
                            <figure class="mb-4">
                                <img src="images/person_5.jpg" alt="Image" class="img-fluid mb-3">
                                <p>Bruce Rogers</p>
                            </figure>
                            <blockquote>
                                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
                            </blockquote>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <footer class="site-footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div>
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/rangeslider.min.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>

    </body>
</html>
