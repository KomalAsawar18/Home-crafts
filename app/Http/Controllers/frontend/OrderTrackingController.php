<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\OrderTrackingModel;
use Illuminate\Http\Request;

class OrderTrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.order-tracking');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderTrackingModel $orderTrackingModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderTrackingModel $orderTrackingModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderTrackingModel $orderTrackingModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderTrackingModel $orderTrackingModel)
    {
        //
    }
}
