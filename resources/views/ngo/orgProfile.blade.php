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
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#profileOne" aria-expanded="true"
                    aria-controls="profileOne" href="#">
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
                <a class="nav-link collapsed" data-toggle="collapse" data-target="#eventsOne" aria-expanded="true"
                    aria-controls="eventsOne" href="#">
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
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">
                                <div class="card" style="width: 50rem;">
                                    @foreach ($profile as $item)
                                    <img src="/storage/ngo_images/{{$item->file}} " class="card-img-top" alt=" ">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h4 style="font-size: 8rem; color: black">{{$item->org_Name}}</h4>
                                <span style="font-size: 3rem">{{$item->moto}}</span>
                                <p>{{$item->about}}</p>
                            </div>
                        </div>
                        {{-- <div class="row my-5">
                        <div class="col-md-4">
                            <a href="{{url('editProfile')}}" class="btn btn-outline-info">Edit Profile</a>
                    </div>
                </div> --}}
                @endforeach
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
