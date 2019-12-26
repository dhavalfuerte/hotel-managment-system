<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    public $table="food";
    Protected $fillable = ['id', 'filename', 'mime','original_filename',];
}
