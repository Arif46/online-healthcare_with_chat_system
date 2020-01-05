<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8">
        <title>Admin Home</title>
        <meta name="description" content="Bootstrap Online Health Care Dashboard">
        <meta name="author" content="Dennis Ji">
        <meta name="keyword" content="Online Health Care, Online Health Care UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->

        <!-- start: CSS -->
        <link id="bootstrap-style" href="{{asset('back_end/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('back_end/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
        <link id="base-style" href="{{asset('back_end/css/style.css')}}" rel="stylesheet">
        <link id="base-style-responsive" href="{{asset('back_end/css/style-responsive.css')}}" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
        <!-- end: CSS -->


        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js')}}"></script>
                <link id="ie-style" href="{{asset('back_end/css/ie.css')}}" rel="stylesheet">
        <![endif]-->

        <!--[if IE 9]>
                <link id="ie9style" href="{{asset('back_end/css/ie9.css')}}" rel="stylesheet">
        <![endif]-->

        <!-- start: Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico">
        <!-- end: Favicon -->

        <script type="text/javascript">
        function  deleteDoctor(){
           var msg=confirm("Are You Sure To Delete this!!!");
               if(msg){
                   
                return true;
               }else{
                   return false;
               }
        }
        function  parmanentDoctor(){
           var msg=confirm("Are You want To Parmanent Delete");
               if(msg){
                   
                return true;
               }else{
                   return false;
               }
        }
        function  restoreDoctor(){
           var msg=confirm("Are You Sure To Restore this!!!");
               if(msg){
                   
                return true;
               }else{
                   return false;
               }
        }
        function  editDoctor(){
           var msg=confirm("Are You want To Edit");
               if(msg){
                   
                return true;
               }else{
                   return false;
               }
        }
    
        
    
        </script>


    </head>

    <body>
        <!-- start: Header -->
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="{{url('/admin')}}"><span>Online Health Care</span></a>

                    <!-- start: Header Menu -->
                    <div class="nav-no-collapse header-nav">
                        <ul class="nav pull-right">
                         
                       
                           
                            <!-- start: User Dropdown -->
                            <li class="dropdown">
                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="halflings-icon white user"></i>Primeasia
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-menu-title">
                                        <span>Account Settings</span>
                                    </li>
                                    <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                                    <li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
                                </ul>
                            </li>
                            <!-- end: User Dropdown -->
                        </ul>
                    </div>
                    <!-- end: Header Menu -->

                </div>
            </div>
        </div>
        <!-- start: Header -->

        <div class="container-fluid-full">
            <div class="row-fluid">

                <!-- start: Main Menu -->
                <div id="sidebar-left" class="span2">
                    <div class="nav-collapse sidebar-nav">
                        <ul class="nav nav-tabs nav-stacked main-menu">
                            <li><a href="{{url('/admin')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
                            <li>
                                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Slider</span><span class="label label-important"> 2 </span></a>
                                <ul>
                                    <li><a class="submenu" href="{{url('/admin/add_slider')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Silder</span></a></li>
                                    <li><a class="submenu" href="{{url('/admin/manage_slider')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Silder</span></a></li>
                                </ul>	
                            </li>
                            <li>
                                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Category </span><span class="label label-important"> 2 </span></a>
                                <ul>
                                    <li><a class="submenu" href="{{url('/admin/add_category_disease')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Category Disease</span></a></li>
                                    <li><a class="submenu" href="{{url('/admin/manage_category_disease')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Category Disease</span></a></li>
                                </ul>	
                            </li>
                            <li>
                                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Department </span><span class="label label-important"> 2 </span></a>
                                <ul>
                                    <li><a class="submenu" href="{{url('/admin/add_department')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Department</span></a></li>
                                    <li><a class="submenu" href="{{url('/admin/manage_department')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Department</span></a></li>
                                </ul>	
                            </li>
                           
                            
                              <li>
                                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Doctor </span><span class="label label-important"> 2 </span></a>
                                <ul>
                                    <li><a class="submenu" href="{{url('/admin/add_doctor')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Doctor</span></a></li>
                                    <li><a class="submenu" href="{{url('/admin/manage_doctor')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Doctor</span></a></li>
                                </ul>	
                            </li>
                            
                            <li>
                                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Main Disease </span><span class="label label-important"> 2 </span></a>
                                <ul>
                                    <li><a class="submenu" href="{{url('/admin/add_disease')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Diseaes</span></a></li>
                                    <li><a class="submenu" href="{{url('/admin/manage_disease')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Diseaes</span></a></li>
                                </ul>	
                            </li>
                            <li>
                                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Main Disease Descript </span><span class="label label-important"> 2 </span></a>
                                <ul>
                                    <li><a class="submenu" href="{{url('/admin/add_disease_descript')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Diseaes Descript</span></a></li>
                                    <li><a class="submenu" href="{{url('/admin/manage_disease_descript')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Diseaes Descript </span></a></li>
                                </ul>	
                            </li>
                              <li>
                                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Customer</span></a>
                                <ul>
                                    <li><a class="submenu" href="{{url('/admin/manage_customer')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Customer</span></a></li>
                                </ul>	
                            </li>
                              <li>
                                <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Appointment </span></a>
                                <ul>
                                    <li><a class="submenu" href="{{url('/admin/manage_appointment')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Appointment</span></a></li>
                                </ul>	
                            </li>
                            <li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end: Main Menu -->

                <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
                </noscript>

                <!-- start: Content -->
              
                
                
                  <div id="content" class="span10">


                      
                      
                      
                      
                      @yield('content')
                      
                      
                      
                      
                      
                      
                      
                      

                </div><!--/.fluid-container-->
                
                
                
                
                
                
                
                
                
                
                
                

                <!-- end: Content -->
            </div><!--/#content.span10-->
        </div><!--/fluid-row-->

<!--        <div class="modal hide fade" id="myModal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>-->

        <div class="clearfix"></div>

        <footer>

            <h1 class="text-center">
                
                &copy; 2019<b> Arif ,Riaz, Raihan, Rabbi.</b>

            </h1>

        </footer>

        <!-- start: JavaScript-->

        <script src="{{asset('back_end/js/jquery-1.9.1.min.js')}}"></script>
        <script src="{{asset('back_end/js/jquery-migrate-1.0.0.min.js')}}"></script>

        <script src="{{asset('back_end/js/jquery-ui-1.10.0.custom.min.js')}}"></script>

        <script src="{{asset('back_end/js/jquery.ui.touch-punch.js')}}"></script>

        <script src="{{asset('back_end/js/modernizr.js')}}"></script>

        <script src="{{asset('back_end/js/bootstrap.min.js')}}"></script>

        <script src="{{asset('back_end/js/jquery.cookie.js')}}"></script>

        <script src="{{asset('back_end/js/fullcalendar.min.js')}}"></script>

        <script src="{{asset('back_end/js/jquery.dataTables.min.js')}}"></script>

        <script src="{{asset('back_end/js/excanvas.js')}}"></script>
        <script src="{{asset('back_end/js/jquery.flot.js')}}"></script>
        <script src="{{asset('back_end/js/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('back_end/js/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('back_end/js/jquery.flot.resize.min.js')}}"></script>

        <script src="{{asset('back_end/js/jquery.chosen.min.js')}}"></script>

        <script src="{{asset('back_end/js/jquery.uniform.min.js')}}"></script>

        <script src="{{asset('back_end/js/jquery.cleditor.min.js')}}"></script>

        <script src="{{asset('back_end/js/jquery.noty.js')}}"></script>

        <script src="{{asset('back_end/js/jquery.elfinder.min.js')}}"></script>

        <script src="{{asset('back_end/js/jquery.raty.min.js')}}"></script>

        <script src="{{asset('back_end/js/jquery.iphone.toggle.js')}}"></script>

        <script src="{{asset('back_end/js/jquery.uploadify-3.1.min.js')}}"></script>

        <script src="{{asset('back_end/js/jquery.gritter.min.js')}}"></script>

        <script src="{{asset('back_end/js/jquery.imagesloaded.js')}}"></script>

        <script src="{{asset('back_end/js/jquery.masonry.min.js')}}"></script>

        <script src="{{asset('back_end/js/jquery.knob.modified.js')}}"></script>

        <script src="{{asset('back_end/js/jquery.sparkline.min.js')}}"></script>

        <script src="{{asset('back_end/js/counter.js')}}"></script>

        <script src="{{asset('back_end/js/retina.js')}}"></script>

        <script src="{{asset('back_end/js/custom.js')}}"></script>
        <!-- end: JavaScript-->

    </body>
</html>
