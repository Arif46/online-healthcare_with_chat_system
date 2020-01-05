<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class MainDisease extends Model
{
       use SoftDeletes;
          protected $fillable=['disease_name','department_id','doctor_id','category_id','disease_title','disease_hospital', 'hospital_address','disease_description','disease_image', 'disease_image_1'];
    
    protected $dates=['deleted_at'];
    
    public function category_relation(){
         return  $this->hasOne('App\CategoryDisease','id','category_id');
    }
    public function doctor_re(){
         return  $this->hasOne('App\CategoryDisease','id','doctor_expart_category_id');
    }
    public function doctor_relation(){
         return  $this->hasOne('App\Doctor','id','doctor_id');
    }
    public function depart_relation(){
         return  $this->hasOne('App\Department','id','department_id');
    }
    public function disease_descript(){
         return  $this->hasMany('App\DiseaseDescript','disease_id','disease_id');
    }
}
 
         