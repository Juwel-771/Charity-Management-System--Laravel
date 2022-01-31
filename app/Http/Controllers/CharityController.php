<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('charities');
    }

    public function educationIndex()
    {
        return view('charity.education');
    }

    public function healthIndex()
    {
        return view('charity.health');
    }

    public function environmentIndex()
    {
        return view('charity.environment');
    }

    public function humanIndex()
    {
        return view('charity.human');
    }

    public function animalIndex()
    {
        return view('charity.animal');
    }

    public function socialIndex()
    {
        return view('charity.social');
    }

    public function childIndex()
    {
        return view('charity.child');
    }

    public function refugeIndex()
    {
        return view('charity.refuge');
    }

    public function victimIndex()
    {
        return view('charity.victim');
    }

    // ADMIN DASHBOARD

    public function animalView()
    {
        return view('admin.animalCharity');
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
