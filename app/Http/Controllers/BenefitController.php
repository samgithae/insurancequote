<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\Lead;
use Illuminate\Http\Request;

class BenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $benefits= Benefit::query()->paginate(10);
        return view('benefit.index',compact('benefits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $benefits= Benefit::query()->paginate(10);
        return view('benefit.create',compact('benefits'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $benefit = Benefit::create($request->all());
        $benefit = $request->validate([
            'insuranceCover' => 'required',
            'benefit' => 'required',
            'value' => 'required|integer',
            'status' => 'required',
            'cost' => 'nullable|integer'
        ]);
        return redirect()->route('benefit.create',compact('benefit'))->with('message','Benefit saved Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Benefit $benefit)
    {
        return view('benefit.show',compact('benefit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Benefit $benefit)
    {
        return view('benefit.edit', compact('benefit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Benefit $benefit)
    {        
        $benefit->fill($request->all());

        $benefit->save();
        $benefits= benefit::query()->paginate(10);
        return view('benefit.create', compact("benefits"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Benefit $benefit)
    {
        $benefit->delete();
        $benefits= Benefit::query()->paginate(10);
        return view('benefit.create',compact('benefits'));
    }
}
