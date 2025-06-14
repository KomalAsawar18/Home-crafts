<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\ElementsFaqsModel;
use Illuminate\Http\Request;

class ElementsFaqsController extends Controller
{
    public function index()
    {
        return view('frontend.elements-faq');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(ElementsFaqsModel $elementsFaqsModel)
    {
        //
    }

    public function edit(ElementsFaqsModel $elementsFaqsModel)
    {
        //
    }
    public function update(Request $request, ElementsFaqsModel $elementsFaqsModel)
    {
        //
    }

    public function destroy(ElementsFaqsModel $elementsFaqsModel)
    {
        //
    }
}
