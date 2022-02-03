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

    <div id="wrapper">

        <!-- Sidebar -->
        <!-- End of Sidebar -->
        {{-- Here in page there is problem you need too fix it --}}
        <!-- Content Wrapper -->

        <div id="content-wrapper" class="d-flex flex-column ml-5">
            <div class="container">
                <div class="row">
                    <h3>Update Blog</h3>
                    <div class="col-sm-8">
                        <div class="row d-flex justify-content-center mt-3">
                            @if (session()->has('message'))
                                <div class="alert alert-success my-3">
                                        {{session('message')}}
                                </div>
                            @endif
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row d-flex justify-content-center my-4">
                                    <div class="col-sm-10">
                                        <label for="file">Upload Image: </label>
                                        <input type="file" class="form-control" name="file">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center my-4">
                                    <div class="col-sm-10">
                                        <label for="date" class="form-label">Date: </label>
                                        <input type="date" name="date" class="form-control">
                                    </div>
                                </div>

                                <div class="row d-flex justify-content-center my-4">
                                    <div class="col-sm-10">
                                        <label for="heading" class="form-label">Heading: </label>
                                        <input type="text" name="heading" class="form-control py-4">
                                    </div>
                                </div>

                                <div class="row d-flex justify-content-center my-4">
                                    <div class="col-sm-10">
                                        <label for="paragraph" class="form-label">Paragraph: </label>
                                        <textarea name="paragraph" cols="60" rows="10"></textarea><br>
                                    </div>
                                </div>

                                <div class="row d-flex justify-content-center my-4">
                                    <div class="col-sm-10">
                                        <label for="category" class="form-label">Category </label>
                                        <input type="text" name="category" class="form-control">
                                    </div>
                                </div>

                                <div class="row d-flex justify-content-center my-4">
                                    <div class="col-sm-10">
                                        <label for="Commnets" class="form-label">Comments </label>
                                        <input name="comment" type="text" class="form-control py-5"></input>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col p-2 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-info btn-lg">Update</button>
                                    </div>
                                </div>
                            </form>
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
