<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sliderModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
class sliderController extends Controller
{
public function sliderController(){
$user= new sliderModel;

}

public function index(){
  $user = DB::table('slider')->where('status',1)->get();
return view("carousel",['user' => $user]);
}

public function add(){
  $user= new sliderModel;
  $user->title=Input::get("title");
  $user->headlinesCaption=Input::get("headlines");
  $user->subHeadlinesCaption=Input::get("subHeadlines");

   if(Input::hasFile('photo'))
                   {

                       $file = Input::file('photo');
                       $image=$file->getClientOriginalName();
                       $file->move(null.'\app\uploads', $image);

                   }

 $user->image=$file->getClientOriginalName();
  $user->slideOrder=Input::get("order");
  $user->status='1';

  $user->Save();

  return view('addslide');

}
public function edit($id){
  $user= new sliderModel;
 $user = DB::table('slider')->where('id', $id)
	->where('status',1)->get();// where first() can be use but it will fetch all record
  return view("updateSlider",['user' => $user]);
}

public function update($id){
            $user= new sliderModel;
            $user = sliderModel::find($id);
            $user->title = Input::get('title');

            $user->headlinesCaption= Input::get('headlinesCaption');
            $user->subHeadlinesCaption= Input::get('subHeadlinesCaption');
            $user->slideOrder=Input::get('slideOrder');
  if(Input::hasFile('image'))
            {
  $files = Input::file('image');
            $upfile=new uploadFile;
            $path="/app/uploads/";
            $upfile->uploads($path,$files);  //passing file upload path and input name
            $user->image=$upfile->getImgName();
          }
            $user->save();

                  return redirect('carousel');
                          }

  public function store(Request $Request){

    sliderModel::create(Request::all());
  }
public function delete($id)
{
       //DB::delete('update slider set status=? where id = ?','0',[$id]);
      //  return redirect('/')->with('success', 'Record has been deleted');

      $user= new sliderModel;
      $user = sliderModel::find($id);
      $user->status='0';
      $user->save();
  return redirect('carousel');
}

}
