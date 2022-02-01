<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/app.css">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/themify-icons.css">
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/gijgo.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/slicknav.css">
    <link rel="stylesheet" href="/css/style.css">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body>
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
        @endauth
    </div>
    @endif

    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-lg-8">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-user"></i> Md Juwel</a></li>
                                    <li><a href="#"> <i class="fa fa-envelope"></i>juwelmd416@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        {{-- <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a> --}}
                        {{-- Login-to-dashboard --}}
                        {{-- @if (Route::has('login'))
                                        <div class="hidden fixed top-0 right-0 sm:block">
                                            @auth
                                            <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="text-sm mt-4 btn bg-green-400 btn-sm">Log
                            in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-sm ml-3 mt-4 btn btn-info btn-sm">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif --}}
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo">
                            <a href="{{url('/')}}">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="main-menu">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="{{url('blog')}}">Blog</a></li>
                                    <li><a href="#">Donations<i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a class="dropdown-item" href="{{url('food')}}">Food Donation</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{url('blood')}}">Blood Donation</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{url('medicine')}}">Medicine
                                                    Donation</a></li>
                                            <li><a class="dropdown-item" href="{{url('clothing')}}">Cloth
                                                    Donation</a></li>
                                            <li><a class="dropdown-item" href="{{url('financial')}}">Financial
                                                    Donation</a></li>
                                            <li><a class="dropdown-item" href="{{url('goods')}}">Donating Goods</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('charities')}}">Charities</a></li>
                                    <li><a href="{{url('auctions')}}">Auction</a></li>
                                    {{-- <li><a href="#">Donate</a></li> --}}
                                    {{-- <li><a href="#">Project</a></li> --}}
                                    <li><a href="#">About</a></li>
                                </ul>
                            </nav>
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a href="{{url('makeDonation')}}">Make a Donate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>

    {{-- image slideer --}}
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider_text ">
                            <span>Get Started Today.</span>
                            <h3> Help the children
                                When They Need</h3>
                            <p>With so much to consume and such little time, coming up <br>
                                with relevant title ideas is essential</p>
                            <a href="#" class="boxed-btn3">Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of image slider --}}

    <!-- counter_area_start  -->
    <div class="counter_area mt-4">
        <div class="container">
            <div class="counter_bg overlay">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single_counter d-flex align-items-center justify-content-center">
                            <div class="icon">
                                <i class="flaticon-calendar"></i>
                            </div>
                            <div class="events">
                                <h3 class="counter">120</h3>
                                <p>Finished Event</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single_counter d-flex align-items-center justify-content-center">
                            <div class="icon">
                                <i class="flaticon-heart-beat"></i>
                            </div>
                            <div class="events">
                                <h3 class="counter">120</h3>
                                <p>Finished Event</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single_counter d-flex align-items-center justify-content-center">
                            <div class="icon">
                                <i class="flaticon-in-love"></i>
                            </div>
                            <div class="events">
                                <h3 class="counter">120</h3>
                                <p>Finished Event</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single_counter d-flex align-items-center justify-content-center">
                            <div class="icon">
                                <i class="flaticon-hug"></i>
                            </div>
                            <div class="events">
                                <h3 class="counter">120</h3>
                                <p>Finished Event</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter_area_end  -->

    {{-- body --}}
    <div class="container-fluid mt-5 mb-5 bg-indigo-100">
        <div class="row mx-5">
            <div class="col-md-4">
                <div class="card" style="width: 25rem;">
                    <img src="img/volunteer.jpg" class="card-img-top" style="width: 25rem;" alt="...">
                    <div class="card-body">
                        <a href="{{url('volunteer')}}" class="card-text btn btn-outline-success">Volunteer</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 25rem;">
                    <img src="img/event.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="{{url('events')}}" class="card-text btn btn-outline-success">Events</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 25rem;">
                    <img src="img/camp.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="" class="card-text btn btn-outline-success">Campaigns</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-5 mx-5">
            <div class="col-md-4">
                <div class="card" style="width: 25rem;">
                    <img src="img/sdg.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="" class="card-text btn btn-outline-success">SDG's Goals</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 25rem;">
                    <img src="img/auction.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="" class="card-text btn btn-outline-success">Auction History</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 25rem;">
                    <img src="img/ngo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="" class="card-text btn btn-outline-success">NGO's</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <img src="{{ asset('img/support.png')}}" alt="">
            </div>
            <div class="col-md-6">
                <div class="mt-4 ml-4">
                    <div class="vl bg-success"></div>
                    <p class="fw-bold fs-1">Helping others is the </p>
                    <p class="fw-bold fs-1">way of help ourselves</p>
                    <div class="mt-5">
                        <p class="fw-light fs-4">
                            The purpose of life is not to be happy. It is to be useful, to be honorable, to be
                            compassionate, to have it make some difference that you have lived and lived well.
                        </p>
                    </div>
                    <div class="my-5">
                        <a href="#" class="btn btn-success text-gray-900">Our Impact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- reson_area_start  -->
    <div class="reson_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Reason of Helping</span></h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="img/help/1.png" alt="">
                            </div>
                        </div>
                        <div class="help_content">
                            <h4>Collecting Fund</h4>
                            <p>Lorem ipsum, or lipsum as it is
                                sometimes known, is dummy
                                text used in laying out print.</p>
                            <a href="#" class="read_more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="img/help/2.png" alt="">
                            </div>
                        </div>
                        <div class="help_content">
                            <h4>Blood Camp</h4>
                            <p>Lorem ipsum, or lipsum as it is
                                sometimes known, is dummy
                                text used in laying out print.</p>
                            <a href="#" class="read_more">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="img/help/3.png" alt="">
                            </div>
                        </div>
                        <div class="help_content">
                            <h4>Friendly Volunteer</h4>
                            <p>Lorem ipsum, or lipsum as it is
                                sometimes known, is dummy
                                text used in laying out print.</p>
                            <a href="#" class="read_more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- reson_area_end  -->

    {{-- Sponser Ship --}}
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark text-white">
                    <img class="card-img img_opacity" src="{{ asset('img/Sponsr.jpg')}}" alt="Card image">
                    <div class="card-img-overlay">
                        <p class="card-text sponsr_text text-center text-gray-900 mt-48">Supported People</p>
                        <p class="card-text text-center mt-10 text-dark font-weight-light fs-4">There is nothing more
                            beautiful than someone who goes out of their way to make life beautiful for others</p>

                        <div class="row row-cols-1 row-cols-md-6 g-2 mt-5">
                            <div class="col">
                                <div class="card" style="width: 12rem; height: 8rem">
                                    <img src="img/spn1.png" class="card-img-top" alt="...">
                                </div>
                            </div>

                            <div class="col">
                                <div class="card" style="width: 12rem; height: 8rem">
                                    <img src="img/spn2.png" class="card-img-top" alt="...">
                                </div>
                            </div>

                            <div class="col">
                                <div class="card" style="width: 12rem; height: 8rem">
                                    <img src="img/spn3.png" class="card-img-top" alt="...">
                                </div>
                            </div>

                            <div class="col">
                                <div class="card" style="width: 12rem; height: 8rem">
                                    <img src="img/spn4.png" class="card-img-top" alt="...">
                                </div>
                            </div>

                            <div class="col">
                                <div class="card" style="width: 12rem; height: 8rem">
                                    <img src="img/spn5.png" class="card-img-top" alt="...">
                                </div>
                            </div>

                            <div class="col">
                                <div class="card text-center" style="width: 12rem; height: 8rem">
                                    <img src="img/spn5.png" class="card-img-top" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Home Blog --}}
    <div class="container my-5  ">
        <div class="row">

            <div class="col-md-6">
                <div class="mt-4 ml-4">
                    <div class="vl bg-success"></div>
                    <p class="fw-bold fs-1">Find in our Blog </p>
                    <div class="mt-5">
                        <p class="fw-light fs-6 text-left">
                            It may be a platform for fundraising rather than a charity in its own right, but
                            dealing with thousands of causes daily, Just Giving’s blog is a wealth of
                            information and inspiration. For anyone considering launching a fundraising
                            campaign, Just Giving‘s posts are full of ideas and tip to help you maximise the
                            amount you raise. For everyone else, the blog is full of great stories and
                            initiatives worth knowing about.
                        </p>

                        <p class="fw-light fs-6 text-left">
                            With so much bad news in the world today, from global disasters to national budget
                            cuts, sometimes it’s good to be reminded that not everything out there is terrible.
                            In fact, there’s a lot going on across the globe and country which is truly great –
                            but receives little attention.
                            To help you look on the brighter side, and to inspire you to “be the change you want
                            to see”, we’ve collected five of our very favourite charity blogs.
                            <br>
                            From national charities with very specific causes, to larger initiatives with
                            broader intentions.
                        </p>
                    </div>
                    <div class="my-5">
                        <a href="#" class="btn btn-success text-gray-900">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/blog.png')}}" alt="">
            </div>
        </div>
    </div>
    {{-- End of Home Blog --}}

    <!-- latest_activites_area_start  -->
    <div class="latest_activites_area">
        <div class=" video_bg_1 video_activite  d-flex align-items-center justify-content-center">
            <a class="popup-video" href="https://www.youtube.com/watch?v=MG3jGHnBVQs">
                <i class="flaticon-ui"></i>
            </a>
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="activites_info">
                        <div class="section_title">
                            <h3> <span>Watch Our Latest </span><br>
                                Activities</h3>
                        </div>
                        <p class="para_1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do
                            eiusmod tempor incididunt ut labore dolore magna aliqua.
                            enim minim veniam, quis nostrud exercitation.</p class="para_1">
                        <p class="para_2">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do
                            eiusmod tempor incididunt ut labore dolore magna aliqua.
                            enim minim veniam, quis nostrud exercitation. tempor
                            incididunt ut labore dolore magna aliqua. enim minim
                            veniam, quis nostrud exercitation.</p>
                        <a href="{{url('makeDonation')}}" class="boxed-btn4">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- latest_activites_area_end  -->

    <!-- popular_causes_area_start  -->
    <div class="popular_causes_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Popular Causes</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="causes_active owl-carousel">
                        <div class="single_cause">
                            <div class="thumb">
                                <img src="img/causes/1.png" alt="">
                            </div>
                            <div class="causes_content">
                                <div class="custom_progress_bar">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 30%;"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                            <span class="progres_count">
                                                30%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="balance d-flex justify-content-between align-items-center">
                                    <span>Raised: $5000.00 </span>
                                    <span>Goal: $9000.00 </span>
                                </div>
                                <h4>Help us to Send Food</h4>
                                <p>The passage is attributed to an
                                    unknown typesetter in the century
                                    who is thought</p>
                            </div>
                        </div>
                        <div class="single_cause">
                            <div class="thumb">
                                <img src="img/causes/2.png" alt="">
                            </div>
                            <div class="causes_content">
                                <div class="custom_progress_bar">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 30%;"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                            <span class="progres_count">
                                                30%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="balance d-flex justify-content-between align-items-center">
                                    <span>Raised: $5000.00 </span>
                                    <span>Goal: $9000.00 </span>
                                </div>
                                <h4>Clothes For Everyone</h4>
                                <p>The passage is attributed to an
                                    unknown typesetter in the century
                                    who is thought</p>
                            </div>
                        </div>
                        <div class="single_cause">
                            <div class="thumb">
                                <img src="img/causes/3.png" alt="">
                            </div>
                            <div class="causes_content">
                                <div class="custom_progress_bar">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 30%;"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                            <span class="progres_count">
                                                30%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="balance d-flex justify-content-between align-items-center">
                                    <span>Raised: $5000.00 </span>
                                    <span>Goal: $9000.00 </span>
                                </div>
                                <h4>Water For All Children</h4>
                                <p>The passage is attributed to an
                                    unknown typesetter in the century
                                    who is thought</p>
                               
                            </div>
                        </div>
                        <div class="single_cause">
                            <div class="thumb">
                                <img src="img/causes/1.png" alt="">
                            </div>
                            <div class="causes_content">
                                <div class="custom_progress_bar">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 30%;"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                            <span class="progres_count">
                                                30%
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="balance d-flex justify-content-between align-items-center">
                                    <span>Raised: $5000.00 </span>
                                    <span>Goal: $9000.00 </span>
                                </div>
                                <h4>Help us to Send Food</h4>
                                <p>The passage is attributed to an
                                    unknown typesetter in the century
                                    who is thought</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular_causes_area_end  -->

    <!-- news__area_start  -->
    <div class="news__area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>News & Updates</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="news_active owl-carousel">
                        <div class="single__blog d-flex align-items-center">
                            <div class="thum">
                                <img src="img/news/1.png" alt="">
                            </div>
                            <div class="newsinfo">
                                <span>July 18, 2019</span>
                                <a href="single-blog.html">
                                    <h3>Pure Water Is More
                                        Essential</h3>
                                </a>
                                <p>The passage experienced a
                                    surge in popularity during the
                                    1960s when used it on their
                                    sheets, and again.</p>
                                <a class="read_more" href="{{url('/news')}}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{url('/news')}}" class="btn btn-success my-4">Read More</a>
        </div>
    </div>
    <!-- news__area_end  -->

    {{-- Sign Up to Hear from us --}}
    <div class="container-fluid bg-green-300">
        <div class="row">
            <div class="col my-5">
                <div class="vl bg-success"></div>
                <h2 class="fw-bold fs-1 mx-5 my-5">Sign Up to Hear from us</h2>
                <p class="fw-bold fs-6 my-4">Sign up here to receive our quarterly newsletter via email.</p>
                <div class="row">
                    <div class="col-sm-2">
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" name="subFirst" placeholder="First Name" class="form-control"
                                    id="first_name">
                                <label for="first_name" class="form-label">First Name: </label>
                            </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="mb-3">
                            <input type="text" name="subLast" placeholder="Last Name" class="form-control"
                                id="first_name">
                            <label for="first_name" class="form-label">Last Name: </label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <input type="email" name="subEmail" placeholder="example@mail.com" class="form-control"
                                id="first_name">
                            <label for="first_name" class="form-label">E-mail: </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success text-dark" style="width: 18rem">Sign
                                in</button>
                        </div>
                    </div>
                    </form>
                    @if (session()->has('message'))
                    <div class="alert alert-success mt-4">
                        {{session('message')}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    {{-- end of sign-up --}}

    <!-- footer_start  -->
    <footer class="footer bg-green-300">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <p class="address_text">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit, sed do
                                <br> eiusmod tempor incididunt ut labore.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul class="links">
                                <li><a href="#">Donate</a></li>
                                <li><a href="#">Sponsor</a></li>
                                <li><a href="#">Fundraise</a></li>
                                <li><a href="#">Volunteer</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contacts
                            </h3>
                            <div class="contacts">
                                <p>0123456789 <br>
                                    juwelmd416@gmail.com <br>
                                    Flat 20, Paharikha Society,
                                    Chittagong, Bangaldesh
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Top News
                            </h3>
                            <ul class="news_links">
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/news/news_1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>School for African
                                                Childrens</h4>
                                        </a>
                                        <span>Jun 12, 2019</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/news/news_2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>School for African
                                                Childrens</h4>
                                        </a>
                                        <span>Jun 12, 2019</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="row">
                    <div class="bordered_1px "></div>
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p class="text-center ">
                                Copyright &copy; 
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                    Md Juwel
                            </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->




    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/ajax-form.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/scrollIt.js')}}"></script>
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/gijgo.min.js')}}"></script>
    <!--contact js-->
    <script src="{{asset('js/contact.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
