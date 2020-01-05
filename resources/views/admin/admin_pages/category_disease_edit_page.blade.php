@extends('admin.admin_master')

@section('content')

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break">Edit</span>Category Disease  </h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="{{url('/admin/update_category_disease')}}" method="post">

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


                @csrf

                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Category Disease Name</label>
                        <div class="controls">
                            <input type="hidden" class="span6 typeahead" id="typeahead" name='category_disease_id' value="{{$single_category_disease->id}}" data-provide="typeahead" data-items="4" data-source='["Alabama"'>
                            <input type="text" class="span6 typeahead" id="typeahead" name='category_disease_name' value="{{$single_category_disease->category_disease_name}}" data-provide="typeahead" data-items="4" data-source='["Alabama"'>
                        </div>
                    </div>


                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Disease Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name='category_disease_description' id="textarea2"  rows="3">{{$single_category_disease->category_disease_description}}</textarea>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Update Data</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->


@endsection


