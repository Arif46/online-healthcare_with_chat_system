<?php

namespace App\Http\Controllers;
use App\Doctor;
use App\Patient;

use App\CategoryDisease;
use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    public function index(){
        $doctor_info=Doctor::all();
        $patient_info=Patient::all();
        $category_info= CategoryDisease::all();
     
        return view('master/home_page',compact('doctor_info','category_info','patient_info'));
    }
    
    
    public function patient_base_disease($patient_id){
        $ps=$patient_id;
       return view('master/patient_bas_disease',compact('ps')) ;
    }
    public function patient_base_diseasee(){
        
       return view('master/patient_bas_disease') ;
    }
    
}

