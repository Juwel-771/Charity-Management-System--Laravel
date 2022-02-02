<?php

namespace App\Http\Controllers;

use App\Models\AdminProfile;
use App\Models\Donor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = AdminProfile::all();
        return view('admin.adminForm',['admins'=>$admin]);
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

        $admin = new AdminProfile();
        $this->validate($request, [
            'name'=>'required',
            'about'=>'required',
            'file'=>'image|mimes:jpg,png,jpeg'
        ]);
        // File name With Extension
        $fileNameWithExt = $request->file('file')->getClientOriginalName();

        // Just File Name
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        // Get With Extension
        $extension = $request->file('file')->getClientOriginalExtension();

        // Create a New File
        $fileNameToStore = $filename;

        // Upload Image
        $path = $request->file('file')->storeAs('public/admin_images',$fileNameToStore);

        $admin->file = $fileNameToStore;
        $admin->name = $request->name;
        $admin->about = $request->about;

        $admin->save();

        return redirect('/adminProfile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = AdminProfile::find($id);
        return view('admin.adminProfile',['admins'=>$admin]);
    }

    public function viewProfile()
    {
        $admin = AdminProfile::all();
        return view('admin.adminProfile',['admins'=>$admin]);
    }

    public function activeDonor()
    {
        $donor = Donor::all();
        return view('admin.activeDonor',['donor'=>$donor]);
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
