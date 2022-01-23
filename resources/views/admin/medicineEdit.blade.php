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
    <div id="wrapper" class="bg-warning">

        <!-- Sidebar -->
        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-md-12 bg-warning">
                    <div class="card">
                        {{-- <img class="card-img img_opacity" src="{{ asset('img/medicine_form.jpg')}}" alt="Card image"> --}}
                        <div class=""> 
                            {{-- card-img-overlay --}}
                            <div class="row d-flex justify-content-center my-3">
                                <div class="col-sm-6 fw-light fs-5 bg-warning text-center border border-success py-3">
                                    <h2>Donor Information: </h2>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <form action="/medicineEdit" method="POST">
                                    @csrf
                                    <div class="d-flex justify-content-center">
                                        <div class="col-sm-6">
                                            <label for="firstName" class="form-label">First Name: </label>
                                            <input type="text" name="firstName" value="{{$medicine->firstName}}" class="form-control"><br>
                                    </div>
        
                                    <div class="col-sm-6">
                                        <label for="lastName" class="form-label">Last Name: </label>
                                            <input type="text" name="lastName" value="{{$medicine->lastName}}" class="form-control">
                                    </div>
                                    </div>
                            
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-12">
                                        <label for="mobilePhone" class="form-label">Mobile Phone: </label>
                                            <input type="text" name="mobilePhone" value="{{$medicine->mobilePhone}}" class="form-control">
                                    </div>
                                </div>
    
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-12">
                                        <label for="email" class="form-label">E-mail: </label>
                                            <input type="email" name="email" value="{{$medicine->email}}" class="form-control">
                                    </div>
                                </div>
    
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-12">
                                        <label for="town" class="form-label">Town: </label>
                                            <input type="text" name="town" value="{{$medicine->town}}"  class="form-control">
                                    </div>
                                </div>
    
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-6">
                                        <label for="state" class="form-label">State: </label>
                                            <input type="text" name="state" value="{{$medicine->state}}"  class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="postCode" class="form-label">Post Code: </label>
                                            <input type="text" name="postCode" value="{{$medicine->postCode}}" class="form-control">
                                    </div>
                                </div>
    
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-6">
                                        <label for="postCode" class="form-label">Select Your Time: </label>
                                            <input type="time" name="selectTime" value="{{$medicine->selectTime}}" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="postCode" class="form-label">Select Your Date: </label>
                                            <input type="date" name="selectDate" value="{{$medicine->selectDate}}" class="form-control">
                                    </div>
                                </div>
    
                                <br>
                                <div class="row d-flex justify-content-center my-3">
                                    <div class="col-sm-6 fw-light text-center fs-5 bg-warning border border-success py-3">
                                        <h2 class="">Medicine  Info: </h2>
                                    </div>
                                </div>
    
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-12">
                                        <label for="town" class="form-label">Drug Name: </label>
                                            <input type="text" name="drugName" value="{{$medicine->drugName}}"  class="form-control">
                                    </div>
                                </div>
    
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-6">
                                        <label for="town" class="form-label">Lot Number(if avaiable): </label>
                                            <input type="text" name="lotNumber" value="{{$medicine->lotNumber}}" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="town" class="form-label">Expiration: </label>
                                            <input type="text" name="expireTime" value="{{$medicine->expireTime}}" class="form-control">
                                    </div>
                            
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-6">
                                        <label for="town" class="form-label">Source: </label>
                                            <input type="text" name="source" value="{{$medicine->source}}" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="town" class="form-label">Quantity Remaining: </label>
                                            <input type="text" name="quantity" value="{{$medicine->quantity}}"  class="form-control">
                                    </div>
                                    
                                </div>
    
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-6">
                                        <label for="town" class="form-label text-dark">NDC#: </label>
                                            <input type="text" name="ndc" value="{{$medicine->ndc}}"  class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="town" class="form-label text-dark">Drug Strength: </label>
                                            <input type="text" name="drugStrength" value="{{$medicine->drugStrength}}"  class="form-control">
                                    </div>
                                    
                                </div>
    
                                <div class="row">                       
                                    <div class="col-sm-4">
                                        <div class="mt-5 text-center">
                                            <button class="btn btn-warning" type="submit">Approve</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mt-5 text-center">
                                            <a href="{{url('/destroy_medi',$medicine->id)}}" class="btn btn-warning" type="submit">Reject</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mt-5 text-center">
                                            <a href="{{url('/medicineShow')}}" class="btn btn-warning" type="submit">Back</a>
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
