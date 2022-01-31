<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/card.css">
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
                                    <li><a href="#"> <i class="fa fa-users"></i>Md Juwel</a></li>
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
                            <a href="#">
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
                                    <li><a href="#">Charities</a></li>
                                    <li><a href="#">Auction</a></li>
                                    {{-- <li><a href="#">Donate</a></li> --}}
                                    {{-- <li><a href="#">Project</a></li> --}}
                                    <li><a href="#">About</a></li>
                                </ul>
                            </nav>
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a data-scroll-nav='1' href="#">Make a Donate</a>
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
        <div class="single_slider  d-flex align-items-center slider_vol_1 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider_text ">
                            <span>Get Started Today.</span>
                            <h3> Help the WORLD ! </h3>
                            <p>Be a Part of Something Bigger than Yourself</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" >
            <h1 class="text-center my-5">Volunteer Form</h1>
            <div class="col-md-10">
                <div class="row d-flex justify-content-center mt-3">
                    @if (session()->has('message'))
                        <div class="alert alert-success my-3">
                                {{session('message')}}
                        </div>
                    @endif
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row d-flex justify-content-center my-4">
                            <div class="col-sm-10">
                                <label for="file">Upload Image: </label>
                                <input type="file" class="form-control" name="file">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center my-4">
                            <div class="col-sm-5">
                                <label for="firsName" class="form-label">First Name: </label>
                                <input type="text" name="firstName" class="form-control">
                            </div>
                            <div class="col-sm-5">
                                <label for="lastName" class="form-label">Last Name: </label>
                                <input type="text" name="lastName" class="form-control">
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center my-4">
                            <div class="col-sm-10">
                                <label for="email" class="form-label">E-mail: </label>
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center my-4">
                            <div class="col-sm-10">
                                <label for="education" class="form-label">Education: </label>
                                <input type="text" name="education" class="form-control py-4">
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center my-4">
                            <div class="col-sm-10">
                                <label for="description" class="form-label">Description: </label>
                                <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center my-4">
                            <div class="col-sm-10">
                                <label for="phone" class="form-label">Phone: </label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center my-4">
                            <div class="col-sm-5">
                                <span>Address</span><br>
                                <label for="address_one" class="form-label">Address Line 1 </label>
                                <input type="text" name="address_one" class="form-control">
                            </div>
                            <div class="col-sm-5">
                                <br>
                                <label for="address_two" class="form-label">Address Line 2: </label>
                                <input type="text" name="address_two" class="form-control">
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center my-4">
                            <div class="col-sm-10">
                                <label for="country" class="form-label">Country: </label>
                                <input name="country" type="text" class="form-control"></input>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center my-4">
                            <div class="col-sm-10">
                                <label for="city" class="form-label">City </label>
                                <input name="city" type="text" class="form-control"></input>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center my-4">
                            <div class="col-sm-3">
                                <label for="state" class="form-label">State: </label>
                                <input type="text" name="state" class="form-control">
                            </div>
                            <div class="col-sm-3">
                                <label for="postalCode" class="form-label">Postal Code: </label>
                                <input type="text" name="postalCode" class="form-control">
                            </div>
                            <div class="col-sm-3">
                                <label for="postalOffice" class="form-label">Post Office: </label>
                                <input type="text" name="postalOffice" class="form-control">
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center my-4">
                            <div class="col-sm-10">
                                <h5>Which days of the week do you want to work?</h5>    
                                <div class="form-check-inline">
                                    <input type="checkbox" class="form-check-input" name="category" value="Saturday">
                                    <label class="form-check-label">Saturday</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="checkbox" class="form-check-input" name="category" value="Sunday">
                                    <label class="form-check-label">Sunday</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="checkbox" class="form-check-input" name="category" value="Monday">
                                    <label class="form-check-label">Monday</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="checkbox" class="form-check-input" name="category" value="Tuesday">
                                    <label class="form-check-label">Tuesday</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="checkbox" class="form-check-input" name="category" value="Wednesday">
                                    <label class="form-check-label">Wednesday</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="checkbox" class="form-check-input" name="category" value="Thursday">
                                    <label class="form-check-label">Thursday</label>
                                </div>
                                <div class="form-check-inline">
                                    <input type="checkbox" class="form-check-input" name="category" value="Friday">
                                    <label class="form-check-label">Friday</label>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center my-4">
                            <div class="col-sm-10">
                            <h5>How many hours do you want to work?</h5>
                            <label for="hour" class="form-label mr-1">Select: 8 Hours to 40 Hours</label>
                            <input type="text" name="workTime" class="form-control">
                          </div>
                        </div>
                       
                        <div class="row">
                            <div class="col p-2 d-flex justify-content-center">
                                <button type="submit" class="btn btn-info btn-lg">Submit</button>
                            </div>
                            <div class="col p-2 d-flex justify-content-center">
                                <a href="{{url('volunteer')}}" class="btn btn-info btn-lg">Back</a>
                            </div>
                        </div>           
                    </form>
                </div>
            </div>
        </div>
    </div>
 

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
                                <p>018xxxxxxx <br>
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
