<?php

namespace App\Http\Controllers;

use App\Models\Approve_medicine;
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
        return view('donors.medicine');
    }

    public function medicineShow()
    {
        $medicine = Medicine::all();
        
        return view('admin.medicineShow',['medi'=> $medicine]);
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

    public function approve(Request $request)
    {
        $medicine = new Approve_medicine();
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

        return redirect('/medicineShow')->with('message','Donation Approved');
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
    public function edit_medi($id)
    {
        $medicine = Medicine::find($id);
        
        return view('admin.medicineEdit',['medicine'=>$medicine]);
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
    public function destroyMedi($id)
    {
        $medicine = Medicine::destroy($id);

        return redirect('/medicineShow')->with('message','Donation Request Declined');
    }
}
