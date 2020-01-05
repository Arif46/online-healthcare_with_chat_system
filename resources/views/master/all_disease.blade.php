@extends('layouts.master_page')

@section('content')

<div style="background-color:blue">
    <pre>
        


    </pre>
  
</div>
<div class="breadcrumb-agile">
		<div aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="{{url('/')}}">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Disease Page</li>
			</ol>
		</div>
	</div>
  
                    <h3 class="text-center mt-5">All Disease of Health Care</h3>
                     <section class="gallery py-5">
                         <div class="container" >
            <ul id="da-thumbs" class="da-thumbs">
               @foreach($disease as $v_disease)
                
                <li>

                    <div class="price-top">
                        <a href="{{url('welcome/disease_details')}}/{{$v_disease->id}}">
                            <h4 class="">{{$v_disease->disease_name}}</h4>
                        <img src="{{asset('')}}{{$v_disease->disease_image}}" alt="" class="img-fluid" />
                        <div  style="background-color:lemonchiffon">
                        <h4 class="text-dark mb-2">{{$v_disease->category_relation->category_disease_name}}</h4>

                        <i class=" doc_img"> <img src="{{asset('')}}{{$v_disease->doctor_relation->doctor_image}}" alt="" class="img-fluid"></i>
                            {{$v_disease->doctor_relation->doctor_name}}
                        <span>{{$v_disease->doctor_relation->doctor_graduate}},{{$v_disease->doctor_relation->doctor_institude}}

                        </span>
                        <p style="margin-left: 60px">{{$v_disease->doctor_relation->doctor_exprience}} experience</p>
                        </a>
                    </div>
                    </div>
                    
                    &nbsp;
                </li>
              
       @endforeach
               
               
              



            </ul>
                         </div>
        </section>
    



@endsection

