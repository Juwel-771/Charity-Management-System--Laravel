<?php

namespace App\Http\Controllers;

use App\Models\Approve_food;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('donors.food'); 
    }

    public function foodShow()
    {
        $food = Food::all();
        return view('admin.foodShow',['food'=>$food]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $food = new Food;
        $food->category = $request->category;
        $food->firstName = $request->firstName;
        $food->lastName = $request->lastName;
        $food->mobilePhone = $request->mobilePhone;
        $food->email = $request->email;
        $food->town = $request->town;
        $food->state = $request->state;
        $food->postCode = $request->postCode;
        $food->heading = $request->heading;
        $food->description = $request->description;
        $food->selectMethod = $request->selectMethod;

        $food->save();

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
    public function edit_food($id)
    {
        $food = Food::find($id);

        return view('admin.foodEdit',['foods'=>$food]);
    }

    public function approve(Request $request)
    {
        $food = new Approve_food();

        $food->firstName = $request->firstName;
        $food->lastName = $request->lastName;
        $food->mobilePhone = $request->mobilePhone;
        $food->email = $request->email;
        $food->town = $request->town;
        $food->state = $request->state;
        $food->postCode = $request->postCode;
        $food->heading = $request->heading;
        $food->description = $request->description;
        $food->selectMethod = $request->selectMethod;

        $food->save();

        return redirect('/foodShow')->with('message','Donation Approved');
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
    public function destroyFood($id)
    {
        $food = Food::destroy($id);

        return redirect('/foodShow')->with('message','Donation Approval Rejected');
    }
    // public function deleteFood($id)
    // {
    //     $food = Approve_food::destroy($id);

    //     return redirect('/foodShow')->with('message','Donation Post Deleted');
    // }
}
