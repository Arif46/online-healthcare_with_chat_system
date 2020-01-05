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

class FrontendController extends Controller
{
    

   public function index(){
       
        $doctor_info=Doctor::all();
        $disease= MainDisease::all();
        $category_info= CategoryDisease::all();
        $department=Department::all();
        return view('master/home_page',compact('doctor_info','category_info','department','disease'));
    }
   public function about(){
        $doctor_info=Doctor::all();
        $disease= MainDisease::all();
        $category_info= CategoryDisease::all();
        $department=Department::all();
        return view('master/about_page',compact('doctor_info','category_info','department','disease'));
    }
   public function contact(){
        $doctor_info=Doctor::all();
        $disease= MainDisease::all();
        $category_info= CategoryDisease::all();
        $department=Department::all();
        return view('master/contact_page',compact('doctor_info','category_info','department','disease'));
    }
    public function contact_save(Request $request){
        Contact::insert([
                'contact_name'=>$request->contact_name,
                'contact_email'=>$request->contact_email,
                'subject'=>$request->subject,
                'message'=>$request->message,
                
               
                'created_at' => Carbon::now()
            ]);
     return back()->with('message','Please Wait Our feedback Send to Your E-mail');
    }
    
    
    
    
    
    
    
    public function customer_login(Request $request){
               
//                $customer_name=$request->customer_name
                $customer_email=$request->customer_email;
                $customer_password=md5($request->customer_password);
                $cu_pass=Customer::find($request->customer_password);
                
//            echo    $customer_info;
                
//                Session::set('mesasage',Customer::where('id',Session::get('message.slot.id'))->first());
               
                
                
                if($customer_email&&$customer_password){
                    
//                     Session::set('mesasage',Customer::where('id',Session::get('message.slot.id'))->first());
                    
                    return back()->with('message','thanks') ;
                }else{
//                     Session::set('mesasage',Customer::where('id',Session::get('message.slot.id'))->first());
                   return back()->with('message','error') ; 
                }
               
                
                

    
     
                
    }
    public function save_customer(Request $request){
        
        
        
//    echo    $request->customer_name;
        $request->validate([
            'customer_name' => 'required',
            'customer_email' => 'required|unique:customers,customer_email',
            'customer_password' => 'required',
            
        ]);


        if($request->customer_name&&$request->customer_email&&$request->customer_password){
           $name=$request->customer_name;
            Customer::insert([
                'customer_name'=>$request->customer_name,
                'customer_email'=>$request->customer_email,
                'customer_password'=>md5($request->customer_password),
                'created_at' => Carbon::now()
            ]);
        Session:set('name',$name);
        
        return back()->with('message',$name) ;
        }else{
              return back() ;
        }
        
       
    
    
    }
    
    public function appointment(){
         $doctor_info=Doctor::all();
        $disease= MainDisease::all();
        $category_info= CategoryDisease::all();
        $department=Department::all();
        return view('master/appointment_page',compact('doctor_info','category_info','department','disease'));
           
    }

   public function appointment_save(Request $request){
         $request->validate([
            'user_name' => 'required',
            'user_email' => 'required',
            'appo_date' => 'required',
            'appo_time' => 'required',
            'city_name' => 'required',
            'doctor_name' => 'required',
            'speciality' => 'required',
            
        ]);
       $appo_info= Appointment::find($request->doctor_name);
        echo $doctor_name= $appo_info->doctor_name;
         
        if($request->doctor_name== $doctor_name){
           if($request->appo_time==$appo_info->appo_time){
               return back()->with('message','Time already Booked!') ;
           }else{
            Appointment::insert([
                'user_name'=>$request->user_name,
                'user_email'=>$request->user_email,
                'appo_date'=>$request->appo_date,
                'appo_time'=>$request->appo_time,
                'city_name'=>$request->city_name,
                'doctor_name'=>$request->doctor_name,
                'speciality'=>$request->speciality,
               
                'created_at' => Carbon::now()
            ]);
    
        return back()->with('message','Successfully Save Info') ;
           }
        }else{
           Appointment::insert([
                'user_name'=>$request->user_name,
                'user_email'=>$request->user_email,
                'appo_date'=>$request->appo_date,
                'appo_time'=>$request->appo_time,
                'city_name'=>$request->city_name,
                'doctor_name'=>$request->doctor_name,
                'speciality'=>$request->speciality,
               
                'created_at' => Carbon::now()
            ]);
    
        return back()->with('message','Successfully Save Info') ;
             
        }
   }







    public function patient_base_diseas(){
         $doctor_info=Doctor::all();
        $category_info= CategoryDisease::all();
        
          $department=Department::all();
       return view('master/patient_bas_disease',compact('doctor_info','category_info','department')) ;
    }
    public function patient_base_diseasee(){
        
       return view('master/patient_bas_disease') ;
    }
    
    
    
    public function all_doctor(){
         $doctor_info=Doctor::all();
        $category_info= CategoryDisease::all();
        $department=Department::all();
       
       return view('master/all_doctor',compact('doctor_info','category_info','department'));
    }
    public function all_department(){
         $doctor_info=Doctor::all();
        $category_info= CategoryDisease::all();
        $department=Department::all();
       
       return view('master/all_department',compact('doctor_info','category_info','department'));
    }
    
    
    public function all_disease(){
             $doctor_info=Doctor::all();
           $category_info= CategoryDisease::all();
           $department=Department::all();
           $disease=MainDisease::all();
            return view('master/all_disease',compact('doctor_info','category_info','department','disease'));
    }
    public function disease_details($disease_id){
            $doctor_info=Doctor::all();
           $category_info= CategoryDisease::all();
           $department=Department::all();
           $disease=MainDisease::all();
           $disease_descript=DiseaseDescript::all();
           $single_disease=MainDisease::findOrFail($disease_id);
        //    echo $single_disease->disease_image;
    return view('master/disease_details',compact('doctor_info','disease_descript','category_info','department','disease','single_disease'));
    }
    public function department_disease($department_id){
            $doctor_info=Doctor::all();
           $category_info= CategoryDisease::all();
           $department=Department::all();
           $disease=MainDisease::all();
           $depart_disease=MainDisease::where('department_id',$department_id)->get();;
            return view('master/department_disease_details',compact('doctor_info','category_info','department','disease','depart_disease'));
    }
    public function cate_doctor($category_id){
           $doctor_info=Doctor::all();
           $doctor_details=Doctor::where('doctor_expart_category_id',$category_id)->get();
           $category_info= CategoryDisease::all();
           $department=Department::all();
           $disease=MainDisease::all();
            return view('master/doctor_details',compact('doctor_info','category_info','department','disease','doctor_details'));
    }
    public function doctor_single_details($doctor_id){
           $doctor_info=Doctor::all();
           $doctor_single_details=Doctor::findOrFail($doctor_id);
           $category_info= CategoryDisease::all();
           $department=Department::all();
           $disease=MainDisease::all();
            return view('master/doctor_single_details',compact('doctor_info','category_info','department','disease','doctor_single_details'));
    }
    
}
