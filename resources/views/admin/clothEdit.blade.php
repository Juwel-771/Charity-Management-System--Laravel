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
    <div id="wrapper" class="bg-info">

    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    {{-- <img class="card-img img_opacity" src="{{ asset('img/cloth_form.jpg')}}" alt="Card image"> --}}
                    <div class="">
                        <div class="row d-flex justify-content-center my-3">
                            <div class="col-sm-6 fw-light fs-5 bg-info border border-info py-3">
                                <h2>Donor Information: </h2>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <form action="/clothEdit" method="POST">
                                @csrf
                                <div class="d-flex justify-content-center">
                                    <div class="col-sm-6">
                                        <label for="firstName" class="form-label">First Name: </label>
                                        <input type="text" name="firstName" value="{{$cloth->firstName}}" class="form-control">
                                    </div>
    
                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label">Last Name: </label>
                                        <input type="text" name="lastName" value="{{$cloth->lastName}}" class="form-control">
                                </div>
                                </div>                 
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-12">

                                    <label for="mobilePhone" class="form-label">Mobile Phone: </label>
                                        <input type="text" name="mobilePhone" value="{{$cloth->mobilePhone}}" class="form-control">

                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-12">
                                    <label for="email" class="form-label">E-mail: </label>
                                        <input type="email" name="email" value="{{$cloth->email}}" class="form-control">
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-12">

                                    <label for="town" class="form-label">Town: </label>
                                        <input type="text" name="town" value="{{$cloth->town}}" class="form-control">
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-6">
                                    <label for="state" class="form-label">State: </label>
                                        <input type="text" name="state" value="{{$cloth->state}}" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label for="postCode" class="form-label">Post Code: </label>
                                        <input type="text" name="postCode" value="{{$cloth->postCode}}" class="form-control">
                                </div>
                            </div>


                            <br>
                            <div class="row d-flex justify-content-center my-3">
                                <div class="col-sm-12 fw-light fs-5 bg-info border border-info py-3">
                                    <h2>Cloth Information: </h2>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-12">
                                        <h2 class="fw-bold fs-4 mb-2">Please Select Your Cloth Types: </h2>
                                        <div class="form-check-inline">
                                            <label class="form-check-label" for="exampleCheck1">Male</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label" for="exampleCheck1">Female</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label" for="exampleCheck1">Kids</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label" for="exampleCheck1">Old</label>
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="text" name="checkBox" value="{{$cloth->checkBox}}" class="form-control"><br>
                                        </div>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-6">
                                    <label for="town" class="form-label">Size: </label>
                                        <input type="text" name="size" value="{{$cloth->size}}" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label for="town" class="form-label">Quantity: </label>
                                        <input type="text" name="quantity" value="{{$cloth->quantity}}" class="form-control">
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-6">
                                    <label for="town" class="form-label">Location: </label>
                                        <input type="text" name="location" value="{{$cloth->location}}" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label for="town" class="form-label">Cloth Name: </label>
                                        <input type="text" name="colthName" value="{{$cloth->colthName}}" class="form-control">
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-6">
                                    <label for="town" class="form-label">Status: </label>
                                        <input type="text" name="status" value="{{$cloth->status}}" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <label for="town" class="form-label">Comment: </label>
                                        <input type="text" name="comment" value="{{$cloth->comment}}" class="form-control">
                                </div>
                            </div>
                            <div class="row">                       
                                <div class="col-sm-4">
                                    <div class="mt-5 text-center">
                                        <button class="btn btn-info text-white" type="submit">Approve</button>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mt-5 text-center">
                                        <a href="{{url('/destroy_cloth',$cloth->id)}}" class="btn btn-info text-white" type="submit">Reject</a>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mt-5 text-center">
                                        <a href="#" class="btn btn-info text-white" type="submit">Back</a>
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

        <!-- End of Sidebar -->

    </div>
</x-app-layout>
