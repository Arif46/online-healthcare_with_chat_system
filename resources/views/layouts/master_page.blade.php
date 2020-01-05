
<!DOCTYPE html>
<html lang="zxx">

    <head>
        <title>Health bd</title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="keywords" content="Medic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>



        <link rel="stylesheet" href="{{asset('front_end/css/bootstrap.css')}}">

        <link rel="stylesheet" href="{{asset('front_end/css/style.css')}}" type="text/css" media="all" />
        <!-- Style-CSS -->
        <link rel="stylesheet" href="{{asset('front_end/css/fontawesome-all.css')}}">


        <!-- Web-Fonts -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
              rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
              rel="stylesheet">
        <!-- //Web-Fonts -->
        <style>
             /* width */
        ::-webkit-scrollbar {
            width: 7px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #a7a7a7;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #929292;
        }

/*        ul {
            margin: 0;
            padding: 0;
        }

        li {
            list-style: none;
        }*/

        .user-wrapper, .message-wrapper {
            border: 1px solid #dddddd;
            overflow-y: auto;
        }

        .user-wrapper {
            height: 600px;
        }

        .user {
            cursor: pointer;
            padding: 5px 0;
            position: relative;
        }

        .user:hover {
            background: #eeeeee;
        }

        .user:last-child {
            margin-bottom: 0;
        }

        .pending {
            position: absolute;
            left: 13px;
            top: 9px;
            background: #b600ff;
            margin: 0;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            line-height: 18px;
            padding-left: 5px;
            color: #ffffff;
            font-size: 12px;
        }

        .media-left {
            margin: 0 10px;
        }

        .media-left img {
            width: 64px;
            border-radius: 64px;
        }

        .media-body p {
            margin: 6px 0;
        }

        .message-wrapper {
            padding: 10px;
            height: 536px;
            background: #eeeeee;
        }

        .messages .message {
            margin-bottom: 15px;
        }

        .messages .message:last-child {
            margin-bottom: 0;
        }

        .received, .sent {
            width: 45%;
            padding: 3px 10px;
            border-radius: 10px;
        }

        .received {
            background: gray;
        }

        .sent {
            background: #3bebff;
            float: right;
            text-align: right;
        }

        .message p {
            margin: 5px 0;
        }

        .date {
            color: #777777;
            font-size: 12px;
        }

        .active {
            background: #eeeeee;
        }

        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 15px 0 0 0;
            display: inline-block;
            border-radius: 4px;
            box-sizing: border-box;
            outline: none;
            border: 1px solid #cccccc;
        }

        input[type=text]:focus {
            border: 1px solid #aaaaaa;
        }
            </style>
    </head>

    <body>
        <!-- header -->
        <header>
            <!-- top-bar -->
            <div class="top-bar py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 top-social-agile">
                            <div class="row">
                                <!-- social icons -->
                                <ul class="col-lg-4 col-6 top-right-info text-center">
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="mx-3">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                    <li class="ml-3">
                                        <a href="#">
                                            <i class="fab fa-pinterest-p"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- //social icons -->
                                <div class="col-6 header-top_w3layouts pl-3 text-lg-left text-center">
                                    <p class="text-white">
                                        <i class="fas fa-map-marker-alt mr-2"></i>Dhaka,Bangladesh</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 top-social-agile text-lg-right text-center">
                            <div class="row">
                                <div class="col-lg-8 col-6 top-w3layouts">
                                    <p class="text-white">
                                        <i class="far fa-envelope-open mr-2">
                                        </i>
                                        <a href="mailto:info@example.com" class="text-white">health.bd@care.com</a>
                                    </p>
                                </div>
                                <div class="col-lg-4 col-6 header-w3layouts pl-4 text-lg-left">
                                    <p class="text-white">
                                        <i class="fas fa-phone mr-2"><span>+02675758</span></i>
                                </div></p>

                            </div>
                        </div>
                        <div class="col-lg-2 top-social-agile text-lg-right text-center">
                            <div class="row">

                                <div class="col-lg-6 col-6 top-w3layouts">
                          
                                <a class="nav-link" href="https://ancient-wildwood-73536.herokuapp.com/"><button class="btn" style="background-color:aqua">LiveChat</button></a>

                              
                                </div>



                                <div class="col-lg-6 col-6 top-w3layouts">
                                    <a href="{{url('/welcome/appointment')}}" class="nav-link">
                                     <button class="btn" style="background-color:yellow">  Appointment</button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- //top-bar -->


        <!-- header 2 -->
        <div id="home">
            <!-- navigation -->
            <div class="main-top py-1">
                <nav class="navbar navbar-expand-lg navbar-light fixed-nav">
                    <div class="container">
                        <!-- logo -->
                        <h1 style="margin-left:0px;">
                            <a class="navbar-brand font-weight-bold font-italic" href="{{url('/')}}">
                                <span>Health </span>Bd
                                <i class="fas fa-syringe"></i>
                            </a>
                        </h1>
                        <!-- //logo -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-lg-auto">
                                <li class="nav-item active mt-lg-0 mt-3">
                                    <a class="nav-linsk" style="color:black" href="{{url('/welcome/disease')}}">Disease
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>



                                <li class="nav-item dropdown mx-lg-4 my-lg-0  my-3">
                                    <a class="nav-link dropdown-toggle" href="{{url('/welcome/department')}}" id="navbarDropdown" role="button"data-toggle="drophdown" 
                                       aria-haspopup="true" aria-expanded="false">
                                        Department 
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach($department as $v_department)
                                        <a class="dropdown-item " href="{{('/welcome/department_disease')}}/{{$v_department->id}}">{{$v_department->department_name}}</a>
                                        @endforeach

                                    </div>
                                </li>

                                <li class="nav-item dropdown mx-lg-4 my-lg-0 my-3" >
                                    <a class="nav-link " href="{{url('/welcome/doctor')}}" id="navbarDropdown"   data-toggle="dropdodwn"
                                       >
                                        Doctor
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                        @foreach($department as $v_depart)
                                        <a  class="dropdown-item" href="{{url('welcome/cate_doctor')}}/{{$v_depart->id}}">{{$v_depart->department_name}}</a>
                                        @endforeach

                                    </div>
                                </li>

                                <!--                                     <li class="nav-item mx-lg-4 my-lg-0 my-3">
                                                                    <a class="nav-link" href="{{url('/welcome/about')}}">About </a>
                                                                </li>-->

                                <!--                                <li class="nav-item mx-lg-4 my-lg-0 my-3">
                                                                    <a class="nav-link" href="appointment.html">Appointment</a>
                                                                </li>-->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/welcome/contact')}}">Contact</a>
                                </li>
                                <li class="nav-item mx-lg-4 my-lg-0 my-3">

                                    
                                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                          
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"> <button style="background-color:springgreen"> {{ __('Register') }}</button></a>
                                </li>
                            @endif
                        @else
                            <li >
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <button style="background-color:springgreen">  {{ Auth::user()->name }}</button> <span class="caret"></span>
                                </a>

                                
                            </li>
                        @endguest
                    </ul> 
                                    
               

                            </ul>
                            <!--                              login 
                                                        <h1 style="margin-left:4px;">
                                                            <a href="#" class="login-button ml-lg-5 mt-lg-0 mt-4 mb-lg-0 mb-3" data-toggle="modal" data-target="#exampleModalCenter1">
                                                                <i class="fas fa-sign-in-alt mr-2"></i>Login</a>
                                                        </h1>
                                                      <h1 style="margin-right:04px;">
                                                            <a href="#" class="login-button ml-lg-5 mt-lg-0 mt-3 mb-lg-0 mb-2"data-toggle="modal" data-target="#exampleModalCenter2">
                                                                <i class="fas fa-sign-in-alt mr-2"></i>Registration</a>
                                                        </h1>-->



                        </div>
                    </div>
                </nav>
            </div>
            <!-- //navigation -->
            <!-- modal -->
            <!-- login -->

            <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="login px-4 mx-auto mw-100">
                                <h5 class="text-center mb-4">Login Now</h5>
                                <form action="{{url('/welcome/customer_login')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="customer_email" placeholder="" required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-2">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="" required="">
                                    </div>
                                    <button type="submit" class="btn submit mb-4">Login</button>
                                    <p class="forgot-w3ls text-center pb-4">
                                        <a href="#" class="text-white">Forgot your password?</a>
                                    </p>
                                    <p class="account-w3ls text-center pb-4">
                                        Don't have an account?
                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">Create one now</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //login -->
            <!-- register -->
            <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content modal-content-2">
                        <div class="modal-header text-center">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="login px-4 mx-auto mw-100">
                                <h5 class="text-center mb-4">Register Now</h5>



                                <form action="{{url('/welcome/save_customer')}}"  method="post">


                                    @csrf
                                    <div class="form-group">
                                        <label>Your Name</label>
                                        <input type="text" class="form-control" name="customer_name" placeholder="" required="">
                                    </div>
                                    <div class="form-group">

                                        <label>Email</label>
                                        @foreach($errors->all() as $error)
                                        <p style="color:red;" class="text-center">
                                            {{$error}}

                                        </p>
                                        @endforeach 
                                        <input type="email" class="form-control" name="customer_email" placeholder="" required="">

                                    </div>
                                    <div class="form-group">
                                        <label class="mb-2">Password</label>
                                        <input type="password" class="form-control" name="customer_password" id="password1" placeholder="" required="">
                                    </div>

                                    <button type="submit" class="btn btn-primary submit mb-4">Register</button>
                                    <p class="text-center pb-2">
                                        <a href="#" class="text-white">By clicking Register, I agree to your terms</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //register -->
            <!-- //modal -->
        </div>
        <!-- //header 2 -->
        <div class="clearfix"></div>



        @yield('content')











        <!-- footer -->
        <footer>
            <div class="w3ls-footer-grids pt-sm-4 pt-3 mt-5">
                <div class="container py-xl-5 py-lg-3">
                    <div class="row">
                        <div class="col-md-4 w3l-footer">
                            <h2 class="mb-sm-1 mb-1">
                                <a href="index.html" class="text-white font-italic font-weight-bold">
                                    <span>online</span>healthcarebd

                                </a>
                            </h2>
                            <p>simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                        <div class="col-md-4 w3l-footer my-md-0 my-4">
                            <h3 class="mb-sm-3 mb-2 text-white">Address</h3>
                            <ul class="list-unstyled">
                                <li>
                                    <i class="fas fa-location-arrow float-left"></i>
                                    <p class="ml-4">The company name
                                        <span>Heath Care,</span>Dhaka,Bangladesh </p>
                                    <div class="clearfix"></div>
                                </li>
                                <li class="my-3">
                                    <i class="fas fa-phone float-left"></i>
                                    <p class="ml-4">+023232552</p>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <i class="far fa-envelope-open float-left"></i>
                                    <a href="health.bd@care.com" class="ml-3">health.bd@care.com</a>
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 w3l-footer">
                            <h3 class="mb-sm-3 mb-2 text-white">Quick Links</h3>
                            <div class="nav-w3-l">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="{{url('/')}}">Home</a>       <!--index.html-->
                                    </li>
                                  
                                    
                                    <li class="mt-2">
                                        <a href="{{url('welcome/department')}}">Department</a> <!--appointment.html-->
                                    </li>
                                    <li class="mt-2">
                                        <a href="{{url('welcome/disease')}}">Disease</a> <!--appointment.html-->
                                    </li>
                                    <li class="mt-2">
                                        <a href="{{url('welcome/appointment')}}">Appointment</a> <!--appointment.html-->
                                    </li>
                                    <li class="mt-2">
                                        <a href="{{url(' welcome/contact' )}}">Contact Us</a> <!--contact.html-->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-5 pt-lg-4 pt-3 pb-lg-0 pb-3 text-center">
                        <p class="copy-right-grids mt-lg-1">© 2019 Final Project. All Rights Reserved | Design & Development by
                            Arif,Riaz,Rabbi,Raihan 
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- //footer -->


        <!-- Js files -->
        <!-- JavaScript -->
        <script src="{{asset('front_end/js/jquery-2.2.3.min.js')}}"></script>
        <!-- Default-JavaScript-File -->

        <!-- banner slider -->
        <script src="{{asset('front_end/js/responsiveslides.min.js')}}"></script>
        <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


  
        <script>
            $(function () {
                $("#slider4").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: true,
                    speed: 1000,
                    namespace: "callbacks",
                    before: function () {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });
            });
            
            
              var receiver_id = '';
    var my_id = "{{ Auth::id() }}";
    $(document).ready(function () {
        // ajax setup form csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

      
       var pusher = new Pusher('317d574b17a85cc0cb4c', {
      cluster: 'ap2',
      forceTLS: true
         });

  
        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function (data) {
            // alert(JSON.stringify(data));
            if (my_id == data.from) {
                $('#' + data.to).click();
            } else if (my_id == data.to) {
                if (receiver_id == data.from) {
                    // if receiver is selected, reload the selected user ...
                    $('#' + data.from).click();
                } else {
                    // if receiver is not seleted, add notification for that user
                    var pending = parseInt($('#' + data.from).find('.pending').html());

                    if (pending) {
                        $('#' + data.from).find('.pending').html(pending + 1);
                    } else {
                        $('#' + data.from).append('<span class="pending">1</span>');
                    }
                }
            }
        });

        $('.user').click(function () {
            $('.user').removeClass('active');
            $(this).addClass('active');
          //  $(this).find('.pending').remove();

            receiver_id = $(this).attr('id');
          //   alert(receiver_id);
            $.ajax({
                type: "get",
                url: "message/" + receiver_id, // need to create this route
                data: "",
                cache: false,
                success: function (data) {
               
                  $('#messages').html(data);
                   scrollToBottomFunc();
                }
            });
        });

        $(document).on('keyup', '.input-text input', function (e) {
            var message = $(this).val();

            // check if enter key is pressed and message is not null also receiver is selected
            if (e.keyCode == 13 && message != '' && receiver_id != '') {
                $(this).val(''); // while pressed enter text box will be empty

                var datastr = "receiver_id=" + receiver_id + "&message=" + message;
                $.ajax({
                    type: "post",
                    url: "message", // need to create this post route
                    data: datastr,
                    cache: false,
                    success: function (data) {

                    },
                    error: function (jqXHR, status, err) {
                    },
                    complete: function () {
                        scrollToBottomFunc();
                    }
                })
            }
        });
    });

    // make a function to scroll down auto
    function scrollToBottomFunc() {
        $('.message-wrapper').animate({
            scrollTop: $('.message-wrapper').get(0).scrollHeight
        }, 50);
    }
            
            
            
            
        </script>
        <!-- //banner slider -->

        <!-- fixed navigation -->
        <script src="{{asset('front_end/js/fixed-nav.js')}}"></script>
        <!-- //fixed navigation -->

        <!-- smooth scrolling -->
        <script src="{{asset('front_end/js/SmoothScroll.min.js')}}"></script>
        <!-- move-top -->
        <script src="{{asset('front_end/js/move-top.js')}}"></script>
        <!-- easing -->
        <script src="{{asset('front_end/js/easing.js')}}"></script>
        <!--  necessary snippets for few javascript files -->
        <script src="{{asset('front_end/js/medic.js')}}"></script>

        <script src="{{asset('front_end/js/bootstrap.js')}}"></script>
        <!-- Necessary-JavaScript-File-For-Bootstrap -->

        <!-- //Js files -->

        
      
        
        
        
        
        
        
    </body>

</html>