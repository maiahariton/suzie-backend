<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\sliderModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\Http\Requests;

class uploadFile extends Controller
{
private $imageName;

public function uploads($route,$FileName){

                       $image=$FileName->getClientOriginalName();
                       $FileName->move(public_path(). $route, $image);
                       $this->imageName=$FileName->getClientOriginalName();

 }
public function getImgName(){
     return $this->imageName;


}

}
