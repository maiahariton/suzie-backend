<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\videoModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class videoController extends Controller
{


    public function index(){
      $video = DB::table('videos')->where('status',1)->get();
     return view("videosHome",['video' => $video]);
   }
    public function add(){
      $video= new videoModel;
      $video->title=Input::get("title");
      $video->videoType=Input::get("videoType");
      $video->videoUrl=Input::get("videoUrl");
      $video->videoOrder=Input::get("videoOrder");
      $video->status='1';
      $video->Save();
     return view('addVideo');

    }
    public function edit($id){
      $video= new videoModel;
     $video = DB::table('videos')->where('id', $id)
    	->where('status',1)->get();// where first() can be use but it will fetch all record
      return view("editvideo",['video' => $video]);
    }
    public function update($id){
                $video= new videoModel;
                $video = videoModel::find($id);
                $video->title = Input::get('title');
                $video->videoType= Input::get('videoType');
                $video->videoUrl= Input::get('videoUrl');
                $video->videoOrder=Input::get('videoOrder');
                $video->save();
              return redirect('videosHome');
                              }

      public function store(Request $Request){

        videoModel::create(Request::all());
      }
    public function delete($id)
    {
           //DB::delete('update slider set status=? where id = ?','0',[$id]);
          //  return redirect('/')->with('success', 'Record has been deleted');

          $video= new videoModel;
          $video = videoModel::find($id);
          $video->status='0';
          $video->save();

    return redirect('videosHome');
        // return back()->withInput();
    }


}
