<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\calloutModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class calloutContorller extends Controller
{

      public function index(){

      $callout = DB::table('callouts')->where('status',1)->get();
       return view("calloutsHome",['callout' => $callout]);
     }
      public function add(){

        $callout= new calloutModel;
        $callout->title=Input::get("title");
        $callout->status='1';
        $file = Input::file('productImage');
        $callout->bodyHtml= Input::get('bodyHtml');
        $callout->calloutOrder= Input::get('calloutOrder');
        $upfile=new uploadFile;
        $path="/app/uploads/";
        $upfile->uploads($path,$file);  //passing file upload path and input name
        $callout->image=$upfile->getImgName();
        $callout->save();
       return view('calloutsHome');

      }
      public function edit($id){
        $callout= new calloutModel;
       $callout = DB::table('callouts')->where('id', $id)
      	->where('status',1)->get();// where first() can be use but it will fetch all record
        return view("editCallout",['callout' => $callout]);

      }
      public function update($id){
        echo "updated";
                  $callout= new calloutModel;
                  $callout = calloutModel::find($id);
                  $callout->title = Input::get('title');
                  $callout->bodyHtml= Input::get('bodyHtml');
                  $callout->calloutOrder=Input::get('calloutOrder');
    if(Input::hasFile('photo'))
              {
                  $file = Input::file('photo');
                  $upfile=new uploadFile;
                  $path="/app/uploads/";
                  $upfile->uploads($path,$file);  //passing file upload path and input name
                  $callout->image=$upfile->getImgName();
              }
                  $callout->save();

            return redirect('calloutsHome');
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

      return redirect('calloutsHome');
          // return back()->withInput();
      }
}
