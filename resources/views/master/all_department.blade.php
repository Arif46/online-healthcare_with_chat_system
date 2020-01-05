
@extends('layouts.master_page')

@section('content')
 
<div style="background-color:blue">
    <pre>
        


    </pre>
  
</div>
     <section class="home_doctors text-center">
            <div class="container">
                <div class="b_bottom">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="text-center mt-5">All Department of Health Care</h3>
                               @foreach($department as $v_department)
                                    <div class="col-md-2 col-xs-6  col-xs-offset-0 mt-4">
                                        <a href="{{url('welcome/department_disease')}}/{{$v_department->id}}">
                                            <img src="{{asset('')}}{{$v_department->department_icon}}"  alt="#" class="img-responsive" style="display: block; ">
                                        </a>
                                        
                                        <h4>{{$v_department->department_name}}</h4>
                                    </div>
                                    
                                    @endforeach
                            
                                  
                            
                                
                                </div>
                                <div class="clearfix"></div>
                            

                    </div>
                </div>
            </div>
        </section>
@endsection
