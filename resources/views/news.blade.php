<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Charifit</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
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

    <!-- header-start -->
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
                                <a href="{{ route('register') }}"
                                    class="text-sm ml-3 mt-4 btn btn-info btn-sm">Register</a>
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
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="#">Blog</a></li>
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
    <!-- header-end -->

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3 class="text-dark border border-info">News Day</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->


    <!--================Start Of News Area =================-->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
           <div class="row">
              <div class="col-lg-8 posts-list">
                  @foreach ($docu as $news)
                 <div class="single-post">
                    <div class="feature-img">
                       <img class="img-fluid" src="/storage/news_images/{{$news->cover_image}}" alt="">
                    </div>
                    <div class="blog_details">
                       <h2>
                        {{$news->heading}}
                       </h2>
                       <ul class="blog-info-link mt-3 mb-4">
                          <li><a href="#"><i class="fa fa-user"></i> {{$news->category}} </a></li>
                          <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                       </ul>
                  
                       <p>
                        {{$news->paragraph_one}}
                       </p>
                       <div class="quote-wrapper">
                          <div class="quotes">
                            {{$news->paragraph_two}}
                          </div>
                       </div>
                       <p>
                        {{$news->paragraph_three}}
                       </p>
                       <p>
                        {{$news->paragraph_four}}
                       </p>
                    </div>
                    @endforeach
                 </div>
                 <div class="comments-area">
                    <h4>05 Comments</h4>
                    <div class="comment-list">
                        @foreach ($com as $comm)
                       <div class="single-comment justify-content-between d-flex">
                          <div class="user justify-content-between d-flex">
                             <div class="thumb">
                                <img src="img/comment/comment_2.png" alt="">
                             </div>
                             <div class="desc">
                                <p class="comment my-4">
                                  {{$comm->comment}}
                                </p>
                                <div class="d-flex justify-content-between">
                                   <div class="d-flex align-items-center">
                                      <h5>
                                         <a href="#">{{$comm->name}}</a>
                                      </h5>
                                      <p class="date">December 4, 2017 at 3:12 pm </p>
                                   </div>
                                   <div class="reply-btn">
                                      <a href="#" class="btn-reply text-uppercase">reply</a>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       @endforeach
                    </div>
                 </div>
                 <div class="comment-form">
                    <h4>Leave a Reply</h4>
                    <form action="/news" method="POST">
                        @csrf
                       <div class="row">
                          <div class="col-12">
                             <div class="form-group">
                                <textarea class="form-control w-100" name="comment" cols="30" rows="9"
                                   placeholder="Write Comment"></textarea>
                             </div>
                          </div>
                          <div class="col-sm-6">
                             <div class="form-group">
                                <input class="form-control" name="name" type="text" placeholder="Name">
                             </div>
                          </div>
                          <div class="col-sm-6">
                             <div class="form-group">
                                <input class="form-control" name="email" type="email" placeholder="Email">
                             </div>
                          </div>
                          <div class="col-12">
                             <div class="form-group">
                                <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                             </div>
                          </div>
                       </div>
                       <div class="form-group">
                          <button type="submit" class="button button-contactForm btn_1 boxed-btn">Comment</button>
                       </div>
                    </form>
                 </div>
              </div>
              </div>
        </div>
     </section>
    <!--================End of News Area =================-->

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

    <!-- JS here -->
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
    <script>
        $('.datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar"></span>'
            }
        });

        $('.timepicker').timepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-clock-o"></span>'
            }
        });
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script>
</body>
</html>
