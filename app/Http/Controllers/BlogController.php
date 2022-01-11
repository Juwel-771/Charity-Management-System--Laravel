<?php

namespace App\Http\Controllers;

use App\Models\BlogForm;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = BlogForm::paginate(4);

        return view('/blog',['blogs'=> $blog]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new BlogForm();

        $this->validate($request, [
            'date'=>'required',
            'heading'=>'required',
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
        $path = $request->file('file')->storeAs('public/blog_images',$fileNameToStore);

        
        $blog->file=$fileNameToStore;
        $blog->date=$request->date;
        $blog->heading=$request->heading;
        $blog->paragraph=$request->paragraph;
        $blog->category=$request->category;
        $blog->comment=$request->comment;

        $blog->save();

        return redirect()->back()->with('message','Blog Posted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    public function detail(){
        $blog = BlogForm::all();

        return view('admin.viewblog',['blogs'=>$blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = BlogForm::find($id);

        return view('admin.editblog',['blogs'=>$blog]);
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
        $blog = BlogForm::find($id);

        $this->validate($request, [
            'date'=>'required',
            'heading'=>'required',
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
        $path = $request->file('file')->storeAs('public/blog_images',$fileNameToStore);

        
        $blog->file=$fileNameToStore;
        $blog->date=$request->date;
        $blog->heading=$request->heading;
        $blog->paragraph=$request->paragraph;
        $blog->category=$request->category;
        $blog->comment=$request->comment;

        $blog->save();

        return redirect('viewblog')->with('message','Blog updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = BlogForm::destroy($id);

        return redirect()->back()->with('message','Blog Deleted');
    }
}
