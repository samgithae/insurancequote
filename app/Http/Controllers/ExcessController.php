<?php

namespace App\Http\Controllers;

use App\Models\Excess;
use App\Models\Lead;
use App\Models\InsuranceCover;
use Illuminate\Http\Request;

class ExcessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $excesses= Excess::query()->paginate(10);
        return view('excess.index',compact('excesses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $excesses= Excess::query()->paginate(10);
        $insuranceCovers = InsuranceCover::pluck('name', 'id');

        return view('excess.create',compact('excesses','insuranceCovers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $excess = $request->validate([
            'name' => 'nullable',
            'amount' => 'nullable',
            'insurance_cover_id'=>'required'
        ]);
        $excess = Excess::create($request->all());

        return redirect()->route('excess.create',compact('excess'))->with('message','Excess saved Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Excess $excess)
    {
        return view('excess.show',compact('excess'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Excess $excess)
    {
        $insuranceCovers = InsuranceCover::pluck('name', 'id');
        return view('excess.edit', compact('excess','insuranceCovers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Excess $excess)
    {
        $excess->fill($request->all());

        $excess->save();
        $excesses= Excess::query()->paginate(10);
        $insuranceCovers = InsuranceCover::pluck('name', 'id');
        return view('excess.create', compact('excesses','insuranceCovers'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Excess $excess)
    {
        $excess->delete();
        $excesses= Excess::query()->paginate(10);
        $insuranceCovers = InsuranceCover::pluck('name', 'id');
        return view('excess.create',compact('excesses','insuranceCovers'));
    }
}
