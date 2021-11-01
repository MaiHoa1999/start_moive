<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table='contact';
    protected $fillable = [
        'id',
        'name',
        'email',
        'content',
        'id_user'
    ];
}
