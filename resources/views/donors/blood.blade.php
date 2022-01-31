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
                                    <li><a href="#"> <i class="fa fa-users"></i>Md Juwe</a></li>
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
    {{-- <div class="container-fluid">
        <div class="row">
            <div class="col">
                <img src="img/blood.jpg" class="img-fluid w-auto mt-5" alt="">
            </div>
        </div>
    </div>
     --}}
     <div class="slider_area">
        <div class="single_slider  d-flex align-items-center blood_bg_img overlay2">
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
    {{-- End of Image Slider --}}

    <div class="container-fluid">
        <div class="row my-5 p-5">
            <div class="col-md-6 ">
                <h1 class="text-size">Donate Blood</h1>
                <p class="fw-light fs-5">
                    Blood donation for transfusion is a vital step in the management of many clinical problems, with the two primary indications being anemia and acute blood loss. Blood donation itself is also used to primarily treat a small subset of medical conditions. At the beginning of the 20th century, Karl Landsteiner identified ABO blood groups, at which time blood typing of individuals was only beginning to be adopted as a universally standard practice.[2] Due to the inability to prevent blood from clotting once removed from the donor and thus store and transfer blood to be delivered when needed later, transfusions were only carried out on a limited basis. Blood was transfused directly from donor to recipient without intervening storage or transport. This method worked for small numbers of patients and only on a small scale, as donors and recipients needed to be connected both in time and space. There was a time when lists of donors were maintained of persons locally available to be called in to donate to patients at any time as needed. Necessity drove the development of more flexible donation and storage practices when World War I began. "On-demand" blood donation was not feasible for such a large scale effort. Soldiers were dying of otherwise non-fatal wounds due mainly to the inability to perform a timely blood transfusion. 
                </p>
            </div>
            <div class="col-md-6">
                <img src="img/blood_blog.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark text-white">
                    <img class="card-img img_opacity" src="{{ asset('img/blood_form.jpg')}}" alt="Card image">
                    <div class="card-img-overlay">
                        <div class="row d-flex justify-content-center">
                            <form action="" method="POST">
                                @csrf
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-6">
                                        <label for="firstName" class="form-label">First Name: </label>
                                        <input type="text" name="firstName" class="form-control">
                                </div>
    
                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label">Last Name: </label>
                                        <input type="text" name="lastName" class="form-control">
                                </div>
                                </div>
                            
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-12">
                                    <label for="mobilePhone" class="form-label">Mobile Phone: </label>
                                        <input type="text" name="mobilePhone" class="form-control">
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-12">
                                    <label for="email" class="form-label">E-mail: </label>
                                        <input type="email" name="email" class="form-control">
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-12">
                                    <label for="town" class="form-label">Town: </label>
                                        <input type="text" name="town" class="form-control">
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-12">
                                    <label for="state" class="form-label">State: </label>
                                        <input type="text" name="state" class="form-control">
                                </div>
                                <div class="col-sm-12">
                                    <label for="postCode" class="form-label">Post Code: </label>
                                        <input type="text" name="postCode" class="form-control">
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-12">
                                    <label for="clinic" class="form-label">Name Your Clinic: </label>
                                        <input type="text" name="clinic" class="form-control">
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-12">
                                    <label for="selectTime" class="form-label">Select Your Time: </label>
                                        <input type="time" name="selectTime" class="form-control" id="email">
                                </div>
                                <div class="col-sm-12">
                                    <label for="postCode" class="form-label">Select Your Date: </label>
                                        <input type="date" name="selectDate" class="form-control" id="email">
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-12">
                                    <label for="postCode" class="form-label">Any Messages?  </label>
                                        <textarea name="description" class="form-control" id="description" cols="78" rows="3"></textarea><br>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-12">
                                    <select class="custom-select form-control" name="bloodGroup">
                                        <option selected>Select Your Blood Group</option>
                                        <option value="A+">A+</option>
                                        <option value="AB+">AB+</option>
                                        <option value="A-">A-</option>
                                        <option value="AB-">AB-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col my-3 p-2 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success">Donate</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
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
