<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{ 
   protected $table = 'sliders';
   protected $fillable = ['title','image','status','short_description','sortorder','createdby'];
}