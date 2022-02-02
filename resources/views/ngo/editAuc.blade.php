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

    </div>
    <div id="content-wrapper" class="d-flex flex-column bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row d-flex justify-content-center mt-3">
                        <div class="col-md-8">
                        @if (session()->has('message'))
                            <div class="alert alert-info my-3">
                                    {{session('message')}}
                            </div>
                        @endif
                        <form action="" method="POST">
                            @csrf
                            @method('PUT')                       

                            <div class="row d-flex justify-content-center my-3">
                                <div class="col-md-8">
                                    <label for="heading" class="form-label">Heading: </label>
                                    <input type="text" name="heading" value="{{$publish->heading}}" class="form-control py-2">
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center my-3">
                                <div class="col-md-8">
                                    <label for="fullName" class="form-label">Name: </label>
                                    <input type="text" name="fullName" value="{{$publish->fullName}}" class="form-control py-2">
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center my-3">
                                <div class="col-md-8">
                                    <label for="heading" class="form-label">Result: </label>
                                    <input type="text" name="result" value="{{$publish->result}}" class="form-control py-2">
                                </div>
                            </div>
                        </div>                            
                    </div>
                    <div class="row">
                        <div class="col p-2 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Publish</button>
                        </div>
                    </div>
                </form>
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
