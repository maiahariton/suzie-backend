<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\aboutModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class aboutController extends Controller
{

        public function index(){

          $aboutContent = DB::table('aboutcontent')->where('status',1)->get();
          $aboutContent1= DB::table('callouts')
   ->join('aboutcontent', 'callouts.pageId', '=', 'aboutcontent.pageId')
   ->select('callouts.id','callouts.title','callouts.title','callouts.title')
   ->distinct()->where('callouts.status', 1)->get(array('aboutcontent.pageId'));

                  return view("About",array
        (
            'aboutContent'    =>  $aboutContent,
            'aboutContent1'  =>  $aboutContent1,
        ));
                              }
        public function add(){

          $aboutContent= new aboutModel;
          $file = Input::file('image');
          $upfile=new uploadFile;
          $path="/app/uploads/";
          $upfile->uploads($path,$file);  //passing file upload path and input name
          $aboutContent->image=$upfile->getImgName();
          $aboutContent->status='1';
          $aboutContent->bodyHtml= Input::get('bodyHtml');
          $aboutContent->headlines= Input::get('headline');
          $aboutContent->bodyText= Input::get('bodyText');
          $aboutContent->save();
         return redirect('about');

        }
        public function edit($id){
         $aboutContent= new aboutModel;
         $aboutContent = DB::table('aboutcontent')->where('id', $id)
        	->where('status',1)->get();// where first() can be use but it will fetch all record
          return view("updateAboutContent",['aboutContent' => $aboutContent]);

        }
        public function update($id){

                    $aboutContent= new aboutModel;
                    $aboutContent = aboutModel::find($id);
                    $aboutContent->status='1';
                    $aboutContent->bodyHtml= Input::get('bodyHtml');
                    $aboutContent->headlines= Input::get('headline');
                    $aboutContent->bodyText= Input::get('bodyText');
      if(Input::hasFile('image'))
                {
                    $file = Input::file('image');
                    $upfile=new uploadFile;
                    $path="/app/uploads/";
                    $upfile->uploads($path,$file);  //passing file upload path and input name
                    $aboutContent->image=$upfile->getImgName();
                }
                    $aboutContent->save();

              return redirect('about');
                   //return back()->withInput();
                                  }

          public function store(Request $Request){

            aboutcontentModel::create(Request::all());
          }
        public function delete($id)
        {
              $aboutContent= new aboutModel;
              $aboutContent = aboutModel::find($id);
              $aboutContent->save();
              $aboutContent->status='0';

        return redirect('about');
            // return back()->withInput();
        }
}
