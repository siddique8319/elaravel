<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $fillable= [
      'category_id','category_name','category_description','publication_status'
    ];
}
