<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
 use SoftDeletes;
    
    protected $fillable=['slider_name','slider_title','slider_image'];
    
    
    
    
    protected $dates=['deleted_at'];
}
