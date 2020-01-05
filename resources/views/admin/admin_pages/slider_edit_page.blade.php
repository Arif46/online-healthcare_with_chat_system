@extends('admin.admin_master')

@section('content')

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break">Edit</span>Slider  </h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="{{url('/admin/update_slider')}}" method="post" enctype="multipart/form-data" >

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
                        <label class="control-label" for="typeahead">Slider Name</label>
                        <div class="controls">
                            <input type="hidden" class="span6 typeahead" id="typeahead" name='slider_id' value="{{$single_slider->id}}" data-provide="typeahead" data-items="4" data-source='["Alabama"'>
                            <input type="text" class="span6 typeahead" id="typeahead" name='slider_name' value="{{$single_slider->slider_name}}" data-provide="typeahead" data-items="4" data-source='["Alabama"'>
                        </div>
                    </div>


                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Slider Title</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name='slider_title' value="{{$single_slider->slider_title}}" data-provide="typeahead" data-items="4" data-source='["Alabama"'>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Slider Title</label>
                        <div class="controls">
                        <input type="file" class="span6 typeahead" id="typeahead" name='slider_image' value="{{$single_slider->slider_image}}" data-provide="typeahead" data-items="4" data-source='["Alabama"'>
                          <img  width="80px" height="80" src="{{asset('')}}{{$single_slider->slider_image}}"> 
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


