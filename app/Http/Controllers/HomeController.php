<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EntryRecord;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function enter(Request $request) {
        return [
            "Request"=>"Data has been saved",
            "Entered time" => "16:24:53",
            "user_id" => $request->input('user_id'),
            "type" => "card",
            "enter" => "in"
        ];
    }

    public function out(Request $request) {
        return [
            "Request"=>"Data has been saved",
            "Entered time" => "16:24:53",
            "user_id" => $request->input('user_id'),
            "type" => "card",
            "enter" => "out"
        ];
    }
}
