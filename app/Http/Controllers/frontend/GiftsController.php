<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\GiftsModel;
use Illuminate\Http\Request;

class GiftsController extends Controller
{

    public function index()
    {
        return view('frontend.gifts');
    }

}
