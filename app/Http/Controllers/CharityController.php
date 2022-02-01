<?php

namespace App\Http\Controllers;

use App\Models\AnimalCharity;
use App\Models\AnimalFeedback;
use App\Models\ChildCharity;
use App\Models\ChildFeedback;
use App\Models\EducationalCharity;
use App\Models\EducationFeedback;
use App\Models\EnvironmentCharity;
use App\Models\EnvironmentFeedback;
use App\Models\HealthCharity;
use App\Models\HealthFeedback;
use App\Models\HumanCharity;
use App\Models\HumanFeedback;
use App\Models\RefugeCharity;
use App\Models\RefugeFeedback;
use App\Models\SocialCharity;
use App\Models\SocialFeedback;
use App\Models\VictimCharity;
use App\Models\VictimFeedback;
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
        $health = HealthCharity::all();
        return view('charity.health',['show'=>$health]);
    }

    public function environmentIndex()
    {
        $enviroment = EnvironmentCharity::all();
        return view('charity.environment',['show'=>$enviroment]);
    }

    public function humanIndex()
    {
        $human = HumanCharity::all();
        return view('charity.human',['show'=>$human]);
    }

    public function animalIndex()
    {
        $animal = AnimalCharity::all();
        return view('charity.animal',['show'=>$animal]);
    }

    public function socialIndex()
    {
        $social = SocialCharity::all();
        return view('charity.social',['soci'=>$social]);
    }

    public function childIndex()
    {
        $child = ChildCharity::all();
        return view('charity.child',['child'=>$child]);
    }

    public function refugeIndex()
    {
        $refuge = RefugeCharity::all();
        return view('charity.refuge',['ref'=>$refuge]);
    }

    public function victimIndex()
    {
        $victim = VictimCharity::all();
        return view('charity.victim',['vic'=>$victim]);
    }

    // ADMIN DASHBOARD
    // ANIMAL CHARITY
    public function animalView()
    {
        $animal = AnimalCharity::all();
        return view('admin.animalCharity',['anime'=>$animal]);
    }
    public function environmentView()
    {
        $enviroment = EnvironmentCharity::all();
        return view('admin.enviromentCharity',['env'=>$enviroment]);
    }
    public function humanView()
    {
        $human = HumanCharity::all();
        return view('admin.humanCharity',['hmn'=>$human]);
    }
    public function healthView()
    {
        $health = HealthCharity::all();
        return view('admin.healthCharity',['heal'=>$health]);
    }
    public function socialView()
    {
        $social = SocialCharity::all();
        return view('admin.socialCharity',['item'=>$social]);
    }

    public function refugeView()
    {
        $refuge = RefugeCharity::all();
        return view('admin.refugeCharity',['item'=>$refuge]);
    }
    public function victimView()
    {
        $victim = VictimCharity::all();
        return view('admin.victimCharity',['item'=>$victim]);
    }




    public function addAnimal()
    {
        return view('admin.addAnimal');
    }
    public function addEnvironment()
    {
        return view('admin.addEnvironment');
    }

    public function addHuman()
    {
        return view('admin.addHuman');
    }
    public function addHealth()
    {
        return view('admin.addHealth');
    }
    public function addSocial()
    {
        return view('admin.addSocial');
    }
    public function addRefuge()
    {
        return view('admin.addRefuge');
    }
    public function addVictim()
    {
        return view('admin.addVictim');
    }


    public function edit_animal($id)
    {
        $animal = AnimalCharity::find($id);
        return view('admin.animalEdit',['anime'=>$animal]);
    }
    public function edit_enviro($id)
    {
        $enviroment = EnvironmentCharity::find($id);
        return view('admin.enviromentEdit',['env'=>$enviroment]);
    }

    public function edit_human($id)
    {
        $human = HumanCharity::find($id);
        return view('admin.humanEdit',['hmn'=>$human]);
    }
    public function edit_health($id)
    {
        $hlth = HealthCharity::find($id);
        return view('admin.healthEdit',['health'=>$hlth]);
    }
    public function edit_social($id)
    {
        $social = SocialCharity::find($id);
        return view('admin.socialEdit',['social'=>$social]);
    }
    public function edit_refuge($id)
    {
        $refuge = RefugeCharity::find($id);
        return view('admin.refugeEdit',['ref'=>$refuge]);
    }
    public function edit_victim($id)
    {
        $victim = VictimCharity::find($id);
        return view('admin.victimEdit',['vic'=>$victim]);
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

    public function SocialStore(Request $request)
    {
        $social = new SocialCharity();

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
        $path = $request->file('file')->storeAs('public/social_images',$fileNameToStore);

        $social->file=$fileNameToStore;
        $social->ngoName=$request->ngoName;
        $social->email=$request->email;
        $social->ESTD=$request->ESTD;
        $social->website=$request->website;
        $social->description=$request->description;
        $social->description_two=$request->description_two;
        $social->description_three=$request->description_three;

        $social->save();

        return redirect()->back()->with('message','Charity Added');
    }

    public function HealthStore(Request $request)
    {
        $animal = new HealthCharity();

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
        $path = $request->file('file')->storeAs('public/health_images',$fileNameToStore);

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


    public function EnviromentStore(Request $request)
    {
        $environment = new EnvironmentCharity();

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
        $path = $request->file('file')->storeAs('public/environment_images',$fileNameToStore);

        $environment->file=$fileNameToStore;
        $environment->ngoName=$request->ngoName;
        $environment->email=$request->email;
        $environment->ESTD=$request->ESTD;
        $environment->website=$request->website;
        $environment->description=$request->description;
        $environment->description_two=$request->description_two;
        $environment->description_three=$request->description_three;

        $environment->save();

        return redirect()->back()->with('message','Charity Added');
    }

    public function RefugeStore(Request $request)
    {
        $refuge = new RefugeCharity();

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
        $path = $request->file('file')->storeAs('public/refuge_images',$fileNameToStore);

        $refuge->file=$fileNameToStore;
        $refuge->ngoName=$request->ngoName;
        $refuge->email=$request->email;
        $refuge->ESTD=$request->ESTD;
        $refuge->website=$request->website;
        $refuge->description=$request->description;
        $refuge->description_two=$request->description_two;
        $refuge->description_three=$request->description_three;

        $refuge->save();

        return redirect()->back()->with('message','Charity Added');
    }

    public function HumanStore(Request $request)
    {
        $human = new HumanCharity();

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
        $path = $request->file('file')->storeAs('public/human_images',$fileNameToStore);

        $human->file=$fileNameToStore;
        $human->ngoName=$request->ngoName;
        $human->email=$request->email;
        $human->ESTD=$request->ESTD;
        $human->website=$request->website;
        $human->description=$request->description;
        $human->description_two=$request->description_two;
        $human->description_three=$request->description_three;

        $human->save();

        return redirect()->back()->with('message','Charity Added');
    }
    public function VictimStore(Request $request)
    {
        $victim = new VictimCharity();

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
        $path = $request->file('file')->storeAs('public/victim_images',$fileNameToStore);

        $victim->file=$fileNameToStore;
        $victim->ngoName=$request->ngoName;
        $victim->email=$request->email;
        $victim->ESTD=$request->ESTD;
        $victim->website=$request->website;
        $victim->description=$request->description;
        $victim->description_two=$request->description_two;
        $victim->description_three=$request->description_three;

        $victim->save();

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

        return redirect('/victimCharity')->with('message','Charity Updated');

    }
    public function refugeUpdate(Request $request, $id)
    {
        $animal = RefugeCharity::find($id);

        $animal->ngoName=$request->ngoName;
        $animal->email=$request->email;
        $animal->ESTD=$request->ESTD;
        $animal->website=$request->website;
        $animal->description=$request->description;
        $animal->description_two=$request->description_two;
        $animal->description_three=$request->description_three;

        $animal->save();

        return redirect('/refugeCharity')->with('message','Charity Updated');

    }
    public function healthUpdate(Request $request, $id)
    {
        $animal = HealthCharity::find($id);

        $animal->ngoName=$request->ngoName;
        $animal->email=$request->email;
        $animal->ESTD=$request->ESTD;
        $animal->website=$request->website;
        $animal->description=$request->description;
        $animal->description_two=$request->description_two;
        $animal->description_three=$request->description_three;

        $animal->save();

        return redirect('/healthCharity')->with('message','Charity Updated');

    }

    public function humanUpdate(Request $request, $id)
    {
        $animal = HumanCharity::find($id);

        $animal->ngoName=$request->ngoName;
        $animal->email=$request->email;
        $animal->ESTD=$request->ESTD;
        $animal->website=$request->website;
        $animal->description=$request->description;
        $animal->description_two=$request->description_two;
        $animal->description_three=$request->description_three;

        $animal->save();

        return redirect('/humanCharity')->with('message','Charity Updated');

    }

    public function socialUpdate(Request $request, $id)
    {
        $animal = SocialCharity::find($id);

        $animal->ngoName=$request->ngoName;
        $animal->email=$request->email;
        $animal->ESTD=$request->ESTD;
        $animal->website=$request->website;
        $animal->description=$request->description;
        $animal->description_two=$request->description_two;
        $animal->description_three=$request->description_three;

        $animal->save();

        return redirect('/socialCharity')->with('message','Charity Updated');

    }
    public function victimUpdate(Request $request, $id)
    {
        $animal = VictimCharity::find($id);

        $animal->ngoName=$request->ngoName;
        $animal->email=$request->email;
        $animal->ESTD=$request->ESTD;
        $animal->website=$request->website;
        $animal->description=$request->description;
        $animal->description_two=$request->description_two;
        $animal->description_three=$request->description_three;

        $animal->save();

        return redirect('/victimCharity')->with('message','Charity Updated');

    }
    
    public function envrioUpdate(Request $request, $id)
    {
        $enviroment = EnvironmentCharity::find($id);

        $enviroment->ngoName=$request->ngoName;
        $enviroment->email=$request->email;
        $enviroment->ESTD=$request->ESTD;
        $enviroment->website=$request->website;
        $enviroment->description=$request->description;
        $enviroment->description_two=$request->description_two;
        $enviroment->description_three=$request->description_three;

        $enviroment->save();

        return redirect('/environmentCharity')->with('message','Charity Updated');

    }

    public function animal_delete($id)
    {
        $animal = AnimalCharity::destroy($id);

        return redirect()->back()->with('message','Charity Removed');
    }
    public function refuge_delete($id)
    {
        $refuge = RefugeCharity::destroy($id);

        return redirect()->back()->with('message','Charity Removed');
    }

    public function health_delete($id)
    {
        $health = HealthCharity::destroy($id);

        return redirect()->back()->with('message','Charity Removed');
    }
    public function human_delete($id)
    {
        $human = HumanCharity::destroy($id);

        return redirect()->back()->with('message','Charity Removed');
    }
    public function social_delete($id)
    {
        $human = SocialCharity::destroy($id);

        return redirect()->back()->with('message','Charity Removed');
    }

    public function enviro_delete($id)
    {
        $animal = EnvironmentCharity::destroy($id);

        return redirect()->back()->with('message','Charity Removed');
    }
    public function victim_delete($id)
    {
        $animal = VictimCharity::destroy($id);

        return redirect()->back()->with('message','Charity Removed');
    }

    public function showAnimal($id)
    {
        $animal = AnimalCharity::find($id);
        $animalFeedback = AnimalFeedback::all();
        // return view('charity.showAnimal',['comment'=>$animalFeedback]);
        return view('charity.showAnimal',['profile'=>$animal,'comment'=>$animalFeedback]);
    }
    public function showHuman($id)
    {
        $human = HumanCharity::find($id);
        $humanFeedback = HumanFeedback::all();
        // return view('charity.showAnimal',['comment'=>$animalFeedback]);
        return view('charity.showHuman',['profile'=>$human,'comment'=>$humanFeedback]);
    }
    public function showHealth($id)
    {
        $health = HealthCharity::find($id);
        $humanHealth = HealthFeedback::all();
        // return view('charity.showAnimal',['comment'=>$animalFeedback]);
        return view('charity.showHealth',['profile'=>$health,'comment'=>$humanHealth]);
    }
    public function showSocial($id)
    {
        $social = SocialCharity::find($id);
        $socialFeedback = SocialFeedback::all();
        // return view('charity.showAnimal',['comment'=>$animalFeedback]);
        return view('charity.showSocial',['profile'=>$social,'comment'=>$socialFeedback]);
    }
    public function showEnviroment($id)
    {
        $enviroment = EnvironmentCharity::find($id);
        $enviromentFeedback = EnvironmentFeedback::all();
        // return view('charity.showAnimal',['comment'=>$animalFeedback]);
        return view('charity.showEnviroment',['profile'=>$enviroment,'comment'=>$enviromentFeedback]);
    }

    public function showRefuge($id)
    {
        $refuge = RefugeCharity::find($id);
        $RefugeFeedback = RefugeFeedback::all();
        // return view('charity.showAnimal',['comment'=>$animalFeedback]);
        return view('charity.showRefuge',['profile'=>$refuge,'comment'=>$RefugeFeedback]);
    }

    public function showVictim($id)
    {
        $victim = VictimCharity::find($id);
        $VictimFeedback = VictimFeedback::all();
        // return view('charity.showAnimal',['comment'=>$animalFeedback]);
        return view('charity.showVictim',['profile'=>$victim,'comment'=>$VictimFeedback]);
    }

    public function animalFeedback(Request $request)
    {
        $animalFeedback = new AnimalFeedback();

        $animalFeedback->name = $request->name;
        $animalFeedback->comment = $request->comment;

        $animalFeedback->save();

        return redirect()->back();
    }

    public function humanFeedback(Request $request)
    {
        $animalFeedback = new HumanFeedback();

        $animalFeedback->name = $request->name;
        $animalFeedback->comment = $request->comment;

        $animalFeedback->save();

        return redirect()->back();
    }
    public function healthFeedback(Request $request)
    {
        $healthFeedback = new HealthFeedback();

        $healthFeedback->name = $request->name;
        $healthFeedback->comment = $request->comment;

        $healthFeedback->save();

        return redirect()->back();
    }
    public function socialFeedback(Request $request)
    {
        $socialFeedback = new SocialFeedback();

        $socialFeedback->name = $request->name;
        $socialFeedback->comment = $request->comment;

        $socialFeedback->save();

        return redirect()->back();
    }

    public function environmentFeedback(Request $request)
    {
        $enviromentFeedback = new EnvironmentFeedback();

        $enviromentFeedback->name = $request->name;
        $enviromentFeedback->comment = $request->comment;

        $enviromentFeedback->save();

        return redirect()->back();
    }
    public function refugeFeedback(Request $request)
    {
        $refugeFeedback = new RefugeFeedback();

        $refugeFeedback->name = $request->name;
        $refugeFeedback->comment = $request->comment;

        $refugeFeedback->save();

        return redirect()->back();
    }
    public function victimFeedback(Request $request)
    {
        $victimFeedback = new victimFeedback();

        $victimFeedback->name = $request->name;
        $victimFeedback->comment = $request->comment;

        $victimFeedback->save();

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

    // CHILD DASHBOARD
    public function childView()
    {
        $child = ChildCharity::all();
        return view('admin.childCharity',['childs'=>$child]);
    }

    public function addChild()
    {
        return view('admin.addChild');
    }

    public function ChildStore(Request $request)
    {
        $child = new ChildCharity();

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
        $path = $request->file('file')->storeAs('public/child_images',$fileNameToStore);

        $child->file=$fileNameToStore;
        $child->ngoName=$request->ngoName;
        $child->email=$request->email;
        $child->ESTD=$request->ESTD;
        $child->website=$request->website;
        $child->description=$request->description;
        $child->description_two=$request->description_two;
        $child->description_three=$request->description_three;

        $child->save();

        return redirect()->back()->with('message','Charity Added');
    }

    public function edit_child($id)
    {
        $child = ChildCharity::find($id);
        return view('admin.childEdit',['chid'=>$child]);
    }

    public function childUpdate(Request $request,$id)
    {

        $child = ChildCharity::find($id);
        $child->ngoName=$request->ngoName;
        $child->email=$request->email;
        $child->ESTD=$request->ESTD;
        $child->website=$request->website;
        $child->description=$request->description;
        $child->description_two=$request->description_two;
        $child->description_three=$request->description_three;

        $child->save();

        return redirect('/childCharity')->with('message','Charity Updated');
        
    }

    public function child_delete($id)
    {
        $child = ChildCharity::destroy($id);

        return redirect()->back()->with('message','Charity Removed');
    }

    public function showChild($id)
    {
        $child = ChildCharity::find($id);
        $childFeedback = ChildFeedback::all();
        // return view('charity.showAnimal',['comment'=>$animalFeedback]);
        return view('charity.showChild',['profile'=>$child,'comment'=>$childFeedback]);
    }

    public function childFeedback(Request $request)
    {
        $childFeedback = new ChildFeedback();

        $childFeedback->name = $request->name;
        $childFeedback->comment = $request->comment;

        $childFeedback->save();

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
