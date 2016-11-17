<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homepageModel extends Model
{ protected $table = 'pages';
  public $timestamps = false;
  protected $fillable = ['pagetitle', 'url', 'metaDescription','metaKeywords','status'];

}
