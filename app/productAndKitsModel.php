<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productAndKitsModel extends Model
{
  protected $table = 'product';
  public $timestamps = true;
  protected $fillable = ['id','title','headlines','salesMessage','salesPrice','offerExpire','listPrice','magentoSku','	magentoAddCarUrl','amazonUrl','productImage','	loginUrl','	activationUrl'
  ,'productDescriptionHtml','status','visibilityStatus'];



}
