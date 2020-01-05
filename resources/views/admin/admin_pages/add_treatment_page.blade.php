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
            <form class="form-horizontal" action="{{url('/admin/save_doctor')}}" method="post" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Treatment Category Name</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="doctor_name"  data-provide="typeahead" data-items="4" data-source='#'>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Treatment Category </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="doctor_graduate"  data-provide="typeahead" data-items="4" data-source='#'>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Doctor Exprience</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="doctor_exprience"  data-provide="typeahead" data-items="4" data-source='#'>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Doctor Address</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="doctor_address"  data-provide="typeahead" data-items="4" data-source='#'>
                        </div>
                    </div>
   

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Doctor Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="doctor_description"  id="textarea2" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fileInput">Doctor Image</label>
                        <div class="controls">
                            <input class="input-file uniform_on" name="doctor_image" id="fileInput" type="file">
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
