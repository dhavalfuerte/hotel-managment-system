<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roomallocate extends Model
{
   	public $table = "roomallocate";
    Protected $fillable = ['user_id', 'room_id', 'members','ammount',];
}
