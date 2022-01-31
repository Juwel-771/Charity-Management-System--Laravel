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
                <h1 class="text-center my-5">Events Form</h1>
                <div class="col-md-10">
                    <div class="row d-flex justify-content-center mt-3">
                        <form action="/event" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row d-flex justify-content-center my-4">
                                <div class="col-sm-10">
                                    <label for="file">Upload Even Image: </label>
                                    <input type="file" class="form-control" name="file">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center my-4">
                                <div class="col-sm-10">
                                    <label for="orgName" class="form-label">Organization Name: </label>
                                    <input type="text" name="orgName" class="form-control">
                                </div>
                            </div>
    
                            <div class="row d-flex justify-content-center my-4">
                                <div class="col-sm-5">
                                    <label for="firstName" class="form-label">Paricipant First Name: </label>
                                    <input type="text" name="firstName" class="form-control">
                                </div>
                                <div class="col-sm-5">
                                    <label for="lastName" class="form-label">Paricipant Last Name: </label>
                                    <input type="text" name="lastName" class="form-control">
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
                                    <label for="eventName" class="form-label">Event Name: </label>
                                    <input type="text" name="eventName" class="form-control py-4">
                                </div>
                            </div>
    
                            <div class="row d-flex justify-content-center my-4">
                                <div class="col-sm-10">
                                    <label for="date" class="form-label">Event Date: </label>
                                    <input type="date" name="date" class="form-control">
                                </div>
                            </div>
    
                            <div class="row d-flex justify-content-center my-4">
                                <div class="col-sm-10">
                                    <label for="time" class="form-label">Event Time:  </label>
                                    <input type="time" name="time" class="form-control">
                                </div>
                            </div>
    
                            <div class="row d-flex justify-content-center my-4">
                                <div class="col-sm-10">
                                    <label for="location" class="form-label">Location of Event: </label>
                                    <input name="location" type="text" class="form-control"></input>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-10">
                                    <select class="custom-select form-control" name="eventType">
                                        <option selected>Type of Event</option>
                                        <option value="Personal Wellness">Personal Wellness</option>
                                        <option value="Leadership">Leadership</option>
                                        <option value="Scholarship">Scholarship</option>
                                        <option value="Academic Excellence">Academic Excellence</option>
                                        <option value="Fundraiser">Fundraiser</option>
                                        <option value="Service/Philanthropy">Service/Philanthropy</option>
                                        <option value="Social">Social</option>
                                        <option value="Risk Management">Risk Management</option>
                                        <option value="Alumnae">Alumnae</option>
                                        <option value="Brotherhood">Brotherhood</option>
                                        <option value="Sisterhood">Sisterhood</option>
                                        <option value="Parents">Parents</option>
                                        <option value="othere">othere</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-10">
                                    <select class="custom-select form-control" name="eventSponsor">
                                        <option selected>Event Sponsored/Co-Sponsored By:</option>
                                        <option value="Own Organization">Own Organization</option>
                                        <option value="SGA">SGA</option>
                                        <option value="University Department">University Department</option>
                                        <option value="National Department">National Department</option>
                                        <option value="Community Organization">Community Organizationy</option>
                                        <option value="othere">othere</option>
                                    </select>
                                </div>
                            </div><br>
                          
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-10">
                                    <label for="description" class="form-label">Event Description:  </label>
                                        <textarea name="description" class="form-control"cols="78" rows="3"></textarea><br>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-10">
                                    <label for="purpose" class="form-label">Purpose of Event:  </label>
                                        <textarea name="purpose" class="form-control"cols="78" rows="3"></textarea><br>
                                </div>
                            </div>
                            
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-10">
                                    <label for="promote" class="form-label">How will you/ how did you promote the event:   </label>
                                        <textarea name="promote" class="form-control"cols="78" rows="3"></textarea><br>
                                </div>
                            </div> 
                           
                            <div class="row">
                                <div class="col p-2 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-info btn-lg">Submit</button>
                                </div>
                                <div class="col p-2 d-flex justify-content-center">
                                    <a href="#" class="btn btn-info btn-lg">Back</a>
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
