<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    //
    protected $guarded=[];

public function questionnaire()
{
    return $this->belongsTo(Questionnaire::class);
}
public function answers()
{
    return $this->hasMany(answer::class);
}
}
