<?php

namespace App\Http\Controllers;
use App\Doctor;
use App\Customer;
use App\Contact;
use App\Appointment;
use Carbon\Carbon;
use App\Department;
use App\MainDisease;
use App\DiseaseDescript;
use App\CategoryDisease;
use Illuminate\Http\Request;
use App\Http\Controllers\Session;

class Livechat extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
   public function index(){
       $doctor_info=Doctor::all();
        $disease= MainDisease::all();
        $category_info= CategoryDisease::all();
        $department=Department::all();
        return view('master/home_page',compact('doctor_info','category_info','department','disease'));
   }
}
