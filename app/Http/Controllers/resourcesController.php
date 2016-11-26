<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\resourcesModel;
class resourcesController extends Controller
{
  public function index(){
    $resources = DB::table('resrouces')->where('status',1)->get();
    return view("resources",['resources' => $resources]);
  }

  public function add(){
    $resources= new resourcesModel;
    $resources->name=Input::get("name");
    if(Input::hasFile('image'))
              {
    $files = Input::file('image');
              $upfile=new uploadFile;
              $path="/app/uploads/";
              $upfile->uploads($path,$files);  //passing file upload path and input name
              $resources->image=$upfile->getImgName();
            } $resources->image=$files->getClientOriginalName();
    $resources->order=Input::get("order");
    $resources->status='1';
    $resources->Save();
    return redirect('resources');

  }
  public function edit($id){
    $resources= new resourcesModel;
  $resources = DB::table('resrouces')->where('id', $id)
  	->where('status',1)->get();// where first() can be use but it will fetch all record
    $resContent= DB::table('resrouces')
              ->join('rescontent', 'resrouces.id', '=', 'rescontent.resourceId')
              ->select('rescontent.resContentName', 'rescontent.resContentId')
              ->get();
              return view("updateResource",array
    (
        'resources'    =>  $resources,
        'resContent'  =>  $resContent,
    )
  );

              }

  public function update($id){
    $resources= new resourcesModel;
    $resources = resourcesModel::find($id);
    $resources->name=Input::get("name");
    $resources->order=Input::get("order");
    $resources->status='1';
    if(Input::hasFile('image'))
              {
              $files = Input::file('image');
              $upfile=new uploadFile;
              $path="/app/uploads/";
              $upfile->uploads($path,$files);  //passing file upload path and input name
              $resources->image=$upfile->getImgName();
              $resources->image=$files->getClientOriginalName();
              $resources->Save();
            }
      else{


         $resources->update(Input::except('image'));
      }



    return redirect('resources');
                            }

    public function store(Request $Request){

      resroucesModel::create(Request::all());
    }

}
