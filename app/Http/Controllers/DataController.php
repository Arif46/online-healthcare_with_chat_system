<?php

namespace App\Http\Controllers;

use App\CategoryDisease;
use App\Department;
use App\MainDisease;
use App\DiseaseDescript;
use App\Doctor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class DataController extends Controller {

    public function add_treatment() {
        return view('admin/admin_pages/add_treatment_page');
    }

//-------------start-------Doctor---------------

    public function add_doctor() {

        $category_disease = CategoryDisease::all();
        $department = Department::all();

        return view('admin/admin_pages/add_doctor', compact('category_disease', 'department'));
    }

    public function save_doctor(Request $request) {
//        $request->validate([
//            'category_disease_name' => 'required|unique:category_diseases,category_disease_name',
//            'category_disease_description' => 'required|unique:category_diseases,category_disease_description'
//        ]);

        $request->validate([
            'doctor_name' => 'required',
            'department_id' => 'required',
            'doctor_graduate' => 'required',
            'graduate_institude' => 'required',
            'present_hospital' => 'required',
            'doctor_exprience' => 'required',
            'doctor_address' => 'required',
            'doctor_expart_category_id' => 'required',
            'doctor_description' => 'required',
            'doctor_image' => 'required|unique:doctors,doctor_image',
        ]);


        $last_doctor_id = Doctor::insertGetId([
                    'doctor_name' => $request->doctor_name,
                    'department_id' => $request->department_id,
                    'graduate_institude' => $request->graduate_institude,
                    'present_hospital' => $request->present_hospital,
                    'doctor_graduate' => $request->doctor_graduate,
                    'doctor_exprience' => $request->doctor_exprience,
                    'doctor_address' => $request->doctor_address,
                    'doctor_expart_category_id' => $request->doctor_expart_category_id,
                    'doctor_description' => $request->doctor_description,
                    'doctor_image' => $request->doctor_image,
                    'created_at' => Carbon::now()
        ]);


        if ($request->hasFile('doctor_image')) {
            $photo_to_upload = $request->doctor_image;
// $file_name=$last_doctor_id.'.'.$photo_to_upload->getClientoriginalExtension();
            $file_name = $last_doctor_id . '.' . $photo_to_upload->getClientoriginalExtension();
            $file_name_db = 'back_end/doctor_image/' . $last_doctor_id . '.' . $photo_to_upload->getClientoriginalExtension();

            Image::make($photo_to_upload)->resize(500, 400)->save(base_path('public/back_end/doctor_image/' . $file_name));
//  Image::make($photo_to_upload)->resize(200,300)->save(base_path('public/doctor/image/'.$file_name),100); picture quality
            Doctor::find($last_doctor_id)->update([
                'doctor_image' => $file_name_db
            ]);
        }



        return back()->with('message', 'You successfully save information!');
    }

    public function manage_doctor() {

        $softdelete_doctor = Doctor::onlyTrashed()->get();
        $doctor_info = Doctor::all();
//        
//       foreach ($doctor_info as $s){
//           echo CategoryDisease::find($s->doctor_expart_category_id)->category_description;
//       }
//       


        return view('admin/admin_pages/manage_doctor', compact('doctor_info', 'softdelete_doctor'));
    }

    public function delete_doctor($doctor_id) {

        Doctor:: find($doctor_id)->delete();

        return back()->with('softdelete_message', 'You successfully softdelete information!');
    }

    public function edit_doctor($doctor_id) {
        $single_doctor = Doctor::findOrFail($doctor_id);

        $department = Department::all();
        $category_disease = CategoryDisease::all();

        return view('admin/admin_pages/edit_doctor_page', compact('single_doctor', 'category_disease', 'department'));
    }

    public function update_doctor(Request $request) {
        if ($request->hasFile('doctor_image')) {
            if (Doctor::find($request->doctor_id)->doctor_image == 'defaultdoctorimage') {
                $photo_to_upload = $request->doctor_image;
// $file_name=$last_doctor_id.'.'.$photo_to_upload->getClientoriginalExtension();
                $file_name = $request->doctor_id . '.' . $photo_to_upload->getClientoriginalExtension();
                $file_name_db = 'back_end/doctor_image/' . $request->doctor_id . '.' . $photo_to_upload->getClientoriginalExtension();

                Image::make($photo_to_upload)->resize(500, 400)->save(base_path('public/back_end/doctor_image/' . $file_name));
//  Image::make($photo_to_upload)->resize(200,300)->save(base_path('public/doctor/image/'.$file_name),100); picture quality
                Doctor::find($request->doctor_id)->update([
                    'doctor_image' => $file_name_db
                ]);
            } else {

//delete picture
                $delete_photo = Doctor::find($request->doctor_id)->doctor_image;
// echo $delete_photo; 
                unlink(base_path('public/' . $delete_photo)); //public/doctor/image/.jpg
//update picture
                $photo_to_upload = $request->doctor_image;
// $file_name=$last_doctor_id.'.'.$photo_to_upload->getClientoriginalExtension();
                $file_name = $request->doctor_id . '.' . $photo_to_upload->getClientoriginalExtension();
                $file_name_db = 'back_end/doctor_image/' . $request->doctor_id . '.' . $photo_to_upload->getClientoriginalExtension();

                Image::make($photo_to_upload)->resize(500, 400)->save(base_path('public/back_end/doctor_image//' . $file_name));
//  Image::make($photo_to_upload)->resize(200,300)->save(base_path('public/doctor/image/'.$file_name),100); picture quality
                Doctor::find($request->doctor_id)->update([
                    'doctor_image' => $file_name_db
                ]);
            }
        }
        Doctor::find($request->doctor_id)->update([
            'doctor_name' => $request->doctor_name,
            'department_id' => $request->department_id,
            'graduate_institude' => $request->graduate_institude,
            'present_hospital' => $request->present_hospital,
            'doctor_graduate' => $request->doctor_graduate,
            'doctor_exprience' => $request->doctor_exprience,
            'doctor_address' => $request->doctor_address,
            'doctor_expart_category_id' => $request->doctor_expart_category_id,
            'doctor_description' => $request->doctor_description
        ]);
//          return view('admin/admin_pages/manage_doctor');
        return redirect('admin/manage_doctor')->with('update_message', 'You successfully update information!');
    }

    public function doctor_softdelete($doctor_id) {
        Doctor::find($doctor_id)->delete();
        return back()->with('softdelete_message', 'Successfully Delete');
    }

    public function doctor_parmanentdelete($doctor_id) {
// echo $product_id;
        $delete_photo = Doctor::onlyTrashed()->find($doctor_id)->doctor_image;
// echo $delete_photo; 
        unlink(base_path('public/' . $delete_photo)); //public/back_end/doctor_image/.jpg


        Doctor::onlyTrashed()->find($doctor_id)->forceDelete();

        return back()->with('parmanentdelete_message', 'Successfully Parmanent Delete');
    }

    public function doctor_restore($doctor_id) {


        Doctor::onlyTrashed()->where('id', $doctor_id)->restore();

        return back()->with('restore_message', 'Successfully Restore');
    }

//-------------end---------Doctor---------------
//-------------start---------Departmet---------------

    public function add_department() {
        return view('admin/admin_pages/add_department');
    }

    public function save_department(Request $request) {
        $request->validate([
            'department_name' => 'required|unique:departments,department_name',
            'department_title' => 'required',
            'department_description' => 'required',
            'department_image' => 'required',
            'department_icon' => 'required',
        ]);

        $last_id = Department::insertGetId([
                    'department_name' => $request->department_name,
                    'department_title' => $request->department_title,
                    'department_description' => $request->department_description,
                    'department_image' => $request->department_image,
                    'department_icon' => $request->department_icon,
                    'created_at' => Carbon::now()
        ]);


        if ($request->hasFile('department_image')) {
            $photo_to_upload = $request->department_image;
// $file_name=$last_doctor_id.'.'.$photo_to_upload->getClientoriginalExtension();
            $file_name = $last_id . '.' . $photo_to_upload->getClientoriginalExtension();
            $file_name_db = 'back_end/department_image/' . $last_id . '.' . $photo_to_upload->getClientoriginalExtension();
            $file_icon_db = 'back_end/department_icon/' . $last_id . '.' . $photo_to_upload->getClientoriginalExtension();

            Image::make($photo_to_upload)->resize(500, 400)->save(base_path('public/back_end/department_image/' . $file_name));
            Image::make($photo_to_upload)->resize(500, 400)->save(base_path('public/back_end/department_icon/' . $file_name));
//  Image::make($photo_to_upload)->resize(200,300)->save(base_path('public/doctor/image/'.$file_name),100); picture quality
            Department::find($last_id)->update([
                'department_image' => $file_name_db,
                'department_icon' => $file_icon_db
            ]);
        }


        return back()->with('message', 'You successfully save information!');
    }

    public function manage_department() {
        $softdelete_department = Department::onlyTrashed()->get();
        $department_info = Department::all();
//        

        return view('admin/admin_pages/manage_department', compact('softdelete_department', 'department_info'));
    }

    public function delete_department($department_id) {

        Department:: find($department_id)->delete();

        return back()->with('softdelete_message', 'You successfully softdelete information!');
    }

    public function edit_department($department_id) {
        $single_department = Department::findOrFail($department_id);


        return view('admin/admin_pages/edit_department_page', compact('single_department'));
    }

    public function update_department(Request $request) {
        if ($request->hasFile('department_image')) {
            if (Department::find($request->department_id)->department_image == 'defaultdoctorimage') {
                $photo_to_uploadi = $request->department_icon;
                $photo_to_upload = $request->department_image;
                $file_namei = $request->department_id . '.' . $photo_to_uploadi->getClientoriginalExtension();
                $file_name = $request->department_id . '.' . $photo_to_upload->getClientoriginalExtension();
                $file_name_db = 'back_end/department_image/' . $request->department_id . '.' . $photo_to_upload->getClientoriginalExtension();
                $file_icon_dbi = 'back_end/department_icon/' . $request->department_id . '.' . $photo_to_uploadi->getClientoriginalExtension();

                Image::make($photo_to_uploadi)->resize(500, 400)->save(base_path('public/back_end/department_image/' . $file_name));
                Image::make($photo_to_upload)->resize(500, 400)->save(base_path('public/back_end/department_icon/' . $file_namei));
//  Image::make($photo_to_upload)->resize(200,300)->save(base_path('public/doctor/image/'.$file_name),100); picture quality
                Department::find($request->department_id)->update([
                    'department_image' => $file_name_db,
                    'department_icon' => $file_icon_dbi
                ]);
            } else {

//delete picture
                $delete_photoi = Department::find($request->department_id)->department_icon;
                $delete_photo = Department::find($request->department_id)->department_image;
// echo $delete_photo; 
                unlink(base_path('public/' . $delete_photoi)); //public/doctor/image/.jpg
                unlink(base_path('public/' . $delete_photo)); //public/doctor/image/.jpg
//update picture
                $photo_to_uploadi = $request->department_icon;
                $photo_to_upload = $request->department_image;
                $file_namei = $request->department_id . '.' . $photo_to_uploadi->getClientoriginalExtension();
                $file_name = $request->department_id . '.' . $photo_to_upload->getClientoriginalExtension();
                $file_name_db = 'back_end/department_image/' . $request->department_id . '.' . $photo_to_upload->getClientoriginalExtension();
                $file_icon_dbi = 'back_end/department_icon/' . $request->department_id . '.' . $photo_to_uploadi->getClientoriginalExtension();

                Image::make($photo_to_uploadi)->resize(500, 400)->save(base_path('public/back_end/department_image/' . $file_name));
                Image::make($photo_to_upload)->resize(500, 400)->save(base_path('public/back_end/department_icon/' . $file_namei));
//  Image::make($photo_to_upload)->resize(200,300)->save(base_path('public/doctor/image/'.$file_name),100); picture quality
                Department::find($request->department_id)->update([
                    'department_image' => $file_name_db,
                    'department_icon' => $file_icon_dbi
                ]);
            }
        }

        Department::find($request->department_id)->update([
            'department_name' => $request->department_name,
            'department_title' => $request->department_title,
            'department_description' => $request->department_description,
            'department_image' => $request->department_image,
            'department_icon' => $request->department_icon,
            
        ]);




//          return view('admin/admin_pages/manage_doctor');
        return redirect('admin/manage_department')->with('update_message', 'You successfully update information!');
    }

    public function department_softdelete($department_id) {
        Department::find($department_id)->delete();
        return back()->with('softdelete_message', 'Successfully Delete');
    }

    public function department_parmanentdelete($department_id) {
// echo $product_id;
        $delete_icon = Department::onlyTrashed()->find($department_id)->department_icon;
        $delete_photo = Department::onlyTrashed()->find($department_id)->department_image;
// echo $delete_photo; 
        unlink(base_path('public/' . $delete_icon)); //public/back_end/doctor_icon/.jpg
        unlink(base_path('public/' . $delete_photo)); //public/back_end/doctor_image/.jpg


        Department::onlyTrashed()->find($department_id)->forceDelete();

        return back()->with('parmanentdelete_message', 'Successfully Parmanent Delete');
    }

    public function department_restore($department_id) {


        Department::onlyTrashed()->where('id', $department_id)->restore();

        return back()->with('restore_message', 'Successfully Restore');
    }

//-------------end---------Department---------------
//-------------start---------main Disease---------------

    public function add_disease() {
        $category = CategoryDisease::all();
        $department = Department::all();
        $doctor = Doctor::all();

        return view('admin/admin_pages/add_disease', compact('category', 'department', 'doctor'));
    }

    public function save_disease(Request $request) {
        $request->validate([
            'disease_name' => 'required',
            'department_id' => 'required',
            'doctor_id' => 'required',
            'category_id' => 'required',
            'disease_title' => 'required',
            'disease_hospital' => 'required',
            'disease_image' => 'required',
            'disease_image_1' => 'required',
            'disease_description' => 'required',
            'hospital_address' => 'required',
        ]);

        $last_id = MainDisease::insertGetId([
                    'disease_name' => $request->disease_name,
                    'department_id' => $request->department_id,
                    'doctor_id' => $request->doctor_id,
                    'category_id' => $request->category_id,
                    'disease_title' => $request->disease_title,
                    'disease_hospital' => $request->disease_hospital,
                    'hospital_address' => $request->hospital_address,
                    'disease_description' => $request->disease_description,
                    'disease_image' => $request->disease_image,
                    'disease_image_1' => $request->disease_image_1,
                    'created_at' => Carbon::now()
        ]);

        if ($request->hasFile('disease_image', 'disease_image_1')) {
            $photo_to_upload = $request->disease_image;
            $photo_to_uploadd = $request->disease_image_1;
// $file_name=$last_doctor_id.'.'.$photo_to_upload->getClientoriginalExtension();
            $file_name = $last_id . '.' . $photo_to_upload->getClientoriginalExtension();
            $file_name = $last_id . '.' . $photo_to_uploadd->getClientoriginalExtension();
            $file_name_db = 'back_end/disease_image/' . $last_id . '.' . $photo_to_upload->getClientoriginalExtension();
            $file_name_1_db = 'back_end/disease_image_1/' . $last_id . '.' . $photo_to_uploadd->getClientoriginalExtension();

            Image::make($photo_to_upload)->resize(500, 400)->save(base_path('public/back_end/disease_image/' . $file_name));
            Image::make($photo_to_uploadd)->resize(500, 400)->save(base_path('public/back_end/disease_image_1/' . $file_name));
//  Image::make($photo_to_upload)->resize(200,300)->save(base_path('public/doctor/image/'.$file_name),100); picture quality
            MainDisease::find($last_id)->update([
                'disease_image' => $file_name_db,
                'disease_image_1' => $file_name_1_db,
            ]);
        }

        return back()->with('message', 'You successfully save information!');
    }

//-------------end---------main Disese---------------
//-------------start---------main Disease---------------

    public function add_disease_descript() {

        $maindisease = MainDisease::all();


        return view('admin/admin_pages/add_disease_descript', compact('maindisease'));
    }

    public function save_disease_descript(Request $request) {
        $request->validate([
            'disease_id' => 'required',
            'disease_question' => 'required',
            'disease_description' => 'required'
        ]);
        DiseaseDescript::insert([
            'disease_id' => $request->disease_id,
            'disease_question' => $request->disease_question,
            'disease_description' => $request->disease_description,
            'created_at' => Carbon::now()
        ]);
        return back()->with('message', 'You successfully save information!');
    }

//-------------end---------main Disese---------------
}
