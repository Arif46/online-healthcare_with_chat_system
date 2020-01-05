@extends('layouts.master_page')

@section('content')
<div style="background-color:blue">
    <pre>
        


    </pre>

</div>


<section>
    <div class="container">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tabmenu1" role="tabpanel">
                <div class="row inner_sec_info">
                    <!-- left side -->
                    <div class="col-lg-10 single-left">
                        <div class="single-left1">
                            <img src="{{asset('')}}{{$single_disease->disease_image}}"  width="100%"alt=" " class="img-fluid" />
                            <h3 class="blog-first text-dark  my-4">
                                Disease Name:{{$single_disease->disease_name}}<br>

                            </h3>  
                            <h4>  
                                <b style="color:aqua">  Department:</b> &nbsp;{{$single_disease->depart_relation->department_name}}<br>
                                <b style="color:gold"> Category:</b>&nbsp;&nbsp;{{$single_disease->category_relation->category_disease_name}}<br>
                                <b style="color:blue">  Best Hospital:</b>&nbsp;&nbsp;{{$single_disease->disease_hospital}},{{$single_disease->hospital_address}}
                            </h4>
                            <br>
                            <ul class="blog_list my-3 ">
                                <li> <a href="{{url('/welcome/doctor_single/details')}}/{{$single_disease->doctor_relation->id}}">
                                        <img src="{{asset('')}}{{$single_disease->doctor_relation->doctor_image}}" height="80px" width="80px" alt="#" class="img-responsive" style="display: block; ">


                                    </a>

                                </li>
                                <li>
                                    <h5>{{$single_disease->doctor_relation->doctor_name}}</h5>
                                    <h5>{{$single_disease->category_relation->category_disease_name}}</h5>
                                    <h3>{{$single_disease->doctor_relation->doctor_graduate}},{{$single_disease->doctor_relation->present_hospital}}</h3>
                                    <h3>{{$single_disease->doctor_relation->doctor_expart}}</h3>

                                    <h6> <span>{{$single_disease->doctor_relation->doctor_exprience}} experience</span>

                                    </h6>
                                </li>
                                <li>
                                    <h5>
                                    </h5>

                                </li>



                            </ul>


                            <ul>
                                <h4>Speak Doctor</h4>
                                <a href="https://ancient-wildwood-73536.herokuapp.com/">    <button class="btn" style="background-color:aqua">Live Chat</button></a>
                                <a href="{{url('welcome/appointment')}}"> <button class="btn" style="background-color:royalblue">Appointment</button></a>
                            </ul>
                            <br>
                            <br>
                            <br>
                            <br>

                            <h2>{{$single_disease->disease_name}}</h2>

                          {{$single_disease->disease_description}}
                          <br>
                            <br>
                            <h2>All Question</h2>
                            

                               @foreach($disease_descript as $v_descript)
                              @if($v_descript->disease_id==$single_disease->id)
                            <h4>  <a href="#{{$v_descript->disease_question}}">{{$v_descript->disease_question}}</a>

                            </h4>
                              @endif
                            @endforeach
                            <br>
                            <h4>  {{$single_disease->disease_title}}</h4>
                        <br>
                        <br>
                            <img src="{{asset('')}}{{$single_disease->disease_image_1}}" height="80%" width="100%" alt=" " class="img-fluid" />
                            <br>
                            <br>
                            <h2>Description:</h2>
                            

                         
                            
                            

                            
                            @foreach($disease_descript as $v_descript)
                            @if($v_descript->disease_id==$single_disease->id)
                            <h4 id="{{$v_descript->disease_question}}">{{$v_descript->disease_question}}

                            </h4>
                            <p style="color:black">{{$v_descript->disease_description}}</p>
                            @endif
                            @endforeach

                        </div>


                    </div>

                </div>
            </div>


        </div>
    </div>
</section>



@endsection