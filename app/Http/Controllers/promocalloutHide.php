<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\promocalloutHideModel;
class promocalloutHide extends Controller
{

  public function add(){
  $user=new promocalloutHideModel;
  $user->headlines=input::get("promoheadlines");
  $user->bodyhtml=input::get("promobodyhtml");
  $user->status='1';
  $user->Save();

return view("homepage-one");

    }

    public function store(Request $Request){

      homepageModel::create(Request::all() );
    }
}
