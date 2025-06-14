<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\BlogModel;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.blog');
    }
    public function submitMessage(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'mail' => 'mail|required',
                'message' => 'required'
            ]
        );

        $contact = new BlogModel();
        $contact->name = $request->name;
        $contact->mail = $request->mail;
        $contact->message = $request->message;
        $contact->save();
        return back()->withSuccess('Thanks for Contacting. We\'ll Contact you ASAP!');
    }

}
