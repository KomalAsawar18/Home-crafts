<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('frontend.about');
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show(AboutModel $aboutModel)
    {
        //
    }

    public function edit(AboutModel $aboutModel)
    {
        //
    }
    public function update(Request $request, AboutModel $aboutModel)
    {
        //
    }
    public function destroy(AboutModel $aboutModel)
    {
        //
    }
}
