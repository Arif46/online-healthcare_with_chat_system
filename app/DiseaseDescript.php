<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DiseaseDescript extends Model
{
use SoftDeletes;
 protected $fillable=['disease_id','disease_question','disease_description'];
 
 protected $dates=['deleted_at'];
    
}
