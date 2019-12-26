<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\room;
class roomtype extends Model
{
     public $table = "roomtype";
     Protected $fillable = ['name', 'description', 'capacity','floor','price',];
     public function itemDestribution()
     {
         return $this->hasMany('App\ItemDistribution','foreign_key');
     }
    public function rooms()
    {
       return $this->hasOne(rooms::class);
    }
}
