<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\Lead;
use App\Models\InsuranceCoverRate;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders= Order::query()->paginate(10);
        return view('order.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $orders= Order::query()->paginate(10);
        $leads = Lead::pluck('name', 'id');
        $insuranceCoverRates = InsuranceCoverRate::pluck('id');
        $benefits = Benefit::pluck('benefit', 'id');

        return view('order.create',compact('orders','leads', 'benefits','insuranceCoverRates'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $order = $request->validate([
            'insurance_cover_rate_id' => 'nullable',
            'benefit' => 'nullable',
            'benefit_id' => 'nullable',
            'lead' => 'nullable',
            'lead_id' => 'nullable',
        ]);
        $order = Order::create($request->all());

        return redirect()->route('order.create',compact('order'))->with('message','Order saved Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('order.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $leads = Lead::pluck('name', 'id');
        $insuranceCoverRates = InsuranceCoverRate::pluck('id');
        $benefits = Benefit::pluck('benefit', 'id');

        return view('order.create', compact('order','leads', 'benefits','insuranceCoverRates'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $order->fill($request->all());

        $order->save();
        $orders= Order::query()->paginate(10);
        $leads = Lead::pluck('name', 'id');
        $insuranceCoverRates = InsuranceCoverRate::pluck('id');
        $benefits = Benefit::pluck('benefit', 'id');

        return view('order.create',compact('orders','leads', 'benefits','insuranceCoverRates'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        $orders= Order::query()->paginate(10);
        $leads = Lead::pluck('name', 'id');
        $insuranceCoverRates = InsuranceCoverRate::pluck('id');
        $benefits = Benefit::pluck('benefit', 'id');

        return view('order.create',compact('orders','leads', 'benefits','insuranceCoverRates'));
    }
}
