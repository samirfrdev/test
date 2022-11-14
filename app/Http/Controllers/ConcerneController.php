<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concerne;
use App\Models\Constat;

class ConcerneController extends Controller
{
    public function index()
    {
        $concernes = Concerne::with('constat')->latest()->paginate(20);
    
        return view('concernes.index',compact('concernes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);




          
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $constats = Constat::all();
        return view('concernes.create',compact('constats'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        concerne::create($request->all());
     
        return redirect('/concernes')
                        ->with('success','concerns created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Concerne $concerne)
    {
        return view('concernes.show',compact('concerne'));
    } 
    public function edit(Concerne $concerne)
    {
        $constats = Constat::all();

        return view('concernes.edit',compact('concerne','constats'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Concerne  $Concerne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Concerne $concerne)
    {
       
    
        $concerne->update($request->all());
    
        return redirect()->route('concernes.index')
                        ->with('success','Concerne updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Concerne  $Concerne
     * @return \Illuminate\Http\Response
     */
    public function destroy(Concerne $Concerne)
    {
        $Concerne->delete();
    
        return redirect()->route('concernes.index')
                        ->with('success','Concerne deleted successfully');
    }
}
