
@extends('admin.admin_master')

@section('content')

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Department</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="{{url('/admin/save_department')}}" method="post" enctype="multipart/form-data">
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
                        <label class="control-label" for="typeahead">Department Name</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="department_name" value="{{old('department_name')}}"  data-provide="typeahead" data-items="4" data-source='#'>
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="typeahead">Department Title </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="department_title"  value="{{old('department_title')}}" data-provide="typeahead" data-items="4" data-source='#'>
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Department Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="department_description"  id="textarea2" rows="3">{{old('department_description')}}</textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fileInput">Department Image</label>
                        <div class="controls">
                            <input class="input-file uniform_on" name="department_image" value="{{old('department_image')}}" id="fileInput" type="file">
                            <img  width="80px" height="80" src="{{old('department_image')}}"> 

                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Department Icon</label>
                        <div class="controls">
                            <input type="file" class="span6 typeahead" id="typeahead" name="department_icon" value="{{old('department_icon')}}"  data-provide="typeahead" data-items="4" data-source='#'>
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
