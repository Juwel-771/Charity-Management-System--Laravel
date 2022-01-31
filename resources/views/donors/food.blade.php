<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

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
    <title>Charity</title>
</head>

<body>
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
                        <div class="col-xl-6 col-md-6 col-lg-4">
                            <div class="social_media_links d-none d-lg-block">
                                {{-- <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-pinterest-p"></i>
                            </a> --}}
                                {{-- Login-to-dashboard --}}
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 sm:block">
                                    @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                    @else
                                    <a href="{{ route('login') }}" class="text-sm mt-4 btn bg-green-400 btn-sm">Log
                                        in</a>

                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="text-sm ml-3 mt-4 btn btn-info btn-sm">Register</a>
                                    @endif
                                    @endauth
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="About.html">Blog</a></li>
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
        <div class="single_slider  d-flex align-items-center food_bg_img overlay2">
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

    <div class="container-fluid">
        <div class="row bg-green-200 my-5 p-5">
            <div class="col-md-6 ">
                <h1 class="text-size">Donate Food</h1>
                <p class="fw-light fs-5">How swiftly the world market for food can change could be observed in the
                    mid-2000s. For two decades, leading up to the millennium, global demand for food had increased
                    steadily, along with growth in the world’s population, record harvests, new technologies,
                    improvements in incomes, and the diversification of diets. Food prices continued to decline through
                    2000. However, in 2004, prices for most grains began to rise. Rising production could not keep pace
                    with the even stronger growth in demand. Food stocks became depleted. And then, in 2005, food supply
                    was squeezed by disappointing harvests in major food-producing countries. By 2006, world cereal
                    production had fallen by 2.1 per cent. In 2007, rapid increases in oil prices increased fertilizer
                    and other food production costs.
                </p>
            </div>
            <div class="col-md-6">
                <img src="img/hunger.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-center bg-green-200 my-5 p-5">
        <div class="row ">
            <div class="col">
                <form action="" method="POST">
                    @csrf 
                    <h2 class="fw-bold fs-4 mb-2">Please Select Your Distric To Donate</h2>
                    <div class="form-check-inline">
                        <input type="checkbox" class="form-check-input" name="category[]" value="Dhaka">
                        <label class="form-check-label">Dhaka</label>
                    </div>
                    <div class="form-check-inline">
                        <input type="checkbox" class="form-check-input" name="category[]" value="Chittagong">
                        <label class="form-check-label">Chittagong</label>
                    </div>
                    <div class="form-check-inline">
                        <input type="checkbox" class="form-check-input" name="category[]" value="Rajshahi">
                        <label class="form-check-label">Rajshahi</label>
                    </div>
                    <div class="form-check-inline">
                        <input type="checkbox" class="form-check-input" name="category[]" value="Sylhet">
                        <label class="form-check-label">Sylhet</label>
                    </div>
                    <div class="form-check-inline">
                        <input type="checkbox" class="form-check-input" name="category[]" value="Barishal">
                        <label class="form-check-label">Barishal</label>
                    </div>
                    <div class="form-check-inline">
                        <input type="checkbox" class="form-check-input" name="category[]" value="Khulna">
                        <label class="form-check-label">Khulna</label>
                    </div>
                    <div class="form-check-inline">
                        <input type="checkbox" class="form-check-input" name="category[]" value="Moyamensing">
                        <label class="form-check-label">Moyamensing</label>
                    </div>

                <div class="row my-4 d-flex justify-content-center">
                    <div class="col-sm-6">
                        <label class="form-label">First Name: </label>
                            <input type="text" name="firstName" class="form-control">
                    </div>
                
                    <div class="col-sm-6">
                        <label class="form-label">Last Name: </label>
                            <input type="text" name="lastName" class="form-control">
                    </div>
                </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-12">
                            <label class="form-label">Mobile Phone: </label>
                                <input type="text" name="mobilePhone" class="form-control" ">
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-12">
                            <label class="form-label">E-mail: </label>
                                <input type="email" name="email" class="form-control">
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-12">
                            <label class="form-label">Town: </label>
                                <input type="text" name="town" class="form-control">
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-12">
                            <label class="form-label">State: </label>
                                <input type="text" name="state" class="form-control">
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-12">
                            <label class="form-label">Post Code: </label>
                                <input type="text" name="postCode" class="form-control">
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-12">
                            <label class="form-label">Headline:  </label>
                                <input type="text" name="heading" class="form-control">
                        </div>
                    </div>                    

                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-12">
                            <label class="form-label">Description:  </label>
                                <textarea name="description" class="form-control"  cols="78" rows="10"></textarea>
                                <br>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-12">
                            <select class="custom-select form-control" name="selectMethod">
                                <option selected>Select Method</option>
                                <option value="Home">Home</option>
                                <option value="Resturant">Resturant</option>
                                <option value="Convention">Convention</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col my-2 p-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Donate</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        </div>

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
    <script src="{{asset('js/myscript.js')}}"></script>
</body>

</html>
