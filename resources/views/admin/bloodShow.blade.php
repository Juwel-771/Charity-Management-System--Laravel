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
                        <a class="collapse-item" href="#">Clothe Donation</a>
                        <a class="collapse-item" href="#">Donating Goods</a>
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
        <div class="col-md-12">
            <table class="table table-light table-hover text-center">
                <thead class="table-danger">
                    <tr>
                        {{-- <th>Image</th> --}}
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blood as $bloods)
                    <tr>
                        {{-- <td><img src="/storage/blog_images/{{$item->file}}" class="img-thumbnail rounded-pill" alt=""/></td> --}}
                        <td class="border-bottom-danger">{{$bloods->firstName}}</td>
                        <td class="border-bottom-danger">{{$bloods->lastName}}</td>
                        <td class="border-bottom-danger">{{$bloods->mobilePhone}}</td>
                        <td class="border-bottom-danger">{{$bloods->email}}</td>
                        <td class="border-bottom-danger">
                            <a href="{{url('/edit_blood',$bloods->id)}}" class="btn btn-danger btn-sm">View</a>
                        </td>
                    </tr>     
                    @endforeach
                </tbody>
            </table>

            @if (session()->has('message'))
                        <div class="alert alert-danger">
                            {{session('message')}}
                        </div>
                    @endif
        </div> 
    </div>
</x-app-layout>