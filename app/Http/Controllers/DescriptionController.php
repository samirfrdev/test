<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Description;
use App\Models\Concerne;


class DescriptionController extends Controller


{
    public function index()
    {
    $descriptions = Description::with('concerne')->latest()->paginate(20);
    
    return view('descriptions.index',compact('descriptions'))
        ->with('i', (request()->input('page', 1) - 1) * 5);


      
      }
 
/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()

{
    // $concernes = Concerne::all();
    // return view('descriptions.creats',compact('concernes'));*
    $concernes = Concerne::all();
    return view('descriptions.create',compact('concernes'));
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
   
    Description::create($request->all());
 
    return redirect('/descriptions')
                    ->with('success','description created successfully.');
}
 
/**
 * Display the specified resource.
 *
 * @param  \App\Product  $product
 * @return \Illuminate\Http\Response
 */
public function show(Description $description)
{
    return view('descriptions.show',compact('description'));
} 
public function edit(Description $description)
{
    $concernes = Concerne::all();

    return view('descriptions.edit',compact('description','concernes'));
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Concerne  $Concerne
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, Description $description)
{
   

    $description->update($request->all());

    return redirect()->route('descriptions.index')
                    ->with('success','description updated successfully');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  \App\Concerne  $Concerne
 * @return \Illuminate\Http\Response
 */
public function destroy(Description $description)
{
    $description->delete();

    return redirect()->route('descriptions.index')
                    ->with('success','description deleted successfully');
}
}
