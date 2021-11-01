<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table='booking';
    protected $filltable=['id','id_user','id_screen','id_coupon','updated_at','created_at','total_cost','status'];
}
