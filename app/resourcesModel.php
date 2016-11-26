<?php
namespace App;

use Illuminate\Database\Eloquent\Model;


class resourcesModel extends Model
{
  protected $table = 'resrouces';
  public $timestamps = true;
    protected $fillable = ['id','name', 'image', 'order'];


}
