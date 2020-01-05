<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/welcome/livechat', 'livechat@index');
Route::get('/message/{id}', 'HomeController@getMessage')->name('message');
Route::post('message', 'HomeController@sendMessage');

Route::get('/welcome/livechat', function () {
    return view('welcome');
});














//--------------start---------front End-----------------------------------------
Route::get('/','FrontendController@index');
Route::get('/welcome/about','FrontendController@about');
Route::get('/welcome/contact','FrontendController@contact');
Route::get('/welcome/patient/base/disease/{patient_id}', 'FrontendController@patient_base_disease');
Route::get('/welcome/patient/base/disease', 'FrontendController@patient_base_diseas');
Route::get('/welcome/doctor', 'FrontendController@all_doctor');
Route::get('/welcome/cate_doctor/{category_id}', 'FrontendController@cate_doctor');
Route::get('/welcome/doctor_single/details/{doctor_id}', 'FrontendController@doctor_single_details');
Route::get('/welcome/department', 'FrontendController@all_department');
Route::get('/welcome/department_disease/{department_id}', 'FrontendController@department_disease');
Route::get('/welcome/disease', 'FrontendController@all_disease');



Route::get('/welcome/disease_details/{disease_id}', 'FrontendController@disease_details');

Route::post('/welcome/save_customer', 'FrontendController@save_customer');
Route::post('/welcome/customer_login', 'FrontendController@customer_login');
Route::get('/welcome/appointment', 'FrontendController@appointment');
Route::post('/welcome/save/appointment', 'FrontendController@appointment_save');
Route::post('/welcome/contact', 'FrontendController@contact_save');


//--------------end-----------front End-----------------------------------------












//--------------start----------Back End-----------------------------------------

Route::get('/admin','adminController@index');
//---------start-----Category Disease----------
Route::get('/admin/add_category_disease','adminController@add_category_disease');
Route::post('/admin/save_category_disease','adminController@save_category_disease');
Route::get('/admin/manage_category_disease','adminController@manage_category_disease');
Route::get('/admin/manage_category_softdelete/{category_disease_id}','adminController@manage_category_softdelete');
Route::get('/admin/manage_category_edit/{category_disease_id}','adminController@manage_category_edit');
Route::post('/admin/update_category_disease','adminController@update_category_disease');
Route::get('/admin/manage_category_parmanentdelete/{category_disease_id}','adminController@manage_category_parmanentdelete');
Route::get('/admin/manage_category_restore/{category_disease_id}','adminController@manage_category_restore');
//--------end--------Category Disease----------

//--------start----------Daoctor-------------

Route::get('/admin/add_doctor','DataController@add_doctor');
Route:: post('/admin/save_doctor','DataController@save_doctor');
Route:: get('/admin/delete_doctor/{doctor_id}','DataController@delete_doctor');
Route:: get('/admin/edit_doctor/{doctor_id}','DataController@edit_doctor');
Route::post('/admin/update_doctor','DataController@update_doctor');
Route::get('/admin/doctor_softdelete/{doctor_id}','DataController@doctor_softdelete');
Route::get('/admin/doctor_parmanentdelete/{doctor_id}','DataController@doctor_parmanentdelete');
Route::get('/admin/doctor_restore/{doctor_id}','DataController@doctor_restore');

Route::get('/admin/manage_doctor','DataController@manage_doctor')->name('doctor');

//--------end------------Daoctor-------------

//--------start------------Patient-------------
Route::get('/admin/add_patient','adminController@add_patient');
Route::post('/admin/save_patient','adminController@save_patient');
Route::get('/admin/manage_patient','adminController@manage_patient');

Route::get('/admin/patient_softdelete/{patient_id}','adminController@patient_softdelete');
Route::get('/admin/patient_parmanentdelete/{patient_id}','adminController@patient_parmanentdelete');
Route::get('/admin/patient_restore/{patient_id}','adminController@patient_restore');
//--------end------------Patient-------------


//--------start----------treatment-----------------------------
Route::get('/admin/add_treatment','DataController@add_treatment');


//--------end----------treatment-----------------------------
//--------start----------slider-----------------------------
Route::get('/admin/add_slider','SliderController@add_slider');
Route::post('/admin/save_slider','SliderController@save_slider');
Route::get('/admin/manage_slider','SliderController@manage_slider');
Route::get('/admin/manage_slider_softdelete/{slider_id}','SliderController@manage_slider_softdelete');
Route::get('/admin/manage_slider_edit/{slider_id}','SliderController@manage_slider_edit');
Route::post('/admin/update_slider','SliderController@update_slider');
Route::get('/admin/manage_slider_parmanentdelete/{slider_id}','SliderController@manage_slider_parmanentdelete');
Route::get('/admin/manage_slider_restore/{slider_id}','SliderController@manage_slider_restore');
//--------end----------slider-----------------------------

//-------start---------department----------------------------------------------
Route::get('/admin/add_department','DataController@add_department');

Route::post('/admin/save_department','DataController@save_department');
Route::get('/admin/manage_department','DataController@manage_department');
Route:: get('/admin/delete_department/{department_id}','DataController@delete_department');
Route:: get('/admin/edit_department/{department_id}','DataController@edit_department');
Route::post('/admin/update_department','DataController@update_department');
Route::get('/admin/department_softdelete/{department_id}','DataController@department_softdelete');
Route::get('/admin/department_parmanentdelete/{department_id}','DataController@department_parmanentdelete');
Route::get('/admin/department_restore/{department_id}','DataController@department_restore');


//--------end----------department----------------------------------------------

//-------start---------main disease----------------------------------------------
Route::get('/admin/add_disease','DataController@add_disease');
Route::post('/admin/save_disease','DataController@save_disease');

//--------end---------- main disease----------------------------------------------
//-------start---------disease Descript----------------------------------------------
Route::get('/admin/add_disease_descript','DataController@add_disease_descript');
Route::post('/admin/save_disease_descript','DataController@save_disease_descript');

//--------end----------disease Descript----------------------------------------------





//--------------End------------Back End-----------------------------------------
