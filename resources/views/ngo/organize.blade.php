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
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{url('orgProfile')}}">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Profile</span>
                </a>
            </li> --}}
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
                        <a class="collapse-item" href="{{url('availableVolun')}}">Available Volunteer</a>
                        <a class="collapse-item" href="{{url('selectedVolunteer')}}">Recruited Volunteer</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#auction" aria-expanded="true"
                    aria-controls="auction" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Auction</span>
                </a>
                <div id="auction" class="collapse" aria-labelledby="auction" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{url('organize')}}">Organize Auction</a>
                        <a class="collapse-item" href="#">Live Bid</a>
                        <a class="collapse-item" href="#">Result</a>
                    </div>
                </div>
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
                        <a class="collapse-item" href="{{url('myEvent')}}">My Events</a>
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
            <div class="row">
                <div class="col-md-8">
                    <div class="row d-flex justify-content-center mt-3">
                        @if (session()->has('message'))
                            <div class="alert alert-info my-3">
                                    {{session('message')}}
                            </div>
                        @endif
                        <form action="/organize" method="POST" enctype="multipart/form-data">
                            @csrf
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

                            <div class="d-flex justify-content-center my-4">
                                <div class="col-sm-5">
                                    <label for="date" class="form-label">Start Time: </label>
                                    <input type="time" name="time_one" class="form-control">
                                </div>
                                <div class="col-sm-5">
                                    <label for="date" class="form-label">End Time: </label>
                                    <input type="time" name="time_two" class="form-control">
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
                                    <label for="paragraph" class="form-label">Craft Details: </label>
                                    <textarea name="paragraph" class="form-control" cols="60" rows="10"></textarea><br>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center my-4">
                                <div class="col-sm-10">
                                    <label for="category" class="form-label">Category: </label>
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
                                    <button type="submit" class="btn btn-info btn-lg">Post</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
