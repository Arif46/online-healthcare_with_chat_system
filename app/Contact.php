<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
       protected $fillable=['contact_name','contact_email','subject','message'];
    
    protected $dates=['deleted_at'];
}
