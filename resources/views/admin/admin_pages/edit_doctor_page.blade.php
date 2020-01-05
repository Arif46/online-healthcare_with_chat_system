@extends('admin.admin_master')

@section('content')

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Doctor</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="{{url('/admin/update_doctor')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                @if(session('message'))
                <h3 style="color:red;" class="text-center">
                    {{session('message')}}
                </h3>
                @endif
                @foreach($errors->all() as $error)
                 <h3 style="color:red;" class="text-center">
                   {{$error}}
                 
                </h3>
                @endforeach 

                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Doctor Name</label>
                        <div class="controls">
                            <input type="hidden" class="span6 typeahead" id="typeahead" name="doctor_id" value="{{$single_doctor->id}}"  data-provide="typeahead" data-items="4" data-source='#'>
                            <input type="text" class="span6 typeahead" id="typeahead" name="doctor_name" value="{{$single_doctor->doctor_name}}"  data-provide="typeahead" data-items="4" data-source='#'>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Doctor Graduate</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="doctor_graduate" value="{{$single_doctor->doctor_graduate}}"  data-provide="typeahead" data-items="4" data-source='#'>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Doctor Exprience</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="doctor_exprience"  value="{{$single_doctor->doctor_exprience}}" data-provide="typeahead" data-items="4" data-source='#'>
                        </div>
                    </div>
                      <div class="control-group">
                        <label class="control-label" for="typeahead">Doctor Present Hospital</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="present_hospital" value="{{$single_doctor->present_hospital}}"  data-provide="typeahead" data-items="4" data-source='#'>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Doctor Graduate Inistitute </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="graduate_institude" value="{{$single_doctor->graduate_institude}}"  data-provide="typeahead" data-items="4" data-source='#'>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Doctor Address</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="doctor_address" value="{{$single_doctor->doctor_address}}"  data-provide="typeahead" data-items="4" data-source='#'>
                        </div>
                    </div>
                         <div class="control-group">
                      <label class="control-label" for="typeahead">Department Name</label>
                        <div class="controls">

                            <select id="selectError" name="department_id" value="{{$single_doctor->department_id}}"  data-rel="chosen">
                                @foreach($department as $v_department)
                                <option value="{{$v_department->id}}"> {{$v_department->department_name}}</option>
                                @endforeach
                            </select>
                          
                        </div>


                    </div>
                    <div class="control-group">
                        <p class="text-center " style="color:red" >Must fill up Patient OR Category Diseases one part at least Or Both Status</p>
                <label class="control-label" for="typeahead">Doctor Expart</label>
                        <div class="controls">

                            <select id="selectError2" name="doctor_expart_category_id" value="{{$single_doctor->doctor_expart_category_id}}"  data-rel="chosen">
                                <option>Select Category</option>
                                @foreach($category_disease as $category_v)
                                <option value=" {{$category_v->id}}"> {{$category_v->category_disease_name}}</option>
                                @endforeach
                            </select>
                         
                        </div>


                    </div>


                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Doctor Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="doctor_description"  id="textarea2" rows="3">{{$single_doctor->doctor_description}}</textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fileInput">Doctor Image</label>
                        <div class="controls">
                            <input class="input-file uniform_on" name="doctor_image" value="{{$single_doctor->doctor_image}}" id="fileInput" type="file">
                            <img  width="80px" height="80" src="{{asset('')}}{{$single_doctor->doctor_image}}"> 
                            
                        </div>
                    </div> 








                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save Data</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->


@endsection
