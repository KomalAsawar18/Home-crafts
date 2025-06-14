<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\MugModel;
use Illuminate\Http\Request;

class MugController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.mug');
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
    public function show(MugModel $mugModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MugModel $mugModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MugModel $mugModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MugModel $mugModel)
    {
        //
    }
}
