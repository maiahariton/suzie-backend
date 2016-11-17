<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class promocalloutHideModel extends Model
{
      protected $table = 'promocallout';
        public $timestamps = false;
        protected $fillable = ['headlines', 'bodyhtml', 'status'];


}
