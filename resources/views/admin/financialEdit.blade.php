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
        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-md-12">
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-3">
                                    <form action="/financialEdit" method="POST">
                                        @csrf
                                        <label for="firstName" class="form-label">First Name: </label>
                                        <input type="text" name="firstName" value="{{$financials->firstName}}" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                        <label for="lastName" class="form-label">Last Name: </label>
                                        <input type="text" name="lastName" value="{{$financials->lastName}}" class="form-control">
                                </div>
                            </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-6">
                                        <label for="mobilePhone" class="form-label">Mobile Phone: </label>
                                            <input type="number" name="mobilePhone" value="{{$financials->mobilePhone}}" class="form-control">
                                    </div>
                                </div>
    
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-6">
                                        <label for="email" class="form-label">E-mail: </label>
                                        <input type="email" name="email" value="{{$financials->email}}" class="form-control">
                                    </div>
                                </div>
    
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-6">
                                        <label for="town" class="form-label">Town: </label>
                                        <input type="text" name="town" value="{{$financials->town}}" class="form-control">
                                    </div>
                                </div>
    
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-3">
                                        <label for="state" class="form-label">State: </label>
                                        <input type="text" name="state" value="{{$financials->state}}" class="form-control">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="postCode" class="form-label">Post Code: </label>
                                        <input type="number" name="postCode" value="{{$financials->postCode}}" class="form-control">
                                    </div>
                                </div>
                                <br>
    
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-6 mb-4">        
                                                <select class="custom-select form-control" name="payment">
                                                    <option>{{$financials->payment}}</option>
                                                    {{-- <option value="Cash">Cash</option>
                                                    <option value="Mboile Banking">Mboile Banking</option>
                                                    <option value="Bank Cheque">Bank Cheque</option> --}}
                                                </select>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-6">                      
                                        <label for="amount" class="form-label">Amount: </label>
                                        <input type="text" name="amount" value="{{$financials->amount}}" class="form-control">
                                    </div>
                                </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-sm-6">
                                                <label for="description" class="form-label">Donor Notes:  </label>
                                                <textarea name="description"  class="form-control" cols="78" rows="3">{{$financials->description}}</textarea>
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
                                                <a href="{{url('/destroy_food',$financials->id)}}" class="btn btn-primary text-white" type="submit">Reject</a>
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
                            </div>
                        </form>                 
                    </div>
                </div>
        <!-- End of Sidebar -->
        
    
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
