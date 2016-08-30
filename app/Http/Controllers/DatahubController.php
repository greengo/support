<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DatahubController extends Controller
{
    public function index(){
      return view('pages.datahub.index');
    }

    public function retur(){

      $tp_key = Input::get('thirdPartyKey', 'default key');

      //dd($key);

      return view('pages.datahub.retur');
    }
}
