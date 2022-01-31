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
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Profile</span>
                </a>
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
        <table class="table table-light table-hover text-center">
            <thead class="table-info">
                <tr>
                    {{-- <th>Image</th> --}}
                    <th>Event Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eveMy as $myEve)
                <tr>
                    {{-- <td><img src="/storage/blog_images/{{$item->file}}" class="img-thumbnail rounded-pill" alt=""/></td> --}}
                    <td class="border-bottom-info">{{$myEve->eventName}}</td>
                    <td class="border-bottom-info">
                        <a href="{{url('/ngoProfile',$myEve->id)}}" class="btn btn-outline-info btn-sm">View</a>
                    </td>
                </tr>     
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
