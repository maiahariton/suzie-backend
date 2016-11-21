<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoryModel extends Model
{
  protected $table = 'categories';
    public $timestamps = false;
    protected $fillable = ['id','name', 'catorder', 'status'];
}
