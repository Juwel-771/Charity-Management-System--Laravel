<?php

namespace App\Http\Controllers;

use App\Models\Approve_cloth;
use App\Models\Cloth;
use Illuminate\Http\Request;

class ClothController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('donors.clothing');
    }

    public function clothShow()
    {
        $cloth = Cloth::all();

        return view('admin.clothShow',['cloths'=>$cloth]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cloth = new Cloth();
        $cloth->firstName = $request->firstName;
        $cloth->lastName = $request->lastName;
        $cloth->mobilePhone = $request->mobilePhone;
        $cloth->email = $request->email;
        $cloth->town = $request->town;
        $cloth->state = $request->state;
        $cloth->postCode = $request->postCode;
        $cloth->checkBox = $request->checkBox;
        $cloth->size = $request->size;
        $cloth->quantity = $request->quantity;
        $cloth->location = $request->location;
        $cloth->colthName = $request->colthName;
        $cloth->status = $request->status;
        $cloth->comment = $request->comment;
       
        $cloth->save();

        return redirect()->back();

    }

    public function approve(Request $request)
    {
        $cloth = new Approve_cloth();
        $cloth->firstName = $request->firstName;
        $cloth->lastName = $request->lastName;
        $cloth->mobilePhone = $request->mobilePhone;
        $cloth->email = $request->email;
        $cloth->town = $request->town;
        $cloth->state = $request->state;
        $cloth->postCode = $request->postCode;
        $cloth->checkBox = $request->checkBox;
        $cloth->size = $request->size;
        $cloth->quantity = $request->quantity;
        $cloth->location = $request->location;
        $cloth->colthName = $request->colthName;
        $cloth->status = $request->status;
        $cloth->comment = $request->comment;
       
        $cloth->save();

        return redirect('/clothShow')->with('message','Donation Approved');
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
    public function edit_cloth($id)
    {
        $cloth = Cloth::find($id);

        return view('admin.clothEdit',['cloth'=>$cloth]);
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
    public function destroy_cloth($id)
    {
        $cloth = Cloth::destroy($id);

        return redirect('/clothShow')->with('message','Donor Application Rejected');
    }
}
