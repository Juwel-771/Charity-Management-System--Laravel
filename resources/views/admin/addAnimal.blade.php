<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hello') }}
        </h2>
    </x-slot>

    <div id="wrapper" class="bg-info">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Panel</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Pages Collapse Menu -->

            <li class="nav-item">                  
                <a class="nav-link" href="{{url('adminProfile')}}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseNGO"
                aria-expanded="true" aria-controls="collapseNGO" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>NGO's</span>
                </a>
                <div id="collapseNGO" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{url('animalCharity')}}">Animal Charity</a>
                        <a class="collapse-item" href="#">Child Welfare Charity</a>
                        <a class="collapse-item" href="#">Environment Charity</a>
                        <a class="collapse-item" href="#">Education Charity</a>
                        <a class="collapse-item" href="#">Health Charity</a>
                        <a class="collapse-item" href="#">Human Service Charity</a>
                        <a class="collapse-item" href="#">Refuge Charity</a>
                        <a class="collapse-item" href="#">Social Service</a>
                        <a class="collapse-item" href="#">Victim Welfare Charity</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseNGOAdd"
                aria-expanded="true" aria-controls="collapseNGOAdd" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Add NGO's</span>
                </a>
                <div id="collapseNGOAdd" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{url('addAnimal')}}">Animal Charity</a>
                        <a class="collapse-item" href="#">Child Welfare Charity</a>
                        <a class="collapse-item" href="#">Environment Charity</a>
                        <a class="collapse-item" href="#">Education Charity</a>
                        <a class="collapse-item" href="#">Health Charity</a>
                        <a class="collapse-item" href="#">Human Service Charity</a>
                        <a class="collapse-item" href="#">Refuge Charity</a>
                        <a class="collapse-item" href="#">Social Service</a>
                        <a class="collapse-item" href="#">Victim Welfare Charity</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Donors</span></a>
            </li>

            <!-- Nav Item - Post -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Blog</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{url('blogform')}}">Post Blog</a>
                        <a class="collapse-item" href="{{url('viewblog')}}">Edit Blog</a>
                    </div>
                </div>
            </li>
        
            <!-- Nav Item - News -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                aria-expanded="true" aria-controls="collapseThree" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>News</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{url('postNews')}}">Post News</a>
                        <a class="collapse-item" href="{{url('viewNews')}}">Edit News</a>
                        <a class="collapse-item" href="{{url('editComment')}}">Edit Comment</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('subscription')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Contact Request</span></a>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Reason For Helping</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Popular Couses</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>News & Update</span></a>
            </li> --}}

            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                aria-expanded="true" aria-controls="collapseFour" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Donation Request</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{url('foodShow')}}">Food Donation</a>
                        <a class="collapse-item" href="{{url('bloodShow')}}">Blood Donation</a>
                        <a class="collapse-item" href="{{url('medicineShow')}}">Medicine Donation</a>
                        <a class="collapse-item" href="{{url('clothShow')}}">Clothe Donation</a>
                        <a class="collapse-item" href="{{url('goodsShow')}}">Donating Goods</a>
                        <a class="collapse-item" href="{{url('financialShow')}}">Financial Donation</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('volunShow')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Volunteer</span></a>
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
                <h1 class="text-center my-5 text-black">Add Animal Charity Form</h1>
                <div class="col-md-10">
                    <div class="row d-flex justify-content-center mt-3">
                        <form action="/addAnimal" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row d-flex justify-content-center my-4">
                                <div class="col-sm-10">
                                    <label for="file">Upload Even Image: </label>
                                    <input type="file" class="form-control" name="file">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center my-4">
                                <div class="col-sm-10">
                                    <label for="ngoName" class="form-label">Organization Name: </label>
                                    <input type="text" name="ngoName" class="form-control">
                                </div>
                            </div>
    
                            <div class="row d-flex justify-content-center my-4">
                                <div class="col-sm-10">
                                    <label for="email" class="form-label">E-mail: </label>
                                    <input type="email" name="email" class="form-control py-4">
                                </div>
                            </div>
    
    
                            <div class="row d-flex justify-content-center my-4">
                                <div class="col-sm-10">
                                    <label for="ESTD" class="form-label">ESTD : </label>
                                    <input type="date" name="ESTD" class="form-control">
                                </div>
                            </div>
    
                            <div class="row d-flex justify-content-center my-4">
                                <div class="col-sm-10">
                                    <label for="website" class="form-label">Web Site: </label>
                                    <input type="text" name="website" class="form-control">
                                </div>
                            </div>
                          
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-10">
                                    <label for="description" class="form-label">About Us:  </label>
                                        <textarea name="description" class="form-control"cols="78" rows="3"></textarea><br>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-10">
                                        <textarea name="description_two" class="form-control"cols="78" rows="3"></textarea><br>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-10">
                                        <textarea name="description_three" class="form-control"cols="78" rows="3"></textarea><br>
                                </div>
                            </div> 
                           
                            </div>
                            <div class="row">
                                <div class="col p-2 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-dark">Add Charity</button>
                                </div>
                                <div class="col p-2 d-flex justify-content-center">
                                    <a href="#" class="btn btn-dark">Back</a>
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
</x-app-layout>