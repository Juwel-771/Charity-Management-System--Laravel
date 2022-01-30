<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hello') }}
        </h2>
    </x-slot>
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
    <div id="wrapper" class="bg-danger">
    <div id="wrapper" class="bg-info">

        <!-- Sidebar -->
        <!-- End of Sidebar -->
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" width="150px" src="/storage/volunteer_images/{{$recruit->file}}">
                        <span class="font-weight-bold">{{$recruit->firstName}}</span>
                        <span class="text-black-50">{{$recruit->email}}</span>
                        <span></span>
                    </div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <form action="/recruitVolunteer" method="POST">
                        @csrf
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="labels">First Name</label>
                                <input type="text" name="firstName" class="form-control" placeholder="first name" value="{{$recruit->firstName}}">
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Last Name</label>
                                <input type="text" name="lastName" class="form-control" value="{{$recruit->lastName}}" placeholder="last">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Mobile Number</label>
                                <input type="text" name="phone" class="form-control" placeholder="enter phone number" value="{{$recruit->phone}}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Address Line 1</label>
                                <input type="text" name="address_one" class="form-control" placeholder="enter address line 1" value="{{$recruit->address_one}}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Address Line 2</label>
                                <input type="text" name="address_two" class="form-control" placeholder="enter address line 2" value="{{$recruit->address_two}}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Postcode</label>
                                <input type="text" name="postalCode" class="form-control" placeholder="enter postal code" value="{{$recruit->postalCode}}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">State</label>
                                <input type="text" name="state" class="form-control" placeholder="enter address line 2" value="{{$recruit->state}}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">City</label>
                                <input type="text" name="city" class="form-control" placeholder="enter city" value="{{$recruit->city}}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Email ID</label>
                                <input type="text" name="email" class="form-control" placeholder="enter email id" value="{{$recruit->email}}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Education</label>
                                <input type="text" name="education" class="form-control" placeholder="education" value="{{$recruit->education}}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Description: </label>
                                <textarea name="description" class="form-control"  cols="30" rows="10">{{$recruit->description}}</textarea>
                            </div>

                            <div class="col-md-12">
                                <label class="labels">Work Time: </label>
                                <input type="text" name="workTime" class="form-control" placeholder="work Time" value="{{$recruit->workTime}}">
                            </div>

                            <div class="col-md-12">
                                <label class="labels">Work Day: </label>
                                <input type="text" name="category" class="form-control" placeholder="Work Day" value="{{$recruit->category}}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="labels">Country</label>
                                <input type="text" name="country" class="form-control" placeholder="country" value="{{$recruit->country}}">
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Post Office</label>
                                <input type="text" name="postalOffice" class="form-control" placeholder="state" value="{{$recruit->postalOffice}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-white">
                                <div class="mt-5 text-center">
                                    <button class="btn btn-info text-dark" type="submit">Recruit</button>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="mt-5 text-center">
                                    <a href="{{url('/availableVolun')}}" class="btn btn-info text-dark" type="submit">Back</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- Content Wrapper -->

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
