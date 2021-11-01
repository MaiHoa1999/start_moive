<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table='movies';
    protected $filltable=['id','name','trailer','image','description','duration','release_date', 'id_category','rating'];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class,'id_category','id')
            ->select(['id','name']);
    }
    public function screens(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Screen::class, 'id_movie', 'id');
    }
}
