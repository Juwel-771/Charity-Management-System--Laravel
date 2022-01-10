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
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>NGO's</span>
                </a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Donors</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('blogform')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Post Blog</span>
                </a>
            </li>

            {{-- <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  Blog
                </a>
              
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><button class="btn btn-primary"><a class="dropdown-item" href="#">Action</a></button></li>
                  <li><button class="btn btn-info"><a class="dropdown-item" href="#">Another action</a></button></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div> --}}

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Post News</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Contac Request</span></a>
            </li>

            <li class="nav-item">
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
            </li>

            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->

    <div id="content-wrapper" class="d-flex flex-column">

    </div>
</x-app-layout>
