<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    
   protected $guarded=[];
public function question()
{
    return $this->belongsTo(question::class);
}
}
