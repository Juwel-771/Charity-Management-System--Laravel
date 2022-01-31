<?php

namespace App\Http\Controllers;

use App\Models\Approve_financila;
use App\Models\Financial;
use Illuminate\Http\Request;

class FinancialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('donors.financial');
    }

    public function financialShow()
    {
        $financial = Financial::all();
        return view('admin.financialShow',['financials'=>$financial]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $financial = new Financial;

        $financial->firstName = $request->firstName;
        $financial->lastName = $request->lastName;
        $financial->mobilePhone = $request->mobilePhone;
        $financial->email = $request->email;
        $financial->town = $request->town;
        $financial->state = $request->state;
        $financial->postCode = $request->postCode;
        $financial->payment = $request->payment;
        $financial->amount = $request->amount;
        $financial->description = $request->description;

        $financial->save();

        return redirect()->back();
    }

    public function approve(Request $request)
    {
        $financial = new Approve_financila();

        $financial->firstName = $request->firstName;
        $financial->lastName = $request->lastName;
        $financial->mobilePhone = $request->mobilePhone;
        $financial->email = $request->email;
        $financial->town = $request->town;
        $financial->state = $request->state;
        $financial->postCode = $request->postCode;
        $financial->payment = $request->payment;
        $financial->amount = $request->amount;
        $financial->description = $request->description;

        $financial->save();

        return redirect('/financialShow')->with('message','Donation Approved');

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

    public function edit_financial($id)
    {
        $financial = Financial::find($id);

        return view('admin.financialEdit',['financials'=>$financial]);
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
