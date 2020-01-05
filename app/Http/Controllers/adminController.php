<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryDisease;

use Carbon\Carbon;

class adminController extends Controller {

    public function index() {
        return view('admin/admin_pages/dashboard');
    }

    public function add_category_disease() {
        return view('admin/admin_pages/add_category_disease_page');
    }

    public function save_category_disease(Request $request) {

        $request->validate([
            'category_disease_name' => 'required|unique:category_diseases,category_disease_name',
            'category_disease_description' => 'required|unique:category_diseases,category_disease_description'
        ]);

//        $request->validate([
//            'category_disease_name' => 'required|unique:category_disease,category_disease_name'
//            'category_disease_description' => 'required|unique:categories,category_disease_description'
//        ]);

        if (isset($request->category_disease_name)) {
            CategoryDisease::insert([
                'category_disease_name' => $request->category_disease_name,
                'category_disease_description' => $request->category_disease_description,
                'created_at' => Carbon::now()
            ]);
        } else {
            CategoryDisease::insert([
                'category_disease_description' => $request->category_disease_description,
                'created_at' => Carbon::now()
            ]);
        }
        return back()->with('message', 'Successfully Save Information');
    }

    public function manage_category_disease() {
        $c_disease = CategoryDisease::paginate(10);

        $softdelete_data = CategoryDisease::onlyTrashed()->paginate(10);



        return view('admin/admin_pages/manage_category_disease_page', compact('c_disease', 'softdelete_data'));
    }

    public function manage_category_softdelete($category_disease_id) {
        CategoryDisease::find($category_disease_id)->delete();
        return back()->with('softdelete_message', 'Successfully Delete');
    }

    public function manage_category_parmanentdelete($category_disease_id) {
        CategoryDisease::onlyTrashed()->find($category_disease_id)->forceDelete();
        return back()->with('Parmanentdelete_message', 'Successfully Parmanent Delete');
    }

    public function manage_category_restore($category_disease_id) {


        CategoryDisease::onlyTrashed()->where('id', $category_disease_id)->restore();

        return back()->with('restore_message', 'Successfully Restore');
    }

    public function manage_category_edit($category_disease_id) {
        $single_category_disease = CategoryDisease::findOrFail($category_disease_id);
        return view('admin/admin_pages/category_disease_edit_page', compact('single_category_disease'));
    }

    public function update_category_disease(Request $request) {
        CategoryDisease::find($request->category_disease_id)->update([
            'category_disease_name' => $request->category_disease_name,
            'category_disease_description' => $request->category_disease_description
        ]);
        return redirect('admin/manage_category_disease')->with('update_message', 'Successfully Update Information');
    }

   
    
    
    
    
    
    
    

//-------------end---------patient---------------
}
