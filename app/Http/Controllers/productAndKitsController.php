<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productAndKitsModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class productAndKitsController extends Controller
{
  public function productAndKitsController(){
  $product= new productAndKitsController;

  }

  public function index(){

  $product= DB::table('product')
            ->join('category', 'product.categoryId', '=', 'category.id')
            ->select('product.title','product.flag','category.name', 'category.id')
            ->get();
return view("products&kits",['product' => $product]);

}
  public function add(){
/*    $rules = array(
           'title'       => 'required',
              'salesPrice' => 'required|numeric',
              'productImage' => 'required|mimes:jpeg,bmp,png',
              'title'       => 'required',
              'salesPrice' => 'required|numeric',
              'productImage' => 'required|mimes:jpeg,bmp,png'
          );
          $validator = Validator::make(Input::all(), $rules);

          // process the login
          if ($validator->fails()) {
              return Redirect::to('addproduct')
                  ->withErrors($validator)
                  ->withInput();
          } else {

*/
    $product= new productAndKitsModel;
    $product->title=Input::get("title");
    $product->salesMessage=Input::get("salesMessage");
    $product->loginUrl=Input::get("flag");
    $product->salesPrice=Input::get("salesPrice");
    $product->headlines=Input::get("headlines");
    $product->offerExpire=Input::get("offerExpire");
    $product->listPrice=Input::get("listPrice");
    $product->magentoSku=Input::get("magentoSku");
    $product->magentoAddCarUrl=Input::get("magentoAddCarUrl");
    $product->headlines=Input::get("headlines");
    $product->amazonUrl=Input::get("amazonUrl");
    $product->loginUrl=Input::get("loginUrl");
    $product->activationUrl=Input::get("activationUrl");
    $product->productDescriptionHtml=Input::get("productDescriptionHtml");
    $file = Input::file('productImage');
    $upfile=new uploadFile;
    $path="/app/uploads/";//passing file upload path and input name
   $upfile->uploads($path,$file);
    $product->productImage=$upfile->getImgName();
    $product->status='1';
    $product->Save();

    return view('products&kits');

  }//}
  public function edit($id){
    $product= new productAndKitsController;
   $product = DB::table('product')->where('id', $id)
  	->where('status',1)->get();// where first() can be use but it will fetch all record
    return view("updateProduct",['product' => $product]);
  }

  public function update($id){
    $product= new productAndKitsModel;
    $product->title=Input::get("title");
    $product->salesMessage=Input::get("salesMessage");
    $product->flag=Input::get("flag");
    $product->salesPrice=Input::get("salesPrice");
    $product->headlines=Input::get("headlines");
    $product->offerExpire=Input::get("offerExpire");
    $product->listPrice=Input::get("listPrice");
    $product->magentoSku=Input::get("magentoSku");
    $product->magentoAddCarUrl=Input::get("magentoAddCarUrl");
    $product->headlines=Input::get("headlines");
    $product->amazonUrl=Input::get("amazonUrl");
    $product->loginUrl=Input::get("loginUrl");
    $product->activationUrl=Input::get("activationUrl");
    $product->productDescriptionHtml=Input::get("productDescriptionHtml");
    $product->categoryId=Input::get("categoryId");
/*if(Input::file())
{
    $file = Input::file('productImage');
    $upfile=new uploadFile;
    $path="/app/uploads/";//passing file upload path and input name
   $upfile->uploads($path,$file);
    $product->productImage=$upfile->getImgName();

  } */
    $product->status='1';
    $product->save();
                    return redirect('products')->with('Records updated!');
 }

    public function store(Request $Request){

                productAndKitsModel::create(Request::all());
           }
  public function delete($id)
  {
         //DB::delete('update slider set status=? where id = ?','0',[$id]);
        //  return redirect('/')->with('success', 'Record has been deleted');

        $product= new productAndKitsController;
        $product = productAndKitsModel::find($id);
        $product->status='0';
        $product->save();
        return redirect('products');
  }
}
