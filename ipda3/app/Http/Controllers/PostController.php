<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Post;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::paginate(20);
        
        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('post.create');
    }


    public function store(Request $request)
    {
       $rule=[
         'image','date','text','title'=>'required'
       ];
       $message=[
           'image.required'=>'image is required'];
       $this->validate($request,$rule,$message);

       $post=Post::create($request->all());




        if($request->hasFile('image')){
            $thumbnail = $request->file('image');
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)->resize(300, 300)->save( public_path('/uploads/' . $filename ) );
            $post->image = $filename;
            $post->save();
        };


        flash()->success('created');
       return redirect (route('post.index'));

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
        $pos=Post::findOrFail($id);
        
        return view('post.edit',compact('pos'));
        
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
        $mos=Post::findOrFail($id);
        
        $mos->update($request->all());
        if($request->hasFile('image')){
            $thumbnail = $request->file('image');
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)->resize(300, 300)->save( public_path('/uploads/' . $filename ) );
            $mos->image = $filename;
            $mos->save();
        };
        flash()->success("Edited");
        return redirect(route('post.index'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pos=Post::findOrFail($id);
        
        $pos->delete();
        flash()->success("deleted");
         return back();
    }
}
