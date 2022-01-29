<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
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
    
    <div id="wrapper" class="bg-info">

        <!-- Sidebar -->
        <!-- Content Wrapper -->
            <div class="container-fluid d-flex justify-content-center bg-teal-200 my-5 p-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row d-flex justify-content-center my-5">
                            <div class="col-md-10">
                                <div class="card border-success mb-3" style="max-width: 900px;">
                                    <img src="/storage/events_images/{{$pro_eve->file}}" alt="event image">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$pro_eve->orgName}}</h5>
                                                <div class="card-header">
                                                    <h3>{{$pro_eve->eventName}}</h3>
                                                </div>
                                                <p class="card-text bg-indigo-700">{{$pro_eve->description}}</p><br>
                                                <p class="card-text">{{$pro_eve->purpose}}</p>
                                                <div class="row mt-3">
                                                    <div class="col-sm-6">
                                                        <h5> Event Type: {{$pro_eve->eventType}}</h5>
                                                        <h5> Locatin: {{$pro_eve->location}}</h5>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <h5> Event Time: {{$pro_eve->time}}</h5>
                                                        <h5> Event Date: {{$pro_eve->date}}</h5>
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-sm-12">
                                                        <h3>Out Sponsor: {{$pro_eve->eventSponsor}}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-4">
                                                <div class="col-sm-10">
                                                    <h3>This Event will promoted by: {{$pro_eve->promote}}</h3>
                                                </div>
                                            </div>
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-md-6">
                                                    <a href="#" class="btn btn-outline-info">View Joined Memeber</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="#" class="btn btn-outline-danger">Back</a>
                                                </div>
                                            </div>                                  
                                        </div>
                                    </div>
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
</x-app-layout>
