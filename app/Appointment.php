<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
     protected $fillable=['user_name','user_email','appo_date','appo_time','city_name','doctor_name','speciality'];
    
    protected $dates=['deleted_at'];
}
