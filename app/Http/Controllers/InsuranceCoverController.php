<?php

namespace App\Http\Controllers;

use App\Models\InsuranceCover;
use Illuminate\Http\Request;

class InsuranceCoverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $insuranceCovers= InsuranceCover::query()->paginate(10);
        return view('insuranceCover.index', compact('insuranceCovers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $insuranceCovers= InsuranceCover::query()->paginate(10);
        return view('insuranceCover.create',compact('insuranceCovers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insuranceCover = $request->validate([
            'insurer' => 'required',
            'cost' => 'required',
            'description' => 'nullable'
        ]);
        
        InsuranceCover::create($insuranceCover);
        return redirect()->route('insuranceCover.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(InsuranceCover $insuranceCover)
    {
        return view('insuranceCover.show', compact('insuranceCover'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InsuranceCover $insuranceCover)
    {
        return view('insuranceCover.edit',compact('insuranceCover'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InsuranceCover $insuranceCover)
    {
        $insuranceCover->update($request->all());
        return view('insuranceCover.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InsuranceCover $insuranceCover)
    {
        $insuranceCover->delete();
        $insuranceCovers= InsuranceCover::query()->paginate(10);
        return view('insuranceCover.create',compact('insuranceCovers'));
    }
}
