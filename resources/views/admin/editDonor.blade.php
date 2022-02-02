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

        <!-- Sidebar -->
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->

    <div id="content-wrapper" class="d-flex flex-column">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Registration of Donor:</h3> <br>
                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        {{-- <div class="row">
                            <div class="col-md-8 my-2">
                                <label for="file" class="form-label">Upload Image: </label>
                                <input type="file" name="file" class="form-control">
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col-md-8 my-2">
                                <label for="name" class="form-label">Name: </label>
                                <input type="text" name="name" value="{{$donor->name}}" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 my-2">
                                <label for="email" class="form-label">E-mail: </label>
                                <input type="email" name="email" value="{{$donor->email}}" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 my-2">
                                <label for="about" class="form-label">About: </label>
                                <textarea name="about" class="form-control" cols="30" rows="10">{{$donor->about}}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 my-2 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <div class="col-md-4 my-2 d-flex justify-content-center">
                                <a href="{{url('activeDonors')}}" class="btn btn-warning">Back</a>
                            </div>
                        </div>
                    </form>
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
