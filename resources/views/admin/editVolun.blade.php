<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hello') }}
        </h2>
    </x-slot>

    <div id="wrapper" class="bg-info">

        <!-- Sidebar -->
        <!-- End of Sidebar -->
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" width="150px" src="/storage/volunteer_images/{{$show->file}}">
                        <span class="font-weight-bold">{{$show->firstName}}</span>
                        <span class="text-black-50">{{$show->email}}</span>
                        <span></span>
                    </div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <form action="/editVolun" method="POST">
                        @csrf
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="labels">First Name</label>
                                <input type="text" name="firstName" class="form-control" placeholder="first name" value="{{$show->firstName}}">
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Last Name</label>
                                <input type="text" name="lastName" class="form-control" value="{{$show->lastName}}" placeholder="last">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Mobile Number</label>
                                <input type="text" name="phone" class="form-control" placeholder="enter phone number" value="{{$show->phone}}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Address Line 1</label>
                                <input type="text" name="address_one" class="form-control" placeholder="enter address line 1" value="{{$show->address_one}}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Address Line 2</label>
                                <input type="text" name="address_two" class="form-control" placeholder="enter address line 2" value="{{$show->address_two}}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Postcode</label>
                                <input type="text" name="postalCode" class="form-control" placeholder="enter postal code" value="{{$show->postalCode}}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">State</label>
                                <input type="text" name="state" class="form-control" placeholder="enter address line 2" value="{{$show->state}}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">City</label>
                                <input type="text" name="city" class="form-control" placeholder="enter city" value="{{$show->city}}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Email ID</label>
                                <input type="text" name="email" class="form-control" placeholder="enter email id" value="{{$show->email}}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Education</label>
                                <input type="text" name="education" class="form-control" placeholder="education" value="{{$show->education}}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Description: </label>
                                <textarea name="description" class="form-control"  cols="30" rows="10">{{$show->description}}</textarea>
                            </div>

                            <div class="col-md-12">
                                <label class="labels">Work Time: </label>
                                <input type="text" name="workTime" class="form-control" placeholder="work Time" value="{{$show->workTime}}">
                            </div>

                            <div class="col-md-12">
                                <label class="labels">Work Day: </label>
                                <input type="text" name="category" class="form-control" placeholder="Work Day" value="{{$show->category}}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="labels">Country</label>
                                <input type="text" name="country" class="form-control" placeholder="country" value="{{$show->country}}">
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Post Office</label>
                                <input type="text" name="postalOffice" class="form-control" placeholder="state" value="{{$show->postalOffice}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mt-5 text-center">
                                    <button class="btn btn-primary text-dark" type="submit">Approve</button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mt-5 text-center">
                                    <a href="#" class="btn btn-danger text-dark" type="submit">Reject</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mt-5 text-center">
                                    <a href="{{url('volunShow')}}" class="btn btn-warning text-dark" type="submit">Back</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- Content Wrapper -->

    </div>
</x-app-layout>
