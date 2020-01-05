<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Department extends Model
{
       use SoftDeletes;
          protected $fillable=['department_name','department_title','department_description','department_image','department_icon'];
    
    protected $dates=['deleted_at'];
    function relation_to_category(){
     
        return  $this->hasOne('App\CategoryDisease','id','doctor_expart_category_id');
      
    }
}
