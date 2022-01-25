<?php

namespace App\Http\Controllers;

use App\Models\OrganizeEvent;
use Illuminate\Http\Request;

class EventOrganizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ngo.event');
    }
    public function eventPage()
    {
        $events = OrganizeEvent::all();
        return view('eventsPage',['event'=>$events]);
    }
    public function eventProfile($id)
    {
        $profile = OrganizeEvent::find($id);
        return view('ngo.eventProfile',['pro_eve'=>$profile]);
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
        $events = new OrganizeEvent();

        $this->validate($request, [
            'orgName'=>'required',
            'eventName'=>'required',
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
        $path = $request->file('file')->storeAs('public/events_images',$fileNameToStore);

        $events->file=$fileNameToStore;
        $events->firstName=$request->firstName;
        $events->lastName=$request->lastName;
        $events->email=$request->email;
        $events->orgName=$request->orgName;
        $events->eventName=$request->eventName;
        $events->date=$request->date;
        $events->time=$request->time;
        $events->location=$request->location;
        $events->eventType=$request->eventType;
        $events->eventSponsor=$request->eventSponsor;
        $events->description=$request->description;
        $events->purpose=$request->purpose;
        $events->promote=$request->promote;
        
        
        $events->save();

        return redirect()->back()->with('message','Event Created');
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