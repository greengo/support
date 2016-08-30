<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function manuals()
    {
        return view('pages.manuals');
    }
    public function guides()
    {
        return view('pages.guides');
    }
    public function faq()
    {
        return view('pages.faq');
    }
}
