<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\WalnutModel;
use Illuminate\Http\Request;

class WalnutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.walnut');
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
    public function show(WalnutModel $walnutModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WalnutModel $walnutModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WalnutModel $walnutModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WalnutModel $walnutModel)
    {
        //
    }
}
