<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hello Admin') }}
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

    <div id="wrapper" class="bg-info">

        <!-- Sidebar -->
        <div class="container-fluid d-flex justify-content-center bg-teal-200 my-5 p-5">
            <div class="row ">
                <div class="col">
                    <h3>Food Request Form</h3>
                    <form action="/foodEdit" method="POST">
                        @csrf 
                        <h2 class="fw-bold fs-4 mb-2">Please Select Your Distric To Donate</h2>
                    <div class="row my-4 d-flex justify-content-center">
                        <div class="col-sm-6">
                                <input type="text" name="firstName"  value="{{$foods->firstName}}" class="form-control">
                                <label class="form-label">First Name: </label>
                        </div>
    
                        <div class="col-sm-6">
                                <input type="text" name="lastName" value="{{$foods->lastName}}" class="form-control">
                                <label class="form-label">Last Name: </label>
                        </div>
                    </div>
    
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-12">
                                    <input type="text" name="mobilePhone" value="{{$foods->mobilePhone}}" class="form-control" ">
                                    <label class="form-label">Mobile Phone: </label>
                            </div>
                        </div>
    
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-12">
                                    <input type="email" name="email" value="{{$foods->email}}" class="form-control">
                                    <label class="form-label">E-mail: </label>
                            </div>
                        </div>
    
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-12">
                                    <input type="text" name="town" value="{{$foods->town}}" class="form-control">
                                    <label class="form-label">Town: </label>
                            </div>
                        </div>
    
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-12">
                                    <input type="text" name="state" value="{{$foods->state}}" class="form-control">
                                    <label class="form-label">State: </label>
                            </div>
                        </div>
    
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-12">
                                    <input type="text" name="postCode" value="{{$foods->postCode}}" class="form-control">
                                    <label class="form-label">Post Code: </label>
                            </div>
                        </div>
    
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-12">
                                    <input type="text" name="heading" value="{{$foods->heading}}" class="form-control">
                                    <label class="form-label">Headline:  </label>
                            </div>
                        </div>                    
    
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-12">
                                    <textarea name="description" class="form-control"  cols="78" rows="10">{{$foods->description}}</textarea>
                                    <br>
                                    <label class="form-label">Description:  </label>
                            </div>
                        </div>
    
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-12">
                                <select class="custom-select form-control" name="selectMethod" value="{{$foods->selectMethod}}">
                                    <option >{{$foods->selectMethod}}</option>
                                    {{-- <option value="Home">{{$foods->selectMethod}}</option>
                                    <option value="Resturant">{{$foods->selectMethod}}</option>
                                    <option value="Convention">{{$foods->selectMethod}}</option> --}}
                                </select>
                            </div>
                        </div>
    
                        <div class="row">                       
                                <div class="col-sm-4">
                                    <div class="mt-5 text-center">
                                        <button class="btn btn-primary text-white" type="submit">Approve</button>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mt-5 text-center">
                                        <a href="{{url('/destroy_food',$foods->id)}}" class="btn btn-primary text-white" type="submit">Reject</a>
                                    </div>
                                </div>
                                {{-- <div class="col-sm-4">
                                    <div class="mt-5 text-center">
                                        <a href="{{url('/delete_food',$foods->id)}}" class="btn btn-primary text-white" type="submit">Delete Donation</a>
                                    </div>
                                </div> --}}
                                <div class="col-sm-4">
                                    <div class="mt-5 text-center">
                                        <a href="{{url('foodShow')}}" class="btn btn-primary text-white" type="submit">Back</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{session('message')}}
                        </div>
                    @endif
                </div>
            </div>
            </div>
        <!-- End of Sidebar -->
    
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
