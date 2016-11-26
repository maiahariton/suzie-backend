<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\suzieModel;

class suzieController extends Controller
{
    public function index(){
      $qutoes = DB::table('suzieQuotes')->where('status',1)->get();
      return view("suzieQuotes",['qutoes' => $qutoes]);
    }

    public function add(){
      $qutoes= new suzieModel;
      $qutoes->quotes=Input::get("quotes");
      $qutoes->displayDate=Input::get("displayDate");
      if(Input::hasFile('image'))
     {
      $files = Input::file('image');
      $upfile=new uploadFile;
      $path="/app/uploads/";
      $upfile->uploads($path,$files);  //passing file upload path and input name
      $qutoes->image=$upfile->getImgName();
      $qutoes->image=$files->getClientOriginalName();
      $qutoes->status='1';
      $qutoes->Save();
                          }
                    else{
      $qutoes->update(Input::except('image'));
     }return redirect('quotes');

  }
    public function edit($id){
      $qutoes= new suzieModel;
    $qutoes = DB::table('suzieQuotes')->where('id', $id)
    	->where('status',1)->get();// where first() can be use but it will fetch all record
      return view("updateSuzieQuotes",['qutoes' => $qutoes]);

                }

    public function update($id){
      $qutoes= new suzieModel;
      $qutoes = suzieModel::find($id);
      $qutoes->quotes=Input::get("quotes");
      $qutoes->displayDate=Input::get("displayDate");
      $qutoes->status='1';
      if(Input::hasFile('image'))
                {
                $files = Input::file('image');
                $upfile=new uploadFile;
                $path="/app/uploads/";
                $upfile->uploads($path,$files);  //passing file upload path and input name
                $qutoes->image=$upfile->getImgName();
                $qutoes->image=$files->getClientOriginalName();
                $qutoes->Save();
              }
        else{


           $qutoes->update(Input::except('image'));
        }



      return redirect('quotes');
                              }
    public function delete($id){
 //DB::delete('update slider set status=? where id = ?','0',[$id]);
  //  return redirect('/')->with('success', 'Record has been deleted');
  $user= new suzieModel;
$user = suzieModel::find($id);
$user->status='0';
  $user->save();
return redirect('quotes');
                              }

      public function store(Request $Request){

        suzieQuotesModel::create(Request::all());
      }

}
