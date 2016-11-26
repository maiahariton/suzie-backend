<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PKAddSectionModel extends Model
{
  protected $table = 'productcontent';
  public $timestamps = true;
  protected $fillable = ['id','title', 'bodyHtml', 'order','status','created_at','updated_at'];
}
