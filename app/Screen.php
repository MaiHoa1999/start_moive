<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Screen extends Model
{
    protected $table='screen';
    protected $filltable=['id','id_movie','id_room','start_date','end_date'];
    public $timestamps = false;

    public function movie(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Movie::class,'id_movie','id')
            ->select(['id','name','trailer','image','description','duration','release_date', 'id_category','rating']);
    }
    public function getRoom(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Room::class,'id_room','id')
            ->select(['id','name']);
    }
    static function groupByMovie($array, $key) {
        $return = array();
        foreach($array as $val) {
            $return[$val[$key]][] = $val;
        }
        return $return;
    }

}
