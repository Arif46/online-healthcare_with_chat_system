<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Slider;
use Intervention\Image\ImageManagerStatic as Image;
class SliderController extends Controller
{
 public function add_slider() {
      
      
        return view('admin/admin_pages/add_slider_page');
    }

    public function save_slider(Request $request) {

        $request->validate([
            'slider_name' => 'required|unique:sliders,slider_name',
            'slider_title' => 'required|unique:sliders,slider_title',
            'slider_image' => 'required'
        ]);

//        $request->validate([
//            'slider_name' => 'required|unique:slider,slider_name'
//            'slider_title' => 'required|unique:categories,slider_title'
//        ]);

   
        $last_slider_id= Slider::insertGetId([
                'slider_name' => $request->slider_name,
                'slider_title' => $request->slider_title,
                'slider_image'=>$request->slider_image,
                'created_at' => Carbon::now()
            ]);
       
      
       if ($request->hasFile('slider_image')) {
            $photo_to_upload = $request->slider_image;
//             $file_name=$last_slider_id.'.'.$photo_to_upload->getClientoriginalExtension();
            $file_name = $last_slider_id . '.' . $photo_to_upload->getClientOriginalExtension();
          $file_name_db = 'back_end/slider_image/' . $last_slider_id . '.'.$photo_to_upload->getClientoriginalExtension();

          Image::make($photo_to_upload)->resize(200, 300)->save(base_path('public/back_end/slider_image/' . $file_name));
//            //  Image::make($photo_to_upload)->resize(200,300)->save(base_path('public/doctor/image/'.$file_name),100); picture quality
            Slider::find($last_slider_id)->update([
                'slider_image' => $file_name_db
            ]);
        }
        return back()->with('message', 'Successfully Save Information');
    }

    public function manage_slider() {
        $c_slider = Slider::paginate(10);

        $softdelete_data = Slider::onlyTrashed()->paginate(10);



        return view('admin/admin_pages/manage_slider', compact('c_slider', 'softdelete_data'));
    }

    public function manage_slider_softdelete($slider_id) {
        Slider::find($slider_id)->delete();
        return back()->with('softdelete_message', 'Successfully Delete');
    }

    public function manage_slider_parmanentdelete($slider_id) {
        Slider::onlyTrashed()->find($slider_id)->forceDelete();
        
             // echo $slider_id;
           $delete_photo = Slider::onlyTrashed()->find($slider_id)->slider_image;
                // echo $delete_photo; 
                unlink(base_path('public/' . $delete_photo)); //public/back_end/slider_image/.jpg

        
        
        return back()->with('Parmanentdelete_message', 'Successfully Parmanent Delete');
    }

    public function manage_slider_restore($slider_id) {


        Slider::onlyTrashed()->where('id', $slider_id)->restore();

        return back()->with('restore_message', 'Successfully Restore');
    }

    public function manage_slider_edit($slider_id) {
        $single_slider = Slider::findOrFail($slider_id);
        return view('admin/admin_pages/slider_edit_page', compact('single_slider'));
    }

    public function update_slider(Request $request) {
          if ($request->hasFile('slider_image')) {
            if (Slider::find($request->slider_id)->slider_image == 'defaultsliderimage') {
                $photo_to_upload = $request->slider_image;
                // $file_name=$last_slider_id.'.'.$photo_to_upload->getClientoriginalExtension();
         $file_name = $request->slider_id . '.' . $photo_to_upload->getClientoriginalExtension();
                $file_name_db = 'back_end/slider_image/' . $request->slider_id . '.' . $photo_to_upload->getClientoriginalExtension();

                Image::make($photo_to_upload)->resize(200, 300)->save(base_path('public/back_end/slider_image/' . $file_name));
                //  Image::make($photo_to_upload)->resize(200,300)->save(base_path('public/slider/image/'.$file_name),100); picture quality
                Slider::find($request->slider_id)->update([
                    'slider_image' => $file_name_db
                ]);
            } else {
                
                //delete picture
                $delete_photo = Slider::find($request->slider_id)->slider_image;
                // echo $delete_photo; 
                unlink(base_path('public/' . $delete_photo)); //public/slider/image/.jpg

                
                
                //update picture
                $photo_to_upload = $request->slider_image;
                // $file_name=$last_slider_id.'.'.$photo_to_upload->getClientoriginalExtension();
                $file_name = $request->slider_id . '.' . $photo_to_upload->getClientoriginalExtension();
                $file_name_db = 'back_end/slider_image/' . $request->slider_id . '.' . $photo_to_upload->getClientoriginalExtension();

                Image::make($photo_to_upload)->resize(200, 300)->save(base_path('public/back_end/slider_image//' . $file_name));
                //  Image::make($photo_to_upload)->resize(200,300)->save(base_path('public/slider/image/'.$file_name),100); picture quality
                Slider::find($request->slider_id)->update([
                    'slider_image' => $file_name_db
                ]);
            }
        }
        
        
        Slider::find($request->slider_id)->update([
            'slider_name' => $request->slider_name,
            'slider_title' => $request->slider_title
        ]);
        
        
        
        
        
        
        return redirect('admin/manage_slider')->with('update_message', 'Successfully Update Information');
    }

}
