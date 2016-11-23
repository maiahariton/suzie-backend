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
    $product= new categoryModel;

    }

    public function index(){
      $product = DB::table('category')->where('status',1)->get();
    return view("productCategory",['product' => $product]);
    }

    public function add(){
      $product= new categoryModel;
      $product->name=Input::get("name");
      $product->catorder=Input::get("catorder");

      $product->status='1';
      $product->Save();

      return view('productCategory');

    }
    public function edit($id){
      $product= new categoryModel;
     $product = DB::table('category')->where('id', $id)
    	->where('status',1)->get();// where first() can be use but it will fetch all record
      return view("editCategory",['cate' => $product]);
    }

    public function update($id){
                $product= new categoryModel;
                $product = categoryModel::find($id);
                $product->title = Input::get('title');
                $product->headlinesCaption= Input::get('headlinesCaption');
                $product->subHeadlinesCaption= Input::get('subHeadlinesCaption');
                $product->slideOrder=Input::get('slideOrder');
      if(Input::hasFile('image'))
                {
      $files = Input::file('image');
                $upfile=new uploadFile;
                $path="/app/uploads/";
                $upfile->uploads($path,$files);  //passing file upload path and input name
                $product->image=$upfile->getImgName();
              }
                $product->save();

                      return redirect('carousel');
                              }

      public function store(Request $Request){

        categoryModel::create(Request::all());
      }
    public function delete($id)
    {
           //DB::delete('update slider set status=? where id = ?','0',[$id]);
          //  return redirect('/')->with('success', 'Record has been deleted');

          $product= new categoryModel;
          $product = categoryModel::find($id);
          $product->status='0';
          $product->save();
      return redirect('carousel');
    }


}
