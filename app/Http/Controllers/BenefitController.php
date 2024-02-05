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
        return view('benefits.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('benefits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $benefit = Benefit::create($request->all());
        return redirect()->route('benefits.create',compact('benefit'))->with('message','Benefit saved Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Benefit $benefit)
    {
        return view('benefits.show',compact('benefit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Benefit $benefit)
    {
        return view('benefits.edit', compact('benefit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Benefit $benefit)
    {
        $benefit->update($request->all());
        return view('benefits.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Benefit $benefit)
    {
        $benefit->delete();
        return view('benefits.create');
    }
}
