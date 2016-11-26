<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\scrapbookModel;

class scrapbookController extends Controller
{
  public function index(){
    $sbImages = DB::table('scrapimages')->where('status',1)->get();
    return view("scrapbook",['sbImages' => $sbImages]);
  }

  public function add(){
    $sbImages= new scrapbookModel;
    $sbImages->caption=Input::get("caption");
    $sbImages->imgOrder=Input::get("order");
     if(Input::hasFile('image'))
{
    $files = Input::file('image');
    $upfile=new uploadFile;
    $path="/app/uploads/";
    $upfile->uploads($path,$files);  //passing file upload path and input name
    $sbImages->image=$upfile->getImgName();
    $sbImages->image=$files->getClientOriginalName();
    $sbImages->status='1';
    $sbImages->Save();
            return redirect('scrapbookimages');
                      }
                  else{

    $sbImages->update(Input::except('image'));
  }

}
  public function edit($id){
    $sbImages= new scrapbookModel;
  $sbImages = DB::table('scrapimages')->where('id', $id)
    ->where('status',1)->get();// where first() can be use but it will fetch all record
    return view("updateScrapBookImg",['sbImages' => $sbImages]);

              }

  public function update($id){
    $sbImages= new scrapbookModel;
    $sbImages = scrapbookModel::find($id);
    $sbImages->caption=Input::get("caption");
    $sbImages->imgOrder=Input::get("order");
    $sbImages->status='1';
    if(Input::hasFile('image'))
              {
              $files = Input::file('image');
              $upfile=new uploadFile;
              $path="/app/uploads/";
              $upfile->uploads($path,$files);  //passing file upload path and input name
              $sbImages->image=$upfile->getImgName();
              $sbImages->image=$files->getClientOriginalName();
              $sbImages->Save();
            }
      else{


         $sbImages->update(Input::except('image'));

      }
    return redirect('scrapbookimages');
                            }
  public function delete($id){
$user= new scrapbookModel;
$user = scrapbookModel::find($id);
$user->status='0';
$user->save();
return redirect('scrapbookimages');
                            }

    public function store(Request $Request){

      suzieQuotesModel::create(Request::all());
    }
}
