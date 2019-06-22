<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use
    App\Page;
use Intervention\Image\Facades\Image;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pags=Page::paginate(20);
        
        return view('pages.index',compact('pags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('pages.create');
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
        'title'=>'required'];
        $message=[
            'title.required'=>'title is required'
        ];

        $this->validate($request,$rule,$message);

        $pages=Page::create($request->all());

        if($request->hasFile('image')){
            $thumbnail = $request->file('image');
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)->resize(300, 300)->save( public_path('/uploads/' . $filename ) );
            $pages->image = $filename;
            $pages->save();
        };


        flash()->success('created');

     return redirect(route('pages.index'));
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
       $pag=Page::findOrFail($id);
       
       return view('pages.edit',compact('pag'));
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
        $pages=Page::findOrFail($id);
        
        $pages->update($request->all());


        if($request->hasFile('image')){
            $thumbnail = $request->file('image');
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)->resize(300, 300)->save( public_path('/uploads/' . $filename ) );
            $pages->image = $filename;
            $pages->save();
        };


        flash()->success("Edited");

        return redirect (route('pages.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pag=Page::findOrFail($id);
        
        $pag->delete();
        flash()->success("deleted");
         return back();
    }
}
