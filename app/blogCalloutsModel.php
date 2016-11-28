<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogCalloutsModel extends Model
{
  protected $table = 'blogposts';
  public $timestamps = true;
  protected $fillable = ['id','pagetitle', 'url', 'metaDescription','metaKeywords',
  'timage','fimage','blurb','bodyHtml','tags','slug','visibility'];


}
