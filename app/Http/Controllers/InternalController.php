<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InternalController extends Controller
{
    public function index() {
      return view('pages.internal.index');
    }
}
