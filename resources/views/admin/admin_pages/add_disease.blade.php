@extends('admin.admin_master')

@section('content')

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Disease</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="{{url('/admin/save_disease')}}" method="post" enctype="multipart/form-data">
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
                        <label class="control-label" for="typeahead">Disease Name</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="disease_name" value="{{old('disease_name')}}"  data-provide="typeahead" data-items="4" data-source='#'>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Doctor Name</label>
                        <div class="controls">

                            <select id="selectError2" name="doctor_id" value="{{old('doctor_id')}}"  data-rel="chosen">
                                <option >Select Doctor</option>
                                @foreach($doctor as $v_doctor)
                                <option value="{{$v_doctor->id}}">{{$v_doctor->doctor_name}}&nbsp; {{$v_doctor->deprt_rela->department_name}}&nbsp; {{$v_doctor->relation_to_category->category_disease_name}}</option>
                                @endforeach
                            </select>

                        </div>


                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Department Name</label>
                        <div class="controls">

                            <select id="selectError2" name="department_id" value="{{old('department_id')}}"  >
                                <option value="0">Select Department Name</option>
                                @foreach($department as $v_department)
                                <option value="{{$v_department->id}}">{{$v_department->department_name}}</option>
                                @endforeach

                            </select>

                        </div>


                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Category Name</label>
                        <div class="controls">

                            <select id="selectError3" name="category_id" value="{{old('category_id')}}"  data-rel="chosen">
                                <option >Select Category</option>
                                @foreach($category as $v_category)
                                <option value="{{$v_category->id}}">{{$v_category->category_disease_name}}</option>
                                @endforeach
                            </select>

                        </div>


                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Disease Title</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="disease_title" value="{{old('disease_title')}}"  data-provide="typeahead" data-items="4" data-source='#'>
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Disease Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="disease_description"  id="textarea2" rows="3">{{old('disease_description')}}</textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="fileInput">Disease Image</label>
                        <div class="controls">
                            <input class="input-file uniform_on" name="disease_image" value="{{old('disease_image')}}" id="fileInput" type="file">
                            <img  width="80px" height="80" src="{{old('disease_image')}}"> 

                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label" for="fileInput">Disease Image 1</label>
                        <div class="controls">
                            <input class="input-file uniform_on" name="disease_image_1" value="{{old('disease_image_1')}}" id="fileInput" type="file">
                            <img  width="80px" height="80" src="{{old('disease_image_1')}}"> 

                        </div>
                    </div> 


                    <div class="control-group">
                        <label class="control-label" for="typeahead"> Disease Best Hospital</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="disease_hospital" value="{{old('disease_hospital')}}"  data-provide="typeahead" data-items="4" data-source='#'>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Hospital Address</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="hospital_address" value="{{old('hospital_address')}}"  data-provide="typeahead" data-items="4" data-source='#'>
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

