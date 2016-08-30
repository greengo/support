<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InternalController extends Controller
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

    public function index() {
      return view('pages.internal.index');
    }

    public function datahub() {
      return view('pages.internal.datahub');
    }
}
