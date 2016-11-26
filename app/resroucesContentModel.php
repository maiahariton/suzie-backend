<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resroucesContentModel extends Model
{
  protected $table = 'resContent';
  public $timestamps = true;

   protected $fillable = ['resContentId','resContentname', 'bodyHtml', 'order','status','resourceId'];
}
///////////////rescontentId AND name being to prevent from confilct in join schema
