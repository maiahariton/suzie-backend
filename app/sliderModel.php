<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sliderModel extends Model
{
    protected $table = 'slider';
    public $timestamps = false;
    protected $fillable = ['id','title', 'headlines', 'subHeadlinesCaption','slideOrder','image','status'];
}
