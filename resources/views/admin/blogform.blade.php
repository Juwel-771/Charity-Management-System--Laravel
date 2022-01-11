<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hello') }}
        </h2>
    </x-slot>

    <div id="wrapper">

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
                <a class="nav-link active" href="{{url('blogform')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Post Blog</span></a>
            </li>

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

        <div id="content-wrapper" class="d-flex flex-column ml-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
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

                                <div class="row d-flex justify-content-center my-4">
                                    <div class="col-sm-10">
                                        <label for="heading" class="form-label">Heading: </label>
                                        <input type="text" name="heading" class="form-control py-4">
                                    </div>
                                </div>

                                <div class="row d-flex justify-content-center my-4">
                                    <div class="col-sm-10">
                                        <label for="paragraph" class="form-label">Paragraph: </label>
                                        <textarea name="paragraph" cols="60" rows="10"></textarea><br>
                                    </div>
                                </div>

                                <div class="row d-flex justify-content-center my-4">
                                    <div class="col-sm-10">
                                        <label for="category" class="form-label">Category </label>
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
    </div>
</x-app-layout>