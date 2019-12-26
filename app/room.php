<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\roomtype;
class room extends Model
{
     public $table = "room";
     Protected $fillable = ['id', 'room_type_id', 'room_no',];
}
