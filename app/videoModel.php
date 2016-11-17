<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class videoModel extends Model
{
  protected $table = 'videos';
  public $timestamps = false;
  protected $fillable = ['id','title', 'videoType', 'videoUrl','videoOrder','status'];

}
