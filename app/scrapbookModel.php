<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class scrapbookModel extends Model
{
  protected $table = 'scrapimages';
  public $timestamps = true;
    protected $fillable = ['id','image','caption','imgOrder','status'];
}
