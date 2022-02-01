<?php

namespace App\Http\Controllers;

use App\Models\AnimalCharity;
use App\Models\AnimalFeedback;
use App\Models\EducationalCharity;
use App\Models\EducationFeedback;
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
        $education = EducationalCharity::all();
        return view('charity.education',['show'=>$education]);
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

    //Education Charity
    public function educationView()
    {
        $education = EducationalCharity::all();
        return view('admin.educationCharity',['edu'=>$education]);
    }

    public function addEducation()
    {
        return view('admin.addEducation');
    }

    public function EducationStore(Request $request)
    {
        $education = new EducationalCharity();

        $this->validate($request, [
            'ngoNamee'=>'required',
            'descriptione'=>'required',
            'description_twoe'=>'required',
            'filee'=>'image|mimes:jpg,png,jpeg'
        ]);

        // File name With Extension
        $fileNameWithExt = $request->file('filee')->getClientOriginalName();

        // Just File Name
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        // Get With Extension
        $extension = $request->file('filee')->getClientOriginalExtension();

        // Create a New File
        $fileNameToStore = $filename.'_'.time().'_'.$extension;

        // Upload Image
        $path = $request->file('filee')->storeAs('public/educational_images',$fileNameToStore);

        $education->filee=$fileNameToStore;
        $education->ngoNamee=$request->ngoNamee;
        $education->emaile=$request->emaile;
        $education->ESTDe=$request->ESTDe;
        $education->websitee=$request->websitee;
        $education->descriptione=$request->descriptione;
        $education->description_twoe=$request->description_twoe;
        $education->description_threee=$request->description_threee;

        $education->save();

        return redirect()->back()->with('message','Charity Added');
    }

    public function edit_education($id)
    {
        $education = EducationalCharity::find($id);
        return view('admin.educationEdit',['edu'=>$education]);
    }

    public function educationUpdate(Request $request, $id)
    {
        $education = EducationalCharity::find($id);

        $education->ngoNamee=$request->ngoNamee;
        $education->emaile=$request->emaile;
        $education->ESTDe=$request->ESTDe;
        $education->websitee=$request->websitee;
        $education->descriptione=$request->descriptione;
        $education->description_twoe=$request->description_twoe;
        $education->description_threee=$request->description_threee;
        
        $education->save();

        return redirect('/educationCharity')->with('message','Charity Updated');

    }
    public function education_delete($id)
    {
        $education = EducationalCharity::destroy($id);

        return redirect()->back()->with('message','Charity Removed');
    }

    public function showEducation($id)
    {
        $education = EducationalCharity::find($id);
        $educationFeedback = EducationFeedback::all();
        // return view('charity.showAnimal',['comment'=>$animalFeedback]);
        return view('charity.showEducation',['profile'=>$education,'commentt'=>$educationFeedback]);
    }

    public function educationFeedback(Request $request)
    {
        $educationFeedback = new EducationFeedback();

        $educationFeedback->namee = $request->namee;
        $educationFeedback->commentt = $request->commentt;

        $educationFeedback->save();

        return redirect()->back();
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
