<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='category';
    protected $filltable=['id','name','image','uri'];
    public $timestamps = false;
}
