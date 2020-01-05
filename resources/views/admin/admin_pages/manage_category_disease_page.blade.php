@extends('admin.admin_master')

@section('content')

<div class="row-fluid sortable">
   
    
    <div class="box span6">
         <h2 class='text-center' ><b style='color:Red'>Soft Delete</b> Or <b style='color:aqua'>Edit</b></h2>
        <div class="box-header">
            <h2><i class="halflings-icon align-justify"></i> <span class="break"> </span>Category Disease Table</h2>
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
           
            
            
            
            
           <table class="table">
                <thead>
                    <tr>
                        <th>Sri. NO</th>
                        <th>Category Disease ID</th>
                        <th>Category Disease Name</th>
                        <th>Category Disease Description</th>
                         <th>Action</th>                                          
                    </tr>
                </thead>   
                <tbody>
                       @forelse($c_disease as $v_disease)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$v_disease->id}}</td>
                        <td>{{$v_disease->category_disease_name}}</td>
                        <td>{{str_limit($v_disease->category_disease_description,20)}}</td>
                      
                      <td class="center">
                           <div class="btn-group" role="group">
                                <a class="btn btn-danger" href="{{url('admin/manage_category_softdelete')}}/{{$v_disease->id}}" role="button">SoftDelete</a>
                                <a class="btn btn-success" href="{{url('admin/manage_category_edit')}}/{{$v_disease->id}}" role="button">Edit </a>

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
            
             
            
            <div class="pagination pagination-centered">
                
                {{$c_disease->links()}}
<!--                <ul>
                    <li><a href="#">Prev</a></li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">Next</a></li>
                </ul>-->
            </div>     
        </div>
    </div><!--/span-->
    
    <div class="box span6">
<h2 class='text-center' ><b style='color:Red'>Parmanent Delete</b> Or <b style='color:green'>Restore</b></h2>
    
        <div class="box-header">
            <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Parmenet Delete Table</h2>
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
            @if(session('Parmanentdelete_message'))
            <h3 class="text-center" style="color:red">
                  {{session('Parmanentdelete_message')}}
            </h3>
            @endif
            
            
            
            <table class="table table-striped">
            <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category Disease Name</th>
                        <th>Category Disease Description</th>
                         <th>Action</th>                                           
                    </tr>
                </thead>   
                <tbody>
                    @forelse($softdelete_data as $v_data)
                    <tr>
                        <td>{{$v_data->id}}</td>
                        <td class="center">{{$v_data->category_disease_name}}</td>
                        <td class="center">{{str_limit($v_data->category_disease_description,15)}}</td>
                      <td class="center">
                        <div class="btn-group" role="group">
                                <a class="btn btn-danger" href="{{url('admin/manage_category_parmanentdelete')}}/{{$v_data->id}}" role="button">ParmentDelete</a>
                                <a class="btn btn-success" href="{{url('admin/manage_category_restore')}}/{{$v_data->id}}" role="button">Restore</a>

                            </div>
                      
                      
                      
                      
                      
                      </td>                                       
                    </tr>
                       @empty
                    <tr class='text-center'style="color:red">
                        <td colspan="4">No available data</td>
                    </tr>
                    @endforelse                           
                </tbody>
            </table>  
            <div class="pagination pagination-centered">
                 {{$softdelete_data->links()}}
            </div>     
        </div>
    </div><!--/span-->
</div><!--/row-->
@endsection		