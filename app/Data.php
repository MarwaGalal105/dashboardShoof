<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $fillable=['name','address','city','age','date','gender','telephone','notes','image','status','type'];
}
