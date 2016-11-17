<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newsletterPageModel extends Model
{
    protected $table = 'newsletter';
      public $timestamps = false;
      protected $fillable = ['headlines', 'bodyhtml', 'status'];

  }
