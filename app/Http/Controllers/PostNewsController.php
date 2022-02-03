<?php

namespace App\Http\Controllers;

use App\Models\NewsCommnet;
use App\Models\NewsPage;
use Illuminate\Http\Request;

class PostNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = NewsPage::all();
        $com = NewsCommnet::all();
        
        return view('/news',['docu'=>$news,'com'=>$com]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $comment = new NewsCommnet();

        // $comment->comment = $request->comment;
        // $comment->name = $request->name;
        // $comment->email = $request->email;
        // $comment->website = $request->website;

        // $comment->save();

        // return view('/news',['docu'=>$comment]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new NewsPage();

        $this->validate($request, [
            'heading'=>'required',
            'paragraph_one'=>'required',
            'paragraph_two'=>'required',
            'cover_image'=>'image|mimes:jpg,png,jpeg'
        ]);

        // File name With Extension
       $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();

        // Just File Name
       $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        // Get With Extension
        $extension = $request->file('cover_image')->getClientOriginalExtension();

        // Create a New File
       $fileToStore = $fileName.'_'.time().'_'.$extension;

        // Upload Image
        $path = $request->file('cover_image')->storeAs('public/news_images', $fileToStore);

        
        $news->cover_image=$fileToStore;
        $news->heading=$request->heading;
        $news->category=$request->category;
        $news->paragraph_one=$request->paragraph_one;
        $news->paragraph_two=$request->paragraph_two;
        $news->paragraph_three=$request->paragraph_three;
        $news->paragraph_four=$request->paragraph_four;
        $news->date=$request->date;

        $news->save();

        return redirect()->back()->with('message','News Posted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $news = NewsPage::all();

        return view('admin.viewNews',['docu'=>$news]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = NewsPage::find($id);

        return view('admin.editNews',['docu'=>$news]);
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
        $news = NewsPage::find($id);

        $this->validate($request, [
            'heading'=>'required',
            'paragraph_one'=>'required',
            'paragraph_two'=>'required',
            'cover_image'=>'image|mimes:jpg,png,jpeg'
        ]);

        // File name With Extension
       $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();

        // Just File Name
       $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        // Get With Extension
        $extension = $request->file('cover_image')->getClientOriginalExtension();

        // Create a New File
       $fileToStore = $fileName.'_'.time().'_'.$extension;

        // Upload Image
        $path = $request->file('cover_image')->storeAs('public/news_images', $fileToStore);

        
        $news->cover_image=$fileToStore;
        $news->heading=$request->heading;
        $news->category=$request->category;
        $news->paragraph_one=$request->paragraph_one;
        $news->paragraph_two=$request->paragraph_two;
        $news->paragraph_three=$request->paragraph_three;
        $news->paragraph_four=$request->paragraph_four;
        $news->date=$request->date;

        $news->save();

        return redirect('viewNews')->with('message','News update');
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
