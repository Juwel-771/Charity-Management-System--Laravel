<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return('donors.medicine');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $medicine = new Medicine();
        $medicine->firstName = $request->firstName;
        $medicine->lastName = $request->lastName;
        $medicine->mobilePhone = $request->mobilePhone;
        $medicine->email = $request->email;
        $medicine->town = $request->town;
        $medicine->state = $request->state;
        $medicine->postCode = $request->postCode;
        $medicine->selectTime = $request->selectTime;
        $medicine->selectDate = $request->selectDate;
        $medicine->drugName = $request->drugName;
        $medicine->lotNumber = $request->lotNumber;
        $medicine->expireTime = $request->expireTime;
        $medicine->source = $request->source;
        $medicine->quantity = $request->quantity;
        $medicine->ndc = $request->ndc;
        $medicine->drugStrength = $request->drugStrength;

        $medicine->save();

        return redirect()->back();
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
        //
    }
}
