<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hello') }}
        </h2>
    </x-slot>

    <div id="wrapper" class="bg-info">

        <!-- Sidebar -->
        <div class="container-fluid d-flex justify-content-center bg-green-200 my-5 p-5">
            <div class="row ">
                <div class="col">
                    <form action="/foodEdit" method="POST">
                        @csrf 
                        <h2 class="fw-bold fs-4 mb-2">Please Select Your Distric To Donate</h2>
                    <div class="row my-4 d-flex justify-content-center">
                        <div class="col-sm-3">
                                <input type="text" name="firstName"  value="{{$foods->firstName}}" class="form-control">
                                <label class="form-label">First Name: </label>
                        </div>
    
                        <div class="col-sm-3">
                                <input type="text" name="lastName" value="{{$foods->lastName}}" class="form-control">
                                <label class="form-label">Last Name: </label>
                        </div>
    
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-6">
                                    <input type="text" name="mobilePhone" value="{{$foods->mobilePhone}}" class="form-control" ">
                                    <label class="form-label">Mobile Phone: </label>
                            </div>
                        </div>
    
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-6">
                                    <input type="email" name="email" value="{{$foods->email}}" class="form-control">
                                    <label class="form-label">E-mail: </label>
                            </div>
                        </div>
    
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-6">
                                    <input type="text" name="town" value="{{$foods->town}}" class="form-control">
                                    <label class="form-label">Town: </label>
                            </div>
                        </div>
    
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-6">
                                    <input type="text" name="state" value="{{$foods->state}}" class="form-control">
                                    <label class="form-label">State: </label>
                            </div>
                        </div>
    
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-6">
                                    <input type="text" name="postCode" value="{{$foods->postCode}}" class="form-control">
                                    <label class="form-label">Post Code: </label>
                            </div>
                        </div>
    
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-6">
                                    <input type="text" name="heading" value="{{$foods->heading}}" class="form-control">
                                    <label class="form-label">Headline:  </label>
                            </div>
                        </div>                    
    
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-6">
                                    <textarea name="description" class="form-control"  cols="78" rows="10">{{$foods->description}}</textarea>
                                    <br>
                                    <label class="form-label">Description:  </label>
                            </div>
                        </div>
    
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-6">
                                <select class="custom-select form-control" name="selectMethod" value="{{$foods->selectMethod}}">
                                    <option >{{$foods->selectMethod}}</option>
                                    {{-- <option value="Home">{{$foods->selectMethod}}</option>
                                    <option value="Resturant">{{$foods->selectMethod}}</option>
                                    <option value="Convention">{{$foods->selectMethod}}</option> --}}
                                </select>
                            </div>
                        </div>
    
                        <div class="row">                       
                                <div class="col-sm-4">
                                    <div class="mt-5 text-center">
                                        <button class="btn btn-primary text-dark" type="submit">Approve</button>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mt-5 text-center">
                                        <a href="#" class="btn btn-danger text-dark" type="submit">Reject</a>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mt-5 text-center">
                                        <a href="#" class="btn btn-warning text-dark" type="submit">Back</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{session('message')}}
                        </div>
                    @endif
                </div>
            </div>
            </div>
        <!-- End of Sidebar -->
    
    </div>
</x-app-layout>
