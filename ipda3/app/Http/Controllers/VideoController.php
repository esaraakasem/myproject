<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Video;
use Intervention\Image\Facades\Image;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $videos=Video::paginate(20);
     
     return view('videos.index',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $rule=[
'video','image','title'=>'required'
       ];
       $message=[

           'video.required'=>'video is required'
       ];

       $this->validate($request,$rule,$message);

       $video=Video::create($request->all());


        if($request->hasFile('image')){
            $thumbnail = $request->file('image');
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)->resize(300, 300)->save( public_path('/uploads/' . $filename ) );
            $video->image = $filename;
            $video->save();
        };

        flash()->success('created');
       return redirect(route('video.index'));
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
       $vod=Video::findOrFail($id);
       return view('videos.edit',compact('vod'));
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
         $mod=Video::findOrFail($id);
         
         $mod->update($request->all());


        if($request->hasFile('image')){
            $thumbnail = $request->file('image');
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)->resize(300, 300)->save( public_path('/uploads/' . $filename ) );
            $mod->image = $filename;
            $mod->save();
        };

        flash()->success("Edited");

        return redirect(route('video.index'));

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vid=Video::findOrFail($id);
        $vid->delete();
        flash()->success('deleted');
        return back();

    }
}
