<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DatahubController extends Controller
{
    public function index(){
      return view('pages.datahub.index');
    }

    public function retur(Request $request){

      $key = $request->input('thirdPartyKey', 'default key');

      dd($key);

      return view('pages.datahub.retur');
    }
}
