<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\newsletterPageModel;
class newsletterPageContoroller extends Controller
{

  public function add(){
  $user=new newsletterPageModel;
  $user->headlines=input::get("nleadlines");
  $user->bodyhtml=input::get("bodyhtml");
  $user->status='1';
  $user->Save();

return view("homepage-one");

    }

    public function store(Request $Request){

      homepageModel::create(Request::all() );
    }
}
