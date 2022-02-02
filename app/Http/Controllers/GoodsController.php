<?php

namespace App\Http\Controllers;

use App\Models\Approve_good;
use App\Models\Good;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('donors.goods');
    }

    public function goodsShow()
    {
        $goods = Good::all();

        return view('admin.goodsShow',['good'=>$goods]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $goods = new Good();
        $goods->firstName = $request->firstName;
        $goods->lastName = $request->lastName;
        $goods->mobilePhone = $request->mobilePhone;
        $goods->email = $request->email;
        $goods->town = $request->town;
        $goods->state = $request->state;
        $goods->postCode = $request->postCode;
        $goods->item = $request->item;
        $goods->goodsName = $request->goodsName;
        $goods->quantity = $request->quantity;
        $goods->conditions = $request->conditions;
        $goods->pickPoin = $request->pickPoin;
        $goods->description = $request->description;

        $goods->save();

        return redirect()->back();
    }

    public function approve(Request $request)
    {
        $goods = new Approve_good();
        $goods->firstName = $request->firstName;
        $goods->lastName = $request->lastName;
        $goods->mobilePhone = $request->mobilePhone;
        $goods->email = $request->email;
        $goods->town = $request->town;
        $goods->state = $request->state;
        $goods->postCode = $request->postCode;
        $goods->item = $request->item;
        $goods->goodsName = $request->goodsName;
        $goods->quantity = $request->quantity;
        $goods->conditions = $request->conditions;
        $goods->pickPoin = $request->pickPoin;
        $goods->description = $request->description;

        $goods->save();

        return redirect('/goodsShow')->with('message','Donation Approved');
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
    public function edit_goods($id)
    {
        $goods = Good::find($id);

        return view('admin.goodEdit',['good'=>$goods]);
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
    public function destroy_good($id)
    {
        $good = Good::destroy($id);

        return redirect('/goodsShow')->with('message','Donation Application Rejected');
    }
}
