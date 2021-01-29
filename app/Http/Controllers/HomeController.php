<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // dd(DB::table('answers')->get());
        return view('home');
    }

    public function about()
    {
        return view('about');
    }
}
