<?php

namespace App\Http\Controllers;
use App\categoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
class categoryController extends Controller
{

    public function categoryController(){
    $cate= new categoryModel;

    }

    public function index(){
      $cate = DB::table('categories')->where('status',1)->get();
    return view("productCategory",['cate' => $cate]);
    }

    public function add(){
      $cate= new categoryModel;
      $cate->name=Input::get("name");
      $cate->catorder=Input::get("catorder");

      $cate->status='1';
      $cate->Save();

      return view('productCategory');

    }
    public function edit($id){
      $cate= new categoryModel;
     $cate = DB::table('categories')->where('id', $id)
    	->where('status',1)->get();// where first() can be use but it will fetch all record
      return view("updateSlider",['cate' => $cate]);
    }

    public function update($id){
                $cate= new categoryModel;
                $cate = categoryModel::find($id);
                $cate->title = Input::get('title');

                $cate->headlinesCaption= Input::get('headlinesCaption');
                $cate->subHeadlinesCaption= Input::get('subHeadlinesCaption');
                $cate->slideOrder=Input::get('slideOrder');
      if(Input::hasFile('image'))
                {
      $files = Input::file('image');
                $upfile=new uploadFile;
                $path="/app/uploads/";
                $upfile->uploads($path,$files);  //passing file upload path and input name
                $cate->image=$upfile->getImgName();
              }
                $cate->save();

                      return redirect('carousel');
                              }

      public function store(Request $Request){

        categoryModel::create(Request::all());
      }
    public function delete($id)
    {
           //DB::delete('update slider set status=? where id = ?','0',[$id]);
          //  return redirect('/')->with('success', 'Record has been deleted');

          $cate= new categoryModel;
          $cate = categoryModel::find($id);
          $cate->status='0';
          $cate->save();
      return redirect('carousel');
    }


}
