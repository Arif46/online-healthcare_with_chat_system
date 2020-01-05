
@extends('layouts.master_page')

@section('content')
  <div class="inner-banner-w3ls">
            <div class="container">

            </div>
            <!-- //banner 2 -->
        </div>
     <section class="home_doctors text-center">
            <div class="container">
                <div class="b_bottom">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="text-center mt-5">All Doctor of Health Care</h3>
                               @foreach($doctor_info as $v_doctor)
                                    <div class="col-md-2 col-xs-6  col-xs-offset-0 mt-4">
                                        <a href="{{url('/welcome/doctor_single/details')}}/{{$v_doctor->id}}">
                                            <img src="{{asset('')}}{{$v_doctor->doctor_image}}"  alt="#" class="img-responsive" style="display: block; ">
                                            <h5>Dr.{{$v_doctor->doctor_name}} </h5>
                                        </a>
                                        <p>{{$v_doctor->category_relation->category_disease_name}},
                                            <span>{{$v_doctor->doctor_exprience}}experience</span>
                                            {{$v_doctor->doctor_graduate}}, {{$v_doctor->doctor_institude}}
                                        </p>
                                        
                                    </div>
                                  @endforeach
                                </div>
                                <div class="clearfix"></div>

                    </div>
                </div>
            </div>
        </section>
@endsection