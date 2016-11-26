<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sliderModel extends Model
{
    protected $table = 'slider';
    public $timestamps = false;
    protected $fillable = ['id','title', 'headLinesCaption', 'subHeadLinesCaption','slideOrder','image','status'];
}
