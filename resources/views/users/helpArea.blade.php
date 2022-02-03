<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            
        </h2>
    </x-slot>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Users: </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
    
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('userProfile')}}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Profile</span>
                </a>
            </li>

            <!-- Nav Item - Charts -->
            {{-- <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Favourite Charity</span></a>
            </li> --}}

            <!-- Nav Item - Tables -->
            {{-- <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Donation History</span></a>
            </li> --}}

            <li class="nav-item">
                <a class="nav-link" href="{{url('helpArea')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Help Your Area</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Volunter</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Campaingns</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Auctions</span></a>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>  
                    <span>Feedback</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Make Donation</span></a>
            </li> --}}

            <li class="nav-item">
                <a class="nav-link" href="{{url('joinProfile')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Join</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->

    <div id="content-wrapper" class="d-flex flex-column">
        <div class="container">
            <div class="row" >
                <h1 class="text-center my-5">Cover Your Area</h1>
                <div class="col-md-10">
                    <div class="row d-flex justify-content-center mt-3">
                        @if (session()->has('message'))
                            <div class="alert alert-success my-3">
                                    {{session('message')}}
                            </div>
                        @endif
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row d-flex justify-content-center my-4">
                                <div class="col-sm-10">
                                    <label for="file">Upload Your Area Image: </label>
                                    <input type="file" class="form-control" name="file">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center my-4">
                                <div class="col-sm-10">
                                    <label for="problem" class="form-label">Name Problem: </label>
                                    <input type="text" name="problem" class="form-control">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center my-4">
                                <div class="col-sm-5">
                                    <label for="firsName" class="form-label">First Name: </label>
                                    <input type="text" name="firstName" class="form-control">
                                </div>
                                <div class="col-sm-5">
                                    <label for="lastName" class="form-label">Last Name: </label>
                                    <input type="text" name="lastName" class="form-control">
                                </div>
                            </div>
    
                            <div class="row d-flex justify-content-center my-4">
                                <div class="col-sm-10">
                                    <label for="email" class="form-label">E-mail: </label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
    
                            <div class="row d-flex justify-content-center my-4">
                                <div class="col-sm-10">
                                    <label for="phone" class="form-label">Phone: </label>
                                    <input type="number" name="phone" class="form-control">
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center my-4">
                                <div class="col-sm-10">
                                    <label for="description" class="form-label">Describe Your Area: </label>
                                    <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                            </div>
    
    
                            <div class="row d-flex justify-content-center my-4">
                                <div class="col-sm-5">
                                    <span>Address</span><br>
                                    <label for="address_one" class="form-label">Address Line 1 </label>
                                    <input type="text" name="address_one" class="form-control">
                                </div>
                                <div class="col-sm-5">
                                    <br>
                                    <label for="address_two" class="form-label">Address Line 2: </label>
                                    <input type="text" name="address_two" class="form-control">
                                </div>
                            </div>
    
                            <div class="row d-flex justify-content-center my-4">
                                <div class="col-sm-5">
                                    <label for="city" class="form-label">City </label>
                                    <input name="city" type="text" class="form-control"></input>
                                </div>
                                <div class="col-sm-5"> 
                                        <label for="state" class="form-label">State: </label>
                                        <input type="text" name="state" class="form-control">
                                </div>
                            </div>
    
                            <div class="row d-flex justify-content-center my-4">
                                <div class="col-sm-5">
                                    <label for="postalCode" class="form-label">Postal Code: </label>
                                    <input type="text" name="postalCode" class="form-control">
                                </div>
                                <div class="col-sm-5">
                                    <label for="postalOffice" class="form-label">Post Office: </label>
                                    <input type="text" name="postalOffice" class="form-control">
                                </div>

                            </div>
    
                            <div class="row d-flex justify-content-center my-4">
                                <div class="col-sm-10">
                                    
                                </div>
                            </div>
    
                           
                            <div class="row">
                                <div class="col p-2 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-info btn-lg">Submit</button>
                                </div>
                                <div class="col p-2 d-flex justify-content-center">
                                    <a href="{{url('volunteer')}}" class="btn btn-info btn-lg">Back</a>
                                </div>
                            </div>           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
</x-app-layout>
