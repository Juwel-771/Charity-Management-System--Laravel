<?php

namespace App\Http\Controllers;

use App\Models\AnimalCharity;
use App\Models\AnimalFeedback;
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
        $animal = AnimalCharity::all();
        return view('charity.animal',['show'=>$animal]);
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
    // ANIMAL CHARITY
    public function animalView()
    {
        $animal = AnimalCharity::all();
        return view('admin.animalCharity',['anime'=>$animal]);
    }

    public function addAnimal()
    {
        return view('admin.addAnimal');
    }

    public function edit_animal($id)
    {
        $animal = AnimalCharity::find($id);
        return view('admin.animalEdit',['anime'=>$animal]);
    }

    public function animalUpdate(Request $request, $id)
    {
        $animal = AnimalCharity::find($id);

        $animal->ngoName=$request->ngoName;
        $animal->email=$request->email;
        $animal->ESTD=$request->ESTD;
        $animal->website=$request->website;
        $animal->description=$request->description;
        $animal->description_two=$request->description_two;
        $animal->description_three=$request->description_three;

        $animal->save();

        return redirect('/animalCharity')->with('message','Charity Updated');

    }

    public function animal_delete($id)
    {
        $animal = AnimalCharity::destroy($id);

        return redirect()->back()->with('message','Charity Removed');
    }

    public function showAnimal($id)
    {
        $animal = AnimalCharity::find($id);
        $animalFeedback = AnimalFeedback::all();
        // return view('charity.showAnimal',['comment'=>$animalFeedback]);
        return view('charity.showAnimal',['profile'=>$animal,'comment'=>$animalFeedback]);
    }

    public function animalFeedback(Request $request)
    {
        $animalFeedback = new AnimalFeedback();

        $animalFeedback->name = $request->name;
        $animalFeedback->comment = $request->comment;

        $animalFeedback->save();

        return redirect()->back();
    }

    // public function showFeedback()
    // {
    //     $animalFeedback = AnimalFeedback::all();
    //     return view('charity.showAnimal',['comment'=>$animalFeedback]);
    // }

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
        $animal = new AnimalCharity();

        $this->validate($request, [
            'ngoName'=>'required',
            'description'=>'required',
            'description_two'=>'required',
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
        $path = $request->file('file')->storeAs('public/animal_images',$fileNameToStore);

        $animal->file=$fileNameToStore;
        $animal->ngoName=$request->ngoName;
        $animal->email=$request->email;
        $animal->ESTD=$request->ESTD;
        $animal->website=$request->website;
        $animal->description=$request->description;
        $animal->description_two=$request->description_two;
        $animal->description_three=$request->description_three;

        $animal->save();

        return redirect()->back()->with('message','Charity Added');
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
