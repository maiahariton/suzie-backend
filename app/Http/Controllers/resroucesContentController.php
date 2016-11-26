<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\resroucesContentModel;

class resroucesContentController extends Controller
{

  public function add(){
    $resContent= new resroucesContentModel;
    $resContent->name=Input::get("name");
    $resContent->bodyHtml=Input::get("bodyHtml");
    $resContent->order=Input::get("order");
    $resContent->resourceId=Input::get("resourceId");
    $resContent->status='1';
    $resContent->Save();
    //$product= DB::table('resources')->join('resources', '$resContent->resourceId=', '=', 'rescontent.id')->select('resources.name','resources.image','rescontent.id','rescontent.name')
            //  ->get();
  return redirect("resources");
  //  return redirect('resources');

  }
  public function edit($id){
    $resContent= new resroucesContentModel;
    $resContent = DB::table('rescontent')->where('resContentId', $id)
  	->where('status',1)->get();
    return view("updateResrouceSection",['resContent' => $resContent]);
  }

  public function update($id){
    $resContent= new resroucesContentModel;
    $resContentName=Request::input('name');
    $bodyHtml=Request::input('bodyHtml');
    $resourceId=Request::input('resourceId');
    $order=Input::get("order");
    $resContent->status='1';
    DB::table('resContent')->where('resContentId', $id)->update(['resContentName' => $resContentName
    ,'bodyHtml'=>$bodyHtml,'resourceId'=>$resourceId]);
  //  $affected = DB::update('update resContent set resContentName =? where resContentId = ?', [$resContentName,$id]);
    return redirect('resources');
///added custom query bcz laravel 5.3 didnt allow to change find('$id') param
      }
}
