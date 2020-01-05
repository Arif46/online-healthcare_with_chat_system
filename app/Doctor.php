<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Doctor extends Model
{
       use SoftDeletes;
          protected $fillable=['department_id', 'doctor_name','doctor_graduate','doctor_exprience' ,'doctor_address' ,'doctor_expart_category_id','doctor_description','doctor_image'];
    
    protected $dates=['deleted_at'];
    
    
     
    function relation_to_category(){
     
        return  $this->hasOne('App\CategoryDisease','id','doctor_expart_category_id');
      
    }
    function deprt_rela(){
     
        return  $this->hasOne('App\Department','id','department_id');
      
    }
    function category_relation(){
     
        return  $this->hasOne('App\CategoryDisease','id','doctor_expart_category_id');
      
    }
    function relation_to_patient(){
        
        return $this->hasOne('App\Patient','id','doctor_expart_patient_id');
      
    }
       
}