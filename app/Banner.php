<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table='banner';
    protected $filltable=['id','image','status'];
    public $timestamps = false;
}
