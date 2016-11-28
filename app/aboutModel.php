<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aboutModel extends Model
{
  protected $table='aboutcontent';
  public $timestamps = true;
  protected $fillable = ['id','image','bodyText','bodyHtml','status'];

}
