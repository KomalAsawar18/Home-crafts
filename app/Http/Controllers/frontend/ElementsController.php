<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\ElementsModel;
use Illuminate\Http\Request;

class ElementsController extends Controller
{
    public function index()
    {
        return view('frontend.elements-products');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(ElementsModel $elementsModel)
    {
        //
    }

    public function edit(ElementsModel $elementsModel)
    {
        //
    }

    public function update(Request $request, ElementsModel $elementsModel)
    {
        //
    }

    public function destroy(ElementsModel $elementsModel)
    {
        //
    }
}
