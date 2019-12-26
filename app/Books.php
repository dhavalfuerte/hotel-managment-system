<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public $table='book';
    Protected $fillable = ['Username', 'RoomType', 'Price','Capacity','time_from','time_to',];
}
