<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $filltable = ['title', 'body'];
    public function user(){
        return $this->belongTo(User::class);
    }

}
