<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class CategoryDisease extends Model
{
    
    use SoftDeletes;
    
    protected $fillable=['category_disease_name','category_disease_description'];
    
    
    
    
    protected $dates=['deleted_at'];
    function relation_to_category(){
     
        return  $this->hasOne('App\Doctor','id');
      
    }
}
