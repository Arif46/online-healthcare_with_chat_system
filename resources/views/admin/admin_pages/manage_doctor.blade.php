@extends('admin.admin_master')

@section('content')
<h1 class='text-center' ><b style='color:Red'>Soft Delete</b> Or <b style='color:aqua'>Edit</b></h1>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Doctor Information Table</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            @if(session('update_message'))
            <h3 class="text-center" style="color:red">
                {{session('update_message')}}
            </h3>
            @endif
            @if(session('softdelete_message'))
            <h3 class="text-center" style="color:red">
                {{session('softdelete_message')}}
            </h3>
            @endif





            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Sri No.</th>
                        <th>Doctor ID</th>
                        <th>Doctor Name</th>
                        <th>Doctor Expart</th>
                        <th>Doctor Gradute</th>
                        <th>Doctor Expriene</th>
                        <th>Doctor Address</th>

                        <th>Doctor Image</th>
                        <th>Doctor Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    @forelse($doctor_info as $v_doctor)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$v_doctor->id}}</td>
                        <td>{{$v_doctor->doctor_name}}</td>
                        <td class="center">
                            <div class="group">

                                <span class="label label-success">
                                  
                                    {{$v_doctor->relation_to_category->category_disease_name}} 
                                </span>
                            </div>
                        </td>
                        <td>{{$v_doctor->doctor_graduate}}</td>
                        <td>{{$v_doctor->doctor_exprience}}</td>
                        <td>{{$v_doctor->doctor_address}}</td>


                        <td>

                            <img  width="80px" height="50px" src="{{asset('/')}}{{$v_doctor->doctor_image}}"> 
                        </td>
                        <td class="center">
                           {{str_limit($v_doctor->doctor_description,20)}}
                        </td>
                        <td class="center">
                            <div class="btn-group">
                              
                                <a class="btn btn-info" href="{{url('admin/edit_doctor')}}/{{$v_doctor->id}}" onclick="return editDoctor()">
                                Edit
                                </a>
                                <a class="btn btn-danger" href="{{url('admin/doctor_softdelete')}}/{{$v_doctor->id}}" onclick="return deleteDoctor()">
                                  Softdelete
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr class='center'style="color:red">
                        <td colspan="3">No available data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->

<h1 class='text-center' ><b style='color:Red'>Parmanent Delete</b> Or <b style='color:green'>Restore</b></h1>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Doctor Information Table</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            @if(session('restore_message'))
            <h3 class="text-center" style="color:red">
                {{session('restore_message')}}
            </h3>
            @endif
            @if(session('parmanentdelete_message'))
            <h3 class="text-center" style="color:red">
                {{session('parmanentdelete_message')}}
            </h3>
            @endif





            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Sri No.</th>
                        <th>Doctor ID</th>
                        <th>Doctor Name</th>
                        <th>Doctor Expart</th>
                        <th>Doctor Gradute</th>
                        <th>Doctor Expriene</th>
                        <th>Doctor Address</th>

                        <th>Doctor Image</th>
                        <th>Doctor Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    @forelse($softdelete_doctor as $s_doctor)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$s_doctor->id}}</td>
                        <td>{{$s_doctor->doctor_name}}</td>
                        <td class="center">
                            <div class="group">

                                <span class="label label-success">
                                   {{$s_doctor->relation_to_category->category_disease_name}} 
                                </span>
                            </div>
                        </td>
                        <td>{{$s_doctor->doctor_graduate}}</td>
                        <td>{{$s_doctor->doctor_exprience}}</td>
                        <td>{{$s_doctor->doctor_address}}</td>


                        <td>

                            <img  width="80px" height="50px" src="{{asset('/')}}{{$s_doctor->doctor_image}}"> 
                        </td>
                        <td class="center">
                           {{str_limit($s_doctor->doctor_description,20)}}
                        </td>
                        <td class="center">
                            <div class="btn-group">
                              
                                <a class="btn btn-danger" href="{{url('admin/doctor_parmanentdelete')}}/{{$s_doctor->id}}" onclick="return parmanentDoctor()">
                                    ParmanentDelete
                                </a>
                                <a class="btn btn-success" href="{{url('admin/doctor_restore')}}/{{$s_doctor->id}}"  onclick="return restoreDoctor() ">
                                   Restore
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr class='center'style="color:red">
                        <td colspan="3">No available data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->




@endsection		