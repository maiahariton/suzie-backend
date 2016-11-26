<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\PKAddSectionModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
class PKAddSectionController extends Controller
{
public function PKAddSectionController(){
$user= new PKAddSectionModel;

}


  public function index(){
    $product=DB::table('productcontent')->where('status',1)->get();
   return view("PKContentSection",['product' => $product]);
}

public function add(){
  $user= new PKAddSectionModel;
  $user->title=Input::get("title");
  $user->bodyHtml=Input::get("bodyHtml");
  $user->order=Input::get("order");
  $user->status="1";
  $user->Save();

 return redirect('pkcontentsection');

}
  public function store(Request $Request){

    sliderModel::create(Request::all());
  }
//This controller eneded here becasue further crud task not initiated in product and section
}
