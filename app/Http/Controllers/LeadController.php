<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\InsuranceProvider;
use App\Models\InsuranceCover;
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
        $providers = InsuranceProvider::pluck('logo', 'id');
        return view('leads.show', compact('lead','providers'));
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
