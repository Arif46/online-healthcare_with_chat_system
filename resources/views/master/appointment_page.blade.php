                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           @extends('layouts.master_page')

@section('content')
<div style="background-color:blue">
    <pre>
        


    </pre>
  
</div>

<!-- page details -->
<div class="breadcrumb-agile">
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{url('/')}}">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Appointment</li>
        </ol>
    </div>
</div>
<!-- //page details -->

<!-- contact -->
<div class="appointment py-5">
    <div class="py-xl-5 py-lg-3">
        <div class="w3ls-titles text-center mb-5">
            <h3 class="title">Appointment</h3>
            <span>
                <i class="fas fa-user-md"></i>
            </span>
            <p class="mt-2">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="d-flex">
            <div class="appoint-img">

            </div>
            <div class="contact-right-w3l appoint-form">
                <h5 class="title-w3 text-center mb-5">Fill your appointment form</h5>
                <form action="{{url('welcome/save/appointment')}}" method="post">
                    @csrf
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
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label"><b style="color:aqua">Your Name</b></label>
                        <input type="text" class="form-control" placeholder="Your Name " name="user_name"value="{{old('user_name')}}"  id="recipient-name" required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-phone" class="col-form-label"><b style="color:plum">Your Email</b></label>
                        <input type="email" class="form-control" placeholder="Your Email" name="user_email" value="{{old('user_email')}}"  id="recipient-phone" required="">
                    </div>
                    <div class="form-group">
                        <label for="datepicker" class="col-form-label"><b style="color:steelblue">Doctor Name</b></label>
                        <select required="" name="doctor_name" class="form-control"  value="{{old('doctor_name')}}" >
                            <option >Select your doctor</option>
                            @foreach($doctor_info as $doctor)
                            <option value="{{$doctor->id}}">{{$doctor->doctor_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="datepicker" class="col-form-label" ><b style="color:chartreuse">Appointment date</b></label>
                        <input placeholder="Date" name="appo_date" required="" class="date form-control"  id="datepicker" type="date" value="{{old('appo_date')}}" onfocus="this.value = '';"
                               onblur="if (this.value == '') {
                                           this.value = '';
                                       }" required="" />
                    </div>
                    <div class="form-group">
                        <label for="datepicker" class="col-form-label"><b style="color:violet">Appointment time</b></label>
                        <select required="" name="appo_time" class="form-control" value="{{old('appo_time')}}"  required="">
                            <option value="">Select Time</option>
                            <option value="08:00-8:30 am">08:00-8:30 &nbsp;&nbsp; Am</option>
                            <option value="08:30-9:00 am">08:30-9:00 &nbsp;&nbsp; Am</option>
                            <option value="09:00-9:30 am">09:00-9:30 &nbsp;&nbsp; Am</option>
                            <option value="09:30-10:00 am">09:30-10:00&nbsp; Am</option>
                            <option value="10:00-10:30 am">10:00-10:30&nbsp; Am</option>
                            <option value="06:30-7:00 pm">06:30-7:00 &nbsp;&nbsp; Pm</option>
                            <option value="07:00-7:30 pm">07:00-7:30 &nbsp;&nbsp; Pm</option>
                            <option value="07:30-8:00 pm">07:30-8:00 &nbsp;&nbsp; Pm</option>
                            <option value="08:00-8:30 pm">08:00-8:30 &nbsp;&nbsp; Pm</option>
                            <option value="08:30-9:00 pm">08:30-9:00 &nbsp;&nbsp; Pm</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="datepicker" class="col-form-label"><b style="color:brown">City</b></label>
                        <select required="" name="city_name" value="{{old('city_name')}}" class="form-control">
                            <option  >Select City</option>
                            <option value="1">Dhaka</option>
                            <option value="2">Borishal</option>
                            <option value="3">Rangpur</option>
                            <option value="4">Shlete</option>
                            <option value="5">Rajshahi</option>
                            <option value="6">Chittogram</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="datepicker" class="col-form-label"><b style="color:crimson">Speciality</b></label>
                        <select required="" name="speciality" required=""value="{{old('speciality')}}"  class="form-control">
                            <option >Select Speciality</option>
                            @foreach($disease as $v_disease)
                            <option value="{{$v_disease->id}}">{{$v_disease->disease_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="submit" value="Book Appointment" class="btn_apt">
                </form>
            </div>
            <div class="clerafix"></div>
        </div>
    </div>
</div>
<!-- //contact -->


@endsection