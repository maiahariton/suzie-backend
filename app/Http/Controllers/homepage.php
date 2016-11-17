<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\homepageModel;

class homepage extends Controller
{
  public function index(){
return view("homepage-one");

  }
  public function add(){
    $users=new homepageModel;
    $user->title=input::get("pagetitle");
    $user->url=input::get("url");
    $user->metadescription=input::get("metaDescription");
    $user->metakeywords=input::get("metaKeywords");
    $user->status='1';
    $user->Save();

    return view("homepage-one");

  }


  public function store(Request $Request){

    homepageModel::create(Request::all() );
  }
}
