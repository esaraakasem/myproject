<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coms=Company::paginate(20);
        
        return view('company.index',compact('coms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rule=['name','detail'=>'required'];

        $message=['name.required'=>'name is required'];

        $this->validate($request,$rule,$message);

        $comp=Company::create($request->all());

        flash()->success('created');
        return redirect(route('company.index'));

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
         $cat=Company::findOrFail($id);
       
       return view('company.edit',compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     **/


    public function update(Request $request, $id)
    {
        $catogerys=Company::findOrFail($id);
    
    $catogerys->update($request->all());
        flash()->success("Edited");
    

    return redirect(route('company.index'));
    
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ds=Company::findOrFail($id);
        $ds->delete();
        flash()->success("deleted");
        return back();
        
    }
}
