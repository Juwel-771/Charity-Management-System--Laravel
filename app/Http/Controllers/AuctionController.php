<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\BidProfile;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ngo.organize');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    public function liveBid()
    {
        $bid = BidProfile::all();
        return view('ngo.liveBid',['rate'=>$bid]);
    }

    public function destroyBid($id)
    {
        $bid = BidProfile::destroy($id);
        return redirect()->back();
    }
    public function destroyAuc($id)
    {
        $bid = Auction::destroy($id);
        return redirect()->back();
    }

    public function bidResult()
    {
        $bid = Auction::all();
        return view('ngo.bidResult',['result'=>$bid]);
    }

    public function userAuction()
    {
        $userAuction = Auction::all();
        return view('users.userAuction',['auctions'=>$userAuction]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $auction = new Auction();

        $this->validate($request, [
            'date'=>'required',
            'time_one'=>'required',
            'time_two'=>'required',
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
        $path = $request->file('file')->storeAs('public/auction_images',$fileNameToStore);

        $auction->file=$fileNameToStore;
        $auction->date=$request->date;
        $auction->time_one=$request->time_one;
        $auction->time_two=$request->time_two;
        $auction->heading=$request->heading;
        $auction->paragraph=$request->paragraph;
        $auction->category=$request->category;
        $auction->comment=$request->comment;
        $auction->fullName=$request->fullName;
        $auction->phone=$request->phone;
        $auction->email=$request->email;
        $auction->bid=$request->bid;
        $auction->bidstart=$request->bidstart;
        
        
        $auction->save();

        return redirect()->back()->with('message','Your Craft are add to Auction Section');
    }

    public function bidPost(Request $request)
    {
        $bid = new BidProfile();
        $bid->fullName=$request->fullName;
        $bid->phone=$request->phone;
        $bid->email=$request->email;
        $bid->bid=$request->bid;

        $bid->save();

        return redirect()->back();
    }

    public function editAuc($id)
    {
        $bid = Auction::find($id);
        return view('ngo.editAuc',['publish'=>$bid]);
    }

    public function aucUpdate(Request $request, $id)
    {
        $auc = Auction::find($id);

        $auc->heading=$request->heading;
        $auc->fullName=$request->fullName;
        $auc->result=$request->result;

        $auc->save();

        return redirect('/bidResult')->with('message','Bid Result Published');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showCraft()
    {
        $craft = Auction::all();
        $bid = BidProfile::all();
        return view('auctions',['item'=>$craft,'price'=>$bid]);
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
