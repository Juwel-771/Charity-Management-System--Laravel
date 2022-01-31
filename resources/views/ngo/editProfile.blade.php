<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div id="wrapper" class="bg-info">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">NGO</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#profileOne"
                aria-expanded="true" aria-controls="profileOne" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Profile</span>
                </a>
                <div id="profileOne" class="collapse" aria-labelledby="profileOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{url('orgProfile')}}">Profile</a>
                        <a class="collapse-item" href="{{url('editProfile')}}">Edit Profile</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#volunteer" aria-expanded="true"
                    aria-controls="volunteer" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Appointed Volunteer</span>
                </a>
                <div id="volunteer" class="collapse" aria-labelledby="volunteer" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">Available Volunteer</a>
                        <a class="collapse-item" href="#">Recruited Volunteer</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Organize Auction</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Review Post Problem</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#eventsOne"
                aria-expanded="true" aria-controls="eventsOne" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Events</span>
                </a>
                <div id="eventsOne" class="collapse" aria-labelledby="eventsOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{url('event')}}">Organize Events</a>
                        <a class="collapse-item" href="#">My Events</a>
                    </div>
                </div>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Campaingns</span></a>
            </li> --}}

            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->

    <div id="content-wrapper" class="d-flex flex-column">
        <div class="container">
            <div class="row" >
                <h1 class="text-center my-5">Prfile Edit</h1>
                <div class="col-md-12">
                        <form action="/editProfile" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-10">
                                    <label for="file" class="form-label">Upload Image: </label>
                                    <input type="file" name="file" class="form-control">
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-10">
                                    <label for="name" class="form-label">Organization Name: </label>
                                    <input type="text" name="org_Name" class="form-control">
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-10">
                                    <label for="moto" class="form-label">Moto: </label>
                                    <input type="text" name="moto" class="form-control">
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-10">
                                    <label for="about" class="form-label">About Us: </label>
                                   <textarea name="about" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-10 my-3">
                                    <button type="submit" class="btn btn-info">Update Profile</button>
                                </div>
                            </div>
                        </form>
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
