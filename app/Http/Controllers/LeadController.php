<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\InsuranceProvider;
use App\Models\InsuranceCover;
use DB;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leads= Lead::query()->paginate(10);
        // $insuranceCovers = InsuranceCover::with('insuranceProvider')->get();
        $providers = InsuranceProvider::pluck('logo', 'id');
        return view('leads.index', compact('leads','providers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('leads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $lead = Lead::create($request->all());
        return redirect()->route('leads.show', compact('lead'))->with('message', 'Here is your Quote');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lead $lead)
    {
        $vehicle_value= $lead->vehicle_value;

        $insuranceCovers= InsuranceCover::query()
            ->where('minimum_value','<',$vehicle_value)
           ->where('maximum_value','>=',$vehicle_value)
            ->with('insuranceProvider')
            ->get();

        $cover_prices = array();
       foreach ($insuranceCovers as $cover) {
           $calculatedPremium = ($cover->basic_rate / 100) * $vehicle_value;
           $actualPremium = 0;
           if ($calculatedPremium < $cover->minimum_premium) {
               $actualPremium = $cover->minimum_premium;
           } else {
               $actualPremium = $calculatedPremium;
           }
           $cover_prices[$cover->id] = $actualPremium;
       }


        return view('leads.show', compact('lead','insuranceCovers', 'cover_prices'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lead $lead)
    {
        //
        return view('leads.edit', compact('lead'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lead $lead)
    {
        $lead->update($request->all());
       return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lead $lead)
    {
        //
        $lead->delete();
        return redirect('/');
    }
}
