<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Constat;


class ConstatsController extends Controller
{
    public function index()
    {
        $constats = Constat::latest()->paginate(20);
    
        return view('constats.index',compact('constats'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('constats.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        Constat::create($request->all());
     
        return redirect('/constats')
                        ->with('success','constats created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Constat $constat)
    {
        return view('constats.show',compact('constat'));
    } 
    public function edit(Constat $constat)
    {
        return view('constats.edit',compact('constat'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Constat  $Constat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Constat $constat)
    {
       
    
        $constat->update($request->all());
    
        return redirect()->route('constats.index')
                        ->with('success','Constat updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Constat  $Constat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Constat $constat)
    {
        $constat->delete();
    
        return redirect()->route('constats.index')
                        ->with('success','Constat deleted successfully');
    }
}
