<?php

namespace App\Http\Controllers;

use App\Models\HelpArea;
use Illuminate\Http\Request;

class HelpAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.helpArea');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $area = new HelpArea();

        $this->validate($request, [
            'firstName'=>'required',
            'lastName'=>'required',
            'file'=>'image|mimes:jpg,png,jpeg'
        ]);

        // File name With Extension
        $fileNameWithExt = $request->file('file')->getClientOriginalName();

        // Just File Name
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        // Get With Extension
        $extension = $request->file('file')->getClientOriginalExtension();

        // Create a New File
        $fileNameToStore = $filename.'_'.time().'_'.$extension;

        // Upload Image
        $path = $request->file('file')->storeAs('public/volunteer_images',$fileNameToStore);

        $area->file=$fileNameToStore;
        $area->problem=$request->problem;
        $area->firstName=$request->firstName;
        $area->lastName=$request->lastName;
        $area->email=$request->email;
        $area->phone=$request->phone;
        $area->address_one=$request->address_one;
        $area->address_two=$request->address_two;
        $area->city=$request->city;
        $area->state=$request->state;
        $area->postalCode=$request->postalCode;
        $area->description=$request->description;
        $area->postalOffice=$request->postalOffice;
        
        $area->save();

        return redirect()->back()->with('message','Your Form Submitted. We will let you know through email');
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
        //
    }
}
