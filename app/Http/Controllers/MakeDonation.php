<?php

namespace App\Http\Controllers;

use App\Models\Approve_blood;
use App\Models\Approve_food;
use Illuminate\Http\Request;

class MakeDonation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('makeDonation');
    }

    public function food()
    {
        $food = Approve_food::paginate(3);
        return view('donors.foodDonate',['foods'=>$food]);
    }

    public function blood()
    {
        $blood = Approve_blood::paginate(3);
        return view('donors.bloodDonate',['bloods'=>$blood]);
    }




    public function profile($id)
    {
        $profile = Approve_food::find($id);

        return view('donors.foodProfile',['pro'=>$profile]);
    }
    public function blood_profile($id)
    {
        $profile2 = Approve_blood::find($id);

        return view('donors.bloodProfile',['pro2'=>$profile2]);
    }
    
   

    
    public function destroy($id)
    {
        //
    }
}
