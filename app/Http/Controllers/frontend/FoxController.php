<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\FrontModel;
use Illuminate\Http\Request;

class FoxController extends Controller
{
    public function index()
    {
        return view('frontend.fox');
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(FrontModel $frontModel)
    {
        //
    }

    public function edit(FrontModel $frontModel)
    {
        //
    }

    public function update(Request $request, FrontModel $frontModel)
    {
        //
    }

    public function destroy(FrontModel $frontModel)
    {
        //
    }
}
