<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\KitchenModel;
use Illuminate\Http\Request;

class KitchenController extends Controller
{

    public function index()
    {
        return view('frontend.kitchen');
    }


}
