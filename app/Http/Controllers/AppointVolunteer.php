<?php

namespace App\Http\Controllers;

use App\Models\Appoint_Volunteer;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class AppointVolunteer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appoint = Volunteer::all();
        return view('ngo.appointVolunteer',['recruit'=>$appoint]);
    }

    public function appoint($id)
    {
        $appoint = Volunteer::find($id);
        return view('ngo.recruitVolunteer',['recruit'=>$appoint]);
    }

    public function selected()
    {
        $appoint = Appoint_Volunteer::all();

        return view('ngo.selectedVolunteer',['show'=>$appoint]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $appoint = new Appoint_Volunteer();

        $appoint->firstName=$request->firstName;
        $appoint->lastName=$request->lastName;
        $appoint->email=$request->email;
        $appoint->phone=$request->phone;
        $appoint->address_one=$request->address_one;
        $appoint->address_two=$request->address_two;
        $appoint->city=$request->city;
        $appoint->state=$request->state;
        $appoint->postalCode=$request->postalCode;
        $appoint->category=$request->category;
        $appoint->workTime=$request->workTime;
        $appoint->education=$request->education;
        $appoint->description=$request->description;
        $appoint->country=$request->country;
        $appoint->postalOffice=$request->postalOffice;

        $appoint->save();

        return redirect('/availableVolun')->with('message','Volunteer Recruited. Please mail them to notify.');
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
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        $appoint = Appoint_Volunteer::destroy($id);
        return redirect('/selectedVolunteer')->with('message','Volunteer Removed');
    }
}
