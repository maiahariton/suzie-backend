<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\blogCalloutsModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class blogCalloutsController extends Controller
{
  public function index(){
$blog="blog";
//  $callout = DB::table('blogposts')->where('status',1)->get();
$pageId= DB::table('pages')->select('id')->where('status',1)->where('title',$blog)->get();

foreach($pageId as $pid)
  $callout = DB::table('callouts')->where("status",1)->where("pageId",$pid->id)->get();

$posts= DB::table('blogposts')->select('id','pagetitle')
->where('status',1)->get();

return view("blogcallouts",array
(
'callout'    =>  $callout,
'blog'  =>  $blog,
));
   }
  public function add(){

    $callout= new blogCalloutsModel;
    $callout->pagetitle=Input::get("pagetitle");
    $callout->url=Input::get("url");
    $callout->metaDescription=Input::get("metaDescription");
    $callout->metakeywords=Input::get("metakeywords");
    $callout->bodyHtml=Input::get("bodyHtml");
    $callout->blurb=Input::get("blurb");
   $callout->tags=Input::get("tags");
    $callout->slug=Input::get("slug");
    $callout->visibility=Input::get("visibility");
    $callout->status='1';
    if(Input::hasFile('timage'))
              {
                  $file = Input::file('timage');
                  $upfile=new uploadFile;
                  $path="/app/uploads/";
                  $upfile->uploads($path,$file);  //passing file upload path and input name
                  $callout->timage=$upfile->getImgName();
              }
              if(Input::hasFile('fimage'))
                        {
                            $file = Input::file('fimage');
                            $upfile=new uploadFile;
                            $path="/app/uploads/";
                            $upfile->uploads($path,$file);  //passing file upload path and input name
                            $callout->fimage=$upfile->getImgName();
                        }
    $callout->save();

   return redirect('blogcallouts');

  }
  public function edit($id){
    $callout= new calloutModel;
   $callout = DB::table('callouts')->where('id', $id)
    ->where('status',1)->get();// where first() can be use but it will fetch all record
    return view("updateCallout",['callout' => $callout]);

  }
  public function update($id){

              $callout= new calloutModel;
              $callout = calloutModel::find($id);
              $callout->title = Input::get('title');
              $callout->bodyHtml= Input::get('bodyHtml');
              $callout->calloutOrder=Input::get('calloutOrder');
              $callout->pageId=Input::get('pageId');
if(Input::hasFile('photo'))
          {
              $file = Input::file('photo');
              $upfile=new uploadFile;
              $path="/app/uploads/";
              $upfile->uploads($path,$file);  //passing file upload path and input name
              $callout->image=$upfile->getImgName();
          }
              $callout->save();

        return redirect('calloutshome');
             //return back()->withInput();
                            }

    public function store(Request $Request){

      calloutModel::create(Request::all());
    }
  public function delete($id)
  {
        $callout= new calloutModel;
        $callout = calloutModel::find($id);
        $callout->status='0';
        $callout->save();

  return redirect('calloutshome');
      // return back()->withInput();
  }
}
