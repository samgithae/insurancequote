<?php

namespace App\Http\Controllers;

use App\Models\InsuranceCover;
use App\Models\InsuranceProvider;
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
        $insuranceProviders = InsuranceProvider::pluck('name', 'id');

        return view('insuranceCover.create',compact('insuranceCovers','insuranceProviders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insuranceCover = $request->validate([
            'insurance_provider_name' => 'required',
            'name' => 'required',
            'insurance_provider_id' => 'required'
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
        $insuranceProviders = InsuranceProvider::pluck('name', 'id');
        return view('insuranceCover.edit',compact('insuranceCover','insuranceProviders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InsuranceCover $insuranceCover)
    {
        $insuranceCover->fill($request->all());

        $insuranceCover->save();

        $insuranceCovers= InsuranceCover::query()->paginate(10);
        $insuranceProviders = InsuranceProvider::pluck('name', 'id');
        return view('insuranceCover.create', compact('insuranceCovers','insuranceProviders'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InsuranceCover $insuranceCover)
    {
        $insuranceCover->delete();
        $insuranceCovers= InsuranceCover::query()->paginate(10);

        $insuranceProviders = InsuranceProvider::pluck('name', 'id');
        return view('insuranceCover.create',compact('insuranceCovers','insuranceProviders'));
    }
}
