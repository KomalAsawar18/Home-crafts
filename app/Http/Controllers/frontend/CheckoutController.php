<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\CheckoutModel;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function index()
    {
        return view('frontend.checkout');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(CheckoutModel $checkoutModel)
    {
        //
    }

    public function edit(CheckoutModel $checkoutModel)
    {
        //
    }

    public function update(Request $request, CheckoutModel $checkoutModel)
    {
        //
    }

    public function destroy(CheckoutModel $checkoutModel)
    {
        //
    }
}
