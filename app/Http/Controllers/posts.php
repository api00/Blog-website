<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Auth;
use App\User;

class posts extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = post::all();
        return view('blog.index',[
            'all' => $all
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('blog.create_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
        
        $name = $request->file('image')->getClientOriginalName();
        
        $request->file('image')->move('images',$name);
        $post = new post();
        $post->image_path = $name;
        $post->title= $request->input('title');
        $post->description= $request->input('description');
        $post->user_id = auth()->user()->id;
        $post->save();

       
        return redirect('/index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $find = post::find($id);
     
        return view('blog.show',[
            'find' => $find
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $find = post::find($id);
       
        return view('blog.edit',[
            'find' => $find
        ]);
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
        
       
        $post = post::find($id);
        $post->title= $request->input('title');
        $post->description= $request->input('description');
        $post->user_id = auth()->user()->id;

        $post->update();
        return redirect('/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        $post->delete();
        return redirect('/index');
    }
}
