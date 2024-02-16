<?php

namespace App\Http\Controllers;

use App\Models\InsuranceCover;
use App\Models\InsuranceCoverRate;
use App\Models\InsuranceProvider;
use Illuminate\Http\Request;

class InsuranceCoverRateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $insuranceCoverRates= InsuranceCoverRate::query()->paginate(10);
        return view('insuranceCoverRate.index', compact('insuranceCoverRates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $insuranceCoverRates= InsuranceCoverRate::query()->paginate(10);
        $insuranceProviders= InsuranceProvider::all();
        $insuranceCovers = InsuranceCover::pluck('name', 'id');

        return view('insuranceCoverRate.create',compact('insuranceCoverRates','insuranceCovers','insuranceProviders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insuranceCoverRate = $request->validate([
            'insurance_cover' => 'required',
            'minimum_value' => 'nullable',
            'maximum_value'  => 'nullable',
            'basic_rate'  => 'nullable',
            'minimum_premium'  => 'nullable',
            'description' => 'nullable',
            'insurance_cover_id' => 'required'
        ]);


        InsuranceCoverRate::create($insuranceCoverRate);
        return redirect()->route('insuranceCoverRate.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(InsuranceCoverRate $insuranceCoverRate)
    {
        return view('insuranceCoverRate.show', compact('insuranceCoverRate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InsuranceCoverRate $insuranceCoverRate)
    {
        $insuranceCovers = InsuranceCover::pluck('name', 'id');
        return view('insuranceCoverRate.edit',compact('insuranceCoverRate','insuranceCovers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InsuranceCoverRate $insuranceCoverRate)
    {
        $insuranceCoverRate->fill($request->all());

        $insuranceCoverRate->save();

        $insuranceCoverRates= InsuranceCoverRate::query()->paginate(10);
        $insuranceCovers = InsuranceCover::pluck('name', 'id');
        return view('insuranceCoverRate.create', compact('insuranceCoverRates','insuranceCovers'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InsuranceCoverRate $insuranceCoverRate)
    {
        $insuranceCoverRate->delete();
        $insuranceCoverRates= InsuranceCoverRate::query()->paginate(10);

        $insuranceCovers = InsuranceCover::pluck('name', 'id');
        return view('insuranceCoverRate.create',compact('insuranceCoverRates','insuranceCovers'));
    }
}
