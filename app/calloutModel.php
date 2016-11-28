<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class calloutModel extends Model
{
  protected $table = 'callouts';
  public $timestamps = false;
  protected $fillable = ['id','title', 'image', 'bodyHtml','calloutOrder','pageId','status'];

}
