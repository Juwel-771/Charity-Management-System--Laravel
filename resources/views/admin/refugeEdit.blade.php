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

    <div id="content-wrapper" class="d-flex flex-column">
        <div class="container">
            <div class="row" >
                <h1 class="text-center my-5 text-black">Refuge Charity Form</h1>
                <div class="col-md-10">
                    <div class="row d-flex justify-content-center mt-3">
                        <form action="" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="d-flex justify-content-center my-4">
                                <div class="col-sm-10">
                                    <label for="ngoName" class="form-label">Organization Name: </label>
                                    <input type="text" name="ngoName" value="{{$ref->ngoName}}" class="form-control">
                                </div>
                            </div>
    
                            <div class="row d-flex justify-content-center my-4">
                                <div class="col-sm-10">
                                    <label for="email" class="form-label">E-mail: </label>
                                    <input type="email" name="email" value="{{$ref->email}}" class="form-control py-4">
                                </div>
                            </div>
    
    
                            <div class="row d-flex justify-content-center my-4">
                                <div class="col-sm-10">
                                    <label for="ESTD" class="form-label">ESTD : </label>
                                    <input type="date" name="ESTD" value="{{$ref->ESTD}}" class="form-control">
                                </div>
                            </div>
    
                            <div class="row d-flex justify-content-center my-4">
                                <div class="col-sm-10">
                                    <label for="website" class="form-label">Web Site: </label>
                                    <input type="text" name="website" value="{{$ref->website}}" class="form-control">
                                </div>
                            </div>
                          
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-10">
                                    <label for="description" class="form-label">About Us:  </label>
                                        <textarea name="description" class="form-control" cols="78" rows="3">
                                            {{$ref->description}}</textarea><br>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-10">
                                        <textarea name="description_two" value="" class="form-control"cols="78" rows="3">{{$ref->description_two}}</textarea><br>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-10">
                                        <textarea name="description_three" value="" class="form-control"cols="78" rows="3">{{$ref->description_three}}</textarea><br>
                                </div>
                            </div> 
                           
                            </div>
                            <div class="row">
                                <div class="col p-2 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-dark">Update</button>
                                </div>
                                <div class="col p-2 d-flex justify-content-center">
                                    <a href="{{url('refugeCharity')}}" class="btn btn-dark">Back</a>
                                </div>
                            </div>           
                        </form>
                        
                    </div>
                    @if (session()->has('message'))
                    <div class="alert alert-success my-3">
                            {{session('message')}}
                    </div>
                @endif
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
