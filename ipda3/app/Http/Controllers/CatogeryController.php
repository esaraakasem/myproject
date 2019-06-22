<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Catogery;

class CatogeryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cats=Catogery::paginate(20);

      
      return view('catogery.index',compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catogery.create');
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
           'name'=>'required'
           
       ];
       $messages=[
           'name.required'=>'this name is required'
       ];
       
       $this->validate=[$request,$rule,$messages];
       
       $record=Catogery::create($request->all());
        flash()->success("created");
       return redirect(route('catogery.index'));
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
       $cat=Catogery::findOrFail($id);
       
       return view('catogery.edit',compact('cat'));
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
    $catogery=Catogery::findOrFail($id);
    
    $catogery->update($request->all());
        flash()->success("Edited");
    
    return redirect(route('catogery.index'));
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $dele=  Catogery::findOrFail($id);

      $dele->delete();

        flash()->success("deleted");

      return back();
    }
}
