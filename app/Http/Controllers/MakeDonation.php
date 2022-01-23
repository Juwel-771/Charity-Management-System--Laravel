<?php

namespace App\Http\Controllers;

use App\Models\Approve_blood;
use App\Models\Approve_cloth;
use App\Models\Approve_food;
use App\Models\Approve_good;
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

    // ALL DONATION PROFILE FUNCTION
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
    public function cloth()
    {
        $cloth = Approve_cloth::paginate(3);
        return view('donors.clothDonate',['cloths'=>$cloth]);
    }
    public function goods()
    {
        $goods = Approve_good::paginate(3);
        return view('donors.goodsDonate',['good'=>$goods]);
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
    
    public function cloth_profile($id)
    {
        $profile3 = Approve_cloth::find($id);

        return view('donors.clothProfile',['pro3'=>$profile3]);
    }
    public function goods_profile($id)
    {
        $profile4 = Approve_good::find($id);

        return view('donors.goodsProfile',['pro4'=>$profile4]);
    }
   

    
    public function destroy($id)
    {
        //
    }
}
