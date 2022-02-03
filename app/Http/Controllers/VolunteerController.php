<?php

namespace App\Http\Controllers;

use App\Models\ApprovVolunteer;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteer = Volunteer::all();
        return view('volunteer',['volunte'=>$volunteer]);
    }

    public function voluntUser()
    {
        return view('users.voluntUser');
    }

    // public function imgShow()
    // {
    //     $img = Volunteer::all();
    //     return view('volunteer',['imgShow'=>$img]);
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $volunteer = new ApprovVolunteer();

        // $fileNameWithExt = $request->file('file')->getClientOriginalName();

        // // Just File Name
        // $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        // // Get With Extension
        // $extension = $request->file('file')->getClientOriginalExtension();

        // // Create a New File
        // $fileNameToStore = $filename.'_'.time().'_'.$extension;

        // // Upload Image
        // $path = $request->file('file')->storeAs('public/volunteer_images',$fileNameToStore);

        // $volunteer->file=$fileNameToStore;

        $volunteer->firstName=$request->firstName;
        $volunteer->lastName=$request->lastName;
        $volunteer->email=$request->email;
        $volunteer->phone=$request->phone;
        $volunteer->address_one=$request->address_one;
        $volunteer->address_two=$request->address_two;
        $volunteer->city=$request->city;
        $volunteer->state=$request->state;
        $volunteer->postalCode=$request->postalCode;
        $volunteer->category=$request->category;
        $volunteer->workTime=$request->workTime;
        $volunteer->education=$request->education;
        $volunteer->description=$request->description;
        $volunteer->country=$request->country;
        $volunteer->postalOffice=$request->postalOffice;
        
        $volunteer->save();

        return redirect('/volunShow')->with('message','Volunteer Approved');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $volunteer = new Volunteer();

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

        $volunteer->file=$fileNameToStore;
        $volunteer->firstName=$request->firstName;
        $volunteer->lastName=$request->lastName;
        $volunteer->email=$request->email;
        $volunteer->phone=$request->phone;
        $volunteer->address_one=$request->address_one;
        $volunteer->address_two=$request->address_two;
        $volunteer->city=$request->city;
        $volunteer->state=$request->state;
        $volunteer->postalCode=$request->postalCode;
        $volunteer->category=$request->category;
        $volunteer->workTime=$request->workTime;
        $volunteer->education=$request->education;
        $volunteer->description=$request->description;
        $volunteer->country=$request->country;
        $volunteer->postalOffice=$request->postalOffice;
        
        $volunteer->save();

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

    public function viewVolun()
    {
        $view = Volunteer::all();

        return view('admin.volunShow',['show'=>$view]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $view = Volunteer::find($id);

        return view('admin.editVolun',['show'=>$view]);
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
        // $volunteer = Volunteer::find($id);

        // $volunteer->firstName=$request->firstName;
        // $volunteer->lastName=$request->lastName;
        // $volunteer->email=$request->email;
        // $volunteer->phone=$request->phone;
        // $volunteer->address_one=$request->address_one;
        // $volunteer->address_two=$request->address_two;
        // $volunteer->city=$request->city;
        // $volunteer->state=$request->state;
        // $volunteer->postalCode=$request->postalCode;
        // $volunteer->category=$request->category;
        // $volunteer->workTime=$request->workTime;
        // $volunteer->education=$request->education;
        // $volunteer->description=$request->description;
        // $volunteer->country=$request->country;
        // $volunteer->postalOffice=$request->postalOffice;
        
        // $volunteer->save();
        // return view('volunteer',['volunte'=>$volunteer]);
    }

    public function profile($id)
    {
        $volunteer = Volunteer::find($id);

        return view('volunteerProfile',['profile'=>$volunteer]);
        
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
