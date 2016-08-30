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

      $tp_key = $request->input('thirdPartyKey', 'no key passed');

      // register that $key has given access to their meters.

      return view('pages.datahub.retur', $tp_key);
    }
}
