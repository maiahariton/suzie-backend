<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suzieModel extends Model
{
  protected $table = 'suzieQuotes';
  public $timestamps = true;
    protected $fillable = ['id','quotes','image','displayDate'];
}
