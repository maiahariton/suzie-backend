<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class productContentController extends Controller
{

  public function index(){
    $product= new productAndKitsModel;
    $product->title=Input::get("title");
    $product->salesMessage=Input::get("bodyHtml");
    $product->loginUrl=Input::get("flag");
    $product->Save();
    return view('products&kits');
                      }

public function add(){
  $product= new productAndKitsModel;
  $product->title=Input::get("title");
  $product->salesMessage=Input::get("bodyHtml");
  $product->loginUrl=Input::get("flag");
  $product->Save();
  return view('products&kits');
                    }


}
