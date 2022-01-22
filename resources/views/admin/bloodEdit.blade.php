<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hello') }}
        </h2>
    </x-slot>

    <div id="wrapper" class="bg-danger">

        <!-- Sidebar -->
        <div class="container-fluid mb-5 bg-indigo-700">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        {{-- <img class="card-img img_opacity" src="{{ asset('img/blood_form.jpg')}}" alt="Card image">
                        --}}
                        <div class="">
                            <div class="row d-flex justify-content-center">
                                <form action="/bloodEdit" method="POST">
                                    @csrf
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-sm-3">
                                            <label for="firstName" class="form-label">First Name: </label>
                                            <input type="text" name="firstName" value={{$blood->firstName}}
                                                class="form-control">
                                        </div>

                                        <div class="col-sm-3">
                                            <label for="lastName" class="form-label">Last Name: </label>
                                            <input type="text" name="lastName" value={{$blood->lastName}}
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="row d-flex justify-content-center">
                                        <div class="col-sm-6">
                                            <label for="mobilePhone" class="form-label">Mobile Phone: </label>
                                            <input type="text" name="mobilePhone" value={{$blood->mobilePhone}}
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="row d-flex justify-content-center">
                                        <div class="col-sm-6">
                                            <label for="email" class="form-label">E-mail: </label>
                                            <input type="email" name="email" value={{$blood->email}}
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="row d-flex justify-content-center">
                                        <div class="col-sm-6">
                                            <label for="town" class="form-label">Town: </label>
                                            <input type="text" name="town" value={{$blood->town}} class="form-control">
                                        </div>
                                    </div>

                                    <div class="row d-flex justify-content-center">
                                        <div class="col-sm-3">
                                            <label for="state" class="form-label">State: </label>
                                            <input type="text" name="state" value={{$blood->state}}
                                                class="form-control">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="postCode" class="form-label">Post Code: </label>
                                            <input type="text" name="postCode" value={{$blood->postCode}}
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="row d-flex justify-content-center">
                                        <div class="col-sm-6">
                                            <label for="clinic" class="form-label">Name Your Clinic: </label>
                                            <input type="text" name="clinic" value={{$blood->clinic}}
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="row d-flex justify-content-center">
                                        <div class="col-sm-3">
                                            <label for="selectTime" class="form-label">Select Your Time: </label>
                                            <input type="time" name="selectTime" value={{$blood->selectTime}}
                                                class="form-control" id="email">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="postCode" class="form-label">Select Your Date: </label>
                                            <input type="date" name="selectDate" value={{$blood->selectDate}}
                                                class="form-control" id="email">
                                        </div>
                                    </div>

                                    <div class="row d-flex justify-content-center">
                                        <div class="col-sm-6">
                                            <label for="postCode" class="form-label">Any Messages? </label>
                                            <textarea name="description" class="form-control" id="description" cols="78"
                                                rows="3">{{$blood->description}}</textarea><br>
                                        </div>
                                    </div>

                                    <div class="row d-flex justify-content-center">
                                        <div class="col-sm-6">
                                            <select class="custom-select form-control" name="bloodGroup">
                                                <option> {{$blood->bloodGroup}} </option>
                                                {{-- <option value="A+">A+</option>
                                            <option value="AB+">AB+</option>
                                            <option value="A-">A-</option>
                                            <option value="AB-">AB-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option> --}}
                                            </select>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="mt-5 text-center">
                                    <button class="btn btn-danger text-dark" type="submit">Approve</button>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mt-5 text-center">
                                    <a href="#" class="btn btn-danger text-dark" type="submit">Reject</a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mt-5 text-center">
                                    <a href="#" class="btn btn-danger text-dark" type="submit">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <!-- End of Sidebar -->

    </div>
</x-app-layout>
