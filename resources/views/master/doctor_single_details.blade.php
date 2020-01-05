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
						<div class="col-lg-8 single-left">
							<div class="single-left1">
                                                            <img  width="100%" height="250px" src="{{asset('')}}{{$doctor_single_details->doctor_image}}" alt=" " class="img-fluid" />
								<h3 class="blog-first text-dark  my-4">
                                                                    <i style="color:aqua" class="far fa-user mr-2"></i>{{$doctor_single_details->doctor_name}}<br>
                                                                   
                                                                  </h3>  
                                                                    
                                                                <h4>  
                                                                    <b style="color:springgreen">Category:</b>{{$doctor_single_details->relation_to_category->category_disease_name}}
                                                                    
                                                                    
                                                                    <br> 
                                                                    <b style="color:aqua"> Department:</b>{{$doctor_single_details->deprt_rela->department_name}}
                                                                    
                                                                        <br>
                                                                        {{$doctor_single_details->doctor_graduate}},{{$doctor_single_details->graduate_institude}}
                                                                </h4>
								
								
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <a href="https://ancient-wildwood-73536.herokuapp.com/">      <button class="btn" style="background-color:aqua">Live Chat</button></a>
                                                                 <a href="{{url('welcome/appointment')}}">   <button class="btn" style="background-color:royalblue">Appointment</button></a>
								<ul class="blog_list my-3 text-center">
									
									
									
								</ul>
                                                                <h2>Doctor Description:</h2>
								{{$doctor_single_details->doctor_description}}
							</div>
							
							
						</div>
						<!-- //left side -->
						<!-- right side -->
						
						<!-- //right side -->
					</div>
				</div>

				
			</div>
    </div>
</section>



@endsection