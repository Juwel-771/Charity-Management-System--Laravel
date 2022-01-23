<?php

namespace App\Http\Controllers;

use App\Models\Approve_blood;
use App\Models\Blood;
use Illuminate\Http\Request;

class BloodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('donors.blood');
    }

    public function bloodShow()
    {
        $blood = Blood::all();

        return view('admin.bloodShow',['blood'=>$blood]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $blood = new Blood;
        $blood->firstName = $request->firstName;
        $blood->lastName = $request->lastName;
        $blood->mobilePhone = $request->mobilePhone;
        $blood->email = $request->email;
        $blood->town = $request->town;
        $blood->state = $request->state;
        $blood->postCode = $request->postCode;
        $blood->clinic = $request->clinic;
        $blood->selectTime = $request->selectTime;
        $blood->selectDate = $request->selectDate;
        $blood->description = $request->description;
        $blood->bloodGroup = $request->bloodGroup;

        $blood->save();

        return redirect()->back();
    }

    public function approve(Request $request)
    {
        $blood = new Approve_blood();

        $blood->firstName = $request->firstName;
        $blood->lastName = $request->lastName;
        $blood->mobilePhone = $request->mobilePhone;
        $blood->email = $request->email;
        $blood->town = $request->town;
        $blood->state = $request->state;
        $blood->postCode = $request->postCode;
        $blood->clinic = $request->clinic;
        $blood->selectTime = $request->selectTime;
        $blood->selectDate = $request->selectDate;
        $blood->description = $request->description;
        $blood->bloodGroup = $request->bloodGroup;

        $blood->save();

        return redirect('/bloodShow')->with('message','Donation Approved');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_blood($id)
    {
        $blood = Blood::find($id);

        return view('admin.bloodEdit',['blood'=>$blood]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyBlood($id)
    {
        $blood = Blood::destroy($id);

        return redirect('/bloodShow')->with('message','Donation Approval Rejected');
    }
}
