<?php

namespace App\Http\Controllers;

use App\Models\InsuranceProvider;
use Illuminate\Http\Request;

class InsuranceProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $insuranceProviders= InsuranceProvider::query()->paginate(10);
        return view('insuranceProvider.index', compact('insuranceProviders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $insuranceProviders= InsuranceProvider::query()->paginate(10);
        return view('insuranceProvider.create',compact('insuranceProviders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insuranceProvider = $request->all();
        $fileName = time().$request->file('logo')->getClientOriginalName();
        $path = $request->file('logo')->storeAs('assets/images/logos',$fileName, 'public');
        $insuranceProvider["logo"]='/storage/'.$path;
        InsuranceProvider::create($insuranceProvider);
        return redirect()->route('insuranceProvider.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(InsuranceProvider $insuranceProvider)
    {
        return view('insuranceProvider.show', compact('insuranceProvider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InsuranceProvider $insuranceProvider)
    {
        return view('insuranceProvider.edit',compact('insuranceProvider'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InsuranceProvider $insuranceProvider)
    {


//dd($request);
        $insuranceProvider->fill($request->except('logo')); // Exclude logo field temporarily

        // Update logo if a new one is provided
        if ($request->hasFile('logo')) {
            $fileName = time() . $request->file('logo')->getClientOriginalName();
            $path = $request->file('logo')->storeAs('assets/images/logos', $fileName, 'public');
            $insuranceProvider->logo = '/storage/' . $path;
        }
        $insuranceProvider->save();
        $insuranceProviders= InsuranceProvider::query()->paginate(10);
        return view('insuranceProvider.create', compact("insuranceProviders"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InsuranceProvider $insuranceProvider)
    {
        $insuranceProvider->delete();
        $insuranceProviders= InsuranceProvider::query()->paginate(10);
        return view('insuranceProvider.create',compact('insuranceProviders'));
    }
}
