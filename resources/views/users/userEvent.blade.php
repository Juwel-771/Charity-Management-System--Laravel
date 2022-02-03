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
                <a class="nav-link" href="{{url('voluntUser')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Volunter</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="userEvent">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Event</span></a>
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
        <div id="content-wrapper" class="d-flex flex-column">
            <div class="col-md-12">
                <h3>Charities Event</h3>
                <table class="table table-hover text-center">
                    <thead class="table-primary">
                        <tr>
                            {{-- <th>Image</th> --}}
                            <th>Organization Name</th>
                            <th>Event Name</th>
                            <th>Time</th>
                            <th>Date</th>
                            <th>Event Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userEvent as $userEvent)
                        <tr>
                            {{-- <td><img src="/storage/blog_images/{{$item->file}}" class="img-thumbnail rounded-pill" alt=""/></td> --}}
                            <td class="border-bottom-primary">{{$userEvent->orgName}}</td>
                            <td class="border-bottom-primary">{{$userEvent->eventName}}</td>
                            <td class="border-bottom-primary">{{$userEvent->time}}</td>
                            <td class="border-bottom-primary">{{$userEvent->date}}</td>
                            <td class="border-bottom-primary">{{$userEvent->eventType}}</td>
                            <td class="border-bottom-primary">
                                <a href="{{url('eventProfile',$userEvent->id)}}" class="btn btn-primary btn-sm">Join Event</a>
                            </td>
                        </tr>     
                        @endforeach
                    </tbody>
                </table>
                @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{session('message')}}
                            </div>
                 @endif
            </div> 
        </div>
    </div>
    
</div>
</x-app-layout>
