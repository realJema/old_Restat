<?php   
 //load_data_select.php  
 $connect = mysqli_connect("localhost","root","","ubstud");
 function fill_product($connect)  
 {  
      $output = '';  
      $sql = "SELECT * FROM product";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<div class="col-md-3">';  
           $output .= '<div id="'.$row["code"].'" class="generateTable" style="border: 1px solid #ccc;padding: 0 10px;margin-bottom: 20px;min-width: 150px;"><h4>'.$row["code"].'</h4><p>'.$row["title"].'</p>';   
           $output .=     '</div>';  
           $output .=     '</div>';  
      }  
      return $output;  
 }  
 ?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>DataTables | Jema</title>

  <!-- Bootstrap core CSS -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/icheck/flat/green.css" rel="stylesheet">

  <link href="js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

  <script src="js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

          <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

              <div class="navbar nav_title" style="border: 0;">
                <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>ReStat</span></a>
              </div>
              <div class="clearfix"></div>

              <!-- menu prile quick info -->
              <div class="profile">
                <div class="profile_pic">
                  <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                  <span>Welcome,</span>
                  <h2>John Doe</h2>
                </div>
              </div>
              <!-- /menu prile quick info -->

              <br /><br /><br />

              <!-- sidebar menu -->
              <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                <div class="menu_section">
                  <h3>General</h3>
                  <ul class="nav side-menu">
                    <li><a href="index.html"><i class="fa fa-laptop"></i>Dashboard</a>
                    </li>
                    <li><a><i class="fa fa-bank"></i> Department </a>
                    </li>
                    <li><a><i class="fa fa-book"></i> Courses </a>
                    </li>
                    <li><a href="Students.php"><i class="fa fa-users"></i> Students </a>
                    </li>
                    <li><a><i class="fa fa-pie-chart"></i> Reports </a>
                    </li>
                    <li><a><i class="fa fa-bookmark"></i> Exam </a>
                    </li>
                  </ul>
                </div>
                <div class="menu_section">
                  <h3>Live On</h3>
                  <ul class="nav side-menu">
                    <li><a><i class="fa fa-comments"></i> Live Chat <span class="label label-success pull-right">Coming Soon</span></a>
                    </li>
                  </ul>
                </div>

              </div>
              <!-- /sidebar menu -->

              <!-- /menu footer buttons -->
              <div class="sidebar-footer hidden-small" style="display: flex;align-content: center;">
                <div style="margin: auto;padding: 10px 0;opacity: 0.7;">Created by <span style="font-weight: bold;font-size: 1.1em;">NATIVE</span></div>
              </div>
              <!-- /menu footer buttons -->
            </div>
          </div>

          <!-- top navigation -->
          <div class="top_nav">

            <div class="nav_menu">
              <nav class="" role="navigation">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                  <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/img.jpg" alt="">John Doe
                      <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                      <li><a href="javascript:;">  Profile</a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">Help</a>
                      </li>
                      <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                      </li>
                    </ul>
                  </li>

                  <li role="presentation" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">6</span>
                    </a>
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                      <li>
                        <a>
                          <span class="image">
                                            <img src="images/img.jpg" alt="Profile Image" />
                                        </span>
                          <span>
                                            <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                                            Film festivals used to be do-or-die moments for movie makers. They were where...
                                        </span>
                        </a>
                      </li>
                      <li>
                        <a>
                          <span class="image">
                                            <img src="images/img.jpg" alt="Profile Image" />
                                        </span>
                          <span>
                                            <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                                            Film festivals used to be do-or-die moments for movie makers. They were where...
                                        </span>
                        </a>
                      </li>
                      <li>
                        <a>
                          <span class="image">
                                            <img src="images/img.jpg" alt="Profile Image" />
                                        </span>
                          <span>
                                            <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                                            Film festivals used to be do-or-die moments for movie makers. They were where...
                                        </span>
                        </a>
                      </li>
                      <li>
                        <a>
                          <span class="image">
                                            <img src="images/img.jpg" alt="Profile Image" />
                                        </span>
                          <span>
                                            <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                                            Film festivals used to be do-or-die moments for movie makers. They were where...
                                        </span>
                        </a>
                      </li>
                      <li>
                        <div class="text-center">
                          <a href="inbox.html">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>

                </ul>
              </nav>
            </div>

          </div>
          <!-- /top navigation -->


          <!-- page content -->
          <div class="right_col" role="main">

            <!-- networkd activities Graph -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="dashboard_graph">

                    <div class="row x_title">
                      <div class="col-md-6">
                        <h3>Network Activities <small>Graph title sub-title</small></h3>
                      </div>
                      <div class="col-md-6">
                        <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                          <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                          <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>
                      <div style="width: 100%;">
                        <div id="canvas_dahs" class="demo-placeholder" style="width: 100%; height:270px;"></div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                      <div class="x_title">
                        <h2>Top Campaign Performance</h2>
                        <div class="clearfix"></div>
                      </div>

                      <div class="col-md-12 col-sm-12 col-xs-6">
                        <div>
                          <p>Facebook Campaign</p>
                          <div class="">
                            <div class="progress progress_sm" style="width: 76%;">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                            </div>
                          </div>
                        </div>
                        <div>
                          <p>Twitter Campaign</p>
                          <div class="">
                            <div class="progress progress_sm" style="width: 76%;">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-6">
                        <div>
                          <p>Conventional Media</p>
                          <div class="">
                            <div class="progress progress_sm" style="width: 76%;">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                            </div>
                          </div>
                        </div>
                        <div>
                          <p>Bill boards</p>
                          <div class="">
                            <div class="progress progress_sm" style="width: 76%;">
                              <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="clearfix"></div>
                  </div>
                </div>

            </div>
            <br />
            <!-- end of network Activities Graph -->
            <!-- Modal to add Records -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel" style="width: 80%; float: left;">Add Record</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float: right;">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                    <!-- form to add records -->
                      <div class="modal-body">
                        <p class="text-muted font-13 m-b-30">
                          Add Results of Students
                        </p>
                        <form id="recordForm">
                            <div class="form-group">
                              <div class="col-md-6" style="padding-left:0; padding-bottom:10px;">
                                <label >First Name</label>
                                <input type="text" class="form-control" aria-describedby="emailHelp" name="first_name" placeholder="Enter First Name" required>
                              </div>
                              <div class="col-md-6" style="padding-left:0; padding-bottom:10px;">
                                <label >Last Name</label>
                                <input type="text" class="form-control" aria-describedby="emailHelp" name="last_name" placeholder="Enter Last Name">
                              </div>
                            </div>
                            <div class="form-group">
                              <label >Matricule</label>
                              <input id="mat_input" type="text" class="form-control" style="text-transform:uppercase" aria-describedby="emailHelp" name="matricule" placeholder="Enter Matricule" required>
                            </div>
                            <fieldset class="form-group" name="gender">
                              <legend>Genders</legend>
                              <div class="form-check col-md-4">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="gender_radio" id="optionsRadios1" value="Male" checked>
                                  Male
                                </label>
                              </div>
                              <div class="form-check col-md-4">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="gender_radio" id="optionsRadios2" value="Female">
                                  Female
                                </label>
                              </div>
                              <div class="form-check col-md-4 disabled">
                              <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="gender_radio" id="optionsRadios3" value="Other" disabled>
                                  Other
                                </label>
                              </div>
                            </fieldset>
                            <div class="form-group">
                              <label for="exampleSelect1">Level</label>
                              <select class="form-control" id="exampleSelect1" name="level">
                                <option>100</option>
                                <option>200</option>
                                <option>300</option>
                                <option>400</option>
                                <option>500</option>
                              </select>
                            </div>
                            <!-- the list of courses will have to be generated automatically from the level & faculty -->
                            <div class="form-group">
                              <label >Course</label>
                              <input id="mat_input" type="text" class="form-control" style="text-transform:uppercase" aria-describedby="emailHelp" name="course" placeholder="Enter Course" required>
                            </div>
                            <div class="form-group">
                              <div class="col-md-6" style="padding-left:0; padding-bottom:10px;">
                                <label for="inputEmail4">CA Results</label>
                                <input type="number" class="form-control" id="inputEmail4"  name="ca_result" placeholder="CA Results">
                              </div>
                              <div class="col-md-6" style="padding-left:0; padding-bottom:10px;">
                                  <label for="inputPassword4">Exam Results</label>
                                  <input type="number" class="form-control" id="inputPassword4" name="exam_result" placeholder="Exam Results">
                                </div>
                            </div>
                            <br/><br/><br/>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary" >Add Record</button>
                            </div>
                          </form>
                      </div>
                    <!-- /form to add records -->
                </div>
              </div>
            </div>
            <!-- Modal to add Records -->
            <div class="clearfix"></div>

              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="course_filters">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      Add Course
                    </button>
                     <div class="row">
                      <h4>Filter by</h4>
                      <div class="col-md-8">
                        <!-- department -->
                        <div class="col-md-12">
                          <label for="exampleSelect1">Department</label>
                          <select class="form-control" id="dept_filter" onchange="filter()" name="level">
                            <option value="">Show All Departments</option> 
                            <option value="CEF">Computer Engineering</option>
                            <option value="EEF">Electrical Engineering</option>
                          </select>
                        </div>
                        <!-- level -->
                        <div class="col-md-12">
                          <label for="exampleSelect1">Level</label>
                          <select class="form-control" id="level_filter" onchange="filter()" name="level">
                            <option value="">Show All Levels</option>
                            <option value="100">100</option>
                            <option value="200">200</option>
                            <option value="300">300</option>
                            <option value="400">400</option>
                            <option value="500">500</option>
                          </select>
                        </div>
                        <!-- level -->
                        <div class="col-md-12">
                          <label for="exampleSelect1">Products</label>
                         <select class="form-control" name="brand" id="semester_filter">  
                              <option value="">Show All Semester</option>  
                              <option value="1">1st Semester</option> 
                              <option value="2">2nd Semester</option> 
                         </select>  
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>

                  </div>
                  <div class="course_list">
                    <h4>Course List</h4>
                    <div class="container">
                       <div class="row" id="show_product">  
                            <?php echo fill_product($connect);?>  
                       </div>  
                    </div>
                  </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h2>Responsive example <small>Users</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                              <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                              </li>
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">Settings 1</a>
                                  </li>
                                  <li><a href="#">Settings 2</a>
                                  </li>
                                </ul>
                              </li>
                              <li><a href="#"><i class="fa fa-close"></i></a>
                              </li>
                            </ul>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                           
                            <br />
                            <p class="text-muted font-13 m-b-30">
                            </p>
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            </table>

                          </div>
                        </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /page content -->
        </div>

      </div>

      <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
      </div>
        <script src="js/bootstrap.min.js"></script>

        <!-- bootstrap progress js -->
        <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="js/icheck/icheck.min.js"></script>

        <script src="js/sweetalert.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/custom2.js"></script>
        <script src="js/jquery.form.js"></script>


        <!-- Datatables -->
        <!-- <script src="js/datatables/js/jquery.dataTables.js"></script>
  <script src="js/datatables/tools/js/dataTables.tableTools.js"></script> -->

        <!-- Datatables-->
        <script src="js/datatables/jquery.dataTables.min.js"></script>
        <script src="js/datatables/dataTables.bootstrap.js"></script>
        <script src="js/datatables/dataTables.buttons.min.js"></script>
        <script src="js/datatables/buttons.bootstrap.min.js"></script>
        <script src="js/datatables/jszip.min.js"></script>
        <script src="js/datatables/pdfmake.min.js"></script>
        <script src="js/datatables/vfs_fonts.js"></script>
        <script src="js/datatables/buttons.html5.min.js"></script>
        <script src="js/datatables/buttons.print.min.js"></script>
        <script src="js/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="js/datatables/dataTables.keyTable.min.js"></script>
        <script src="js/datatables/dataTables.responsive.min.js"></script>
        <script src="js/datatables/responsive.bootstrap.min.js"></script>
        <script src="js/datatables/dataTables.scroller.min.js"></script>


        <!-- pace -->
        <script src="js/pace/pace.min.js"></script>
        <script>
          var table = $("#datatable-responsive").DataTable({
                "bProcessing": true,
                "sAjaxSource": "getRecord.php",
                "aoColumns": [
                  { "title": "Name", mData: 'first_name' } ,
                  { "title": "Matricule", mData: 'matricule' } ,
                  { "title": "Status", mData: 'status' } ,
                  { "title": "Course Code", mData: 'c_code' }, 
                  { "title": "Credit Value", mData: 'cv' }, 
                  { "title": "Continous Assesment", mData: 'ca' }, 
                  { "title": "Exam", mData: 'exam' }, 
                  { "title": "Grade", mData: 'grades' } 
                ],
                dom: "Bfrtip",
                buttons: [{
                  extend: "copy",
                  className: "btn-sm"
                }, {
                  extend: "csv",
                  className: "btn-sm"
                }, {
                  extend: "excel",
                  className: "btn-sm"
                }, {
                  extend: "pdf",
                  className: "btn-sm"
                }, {
                  extend: "print",
                  className: "btn-sm"
                }],
                responsive: !0
              })
        </script>
        <script>  
         $(document).ready(function(){  
            $('#semester_filter,#level_filter,#dept_filter').change(function(){  
               var the_semester = $('#semester_filter').val();
               var the_level = $('#level_filter').val();
               var the_dept = $('#dept_filter').val();
              // alert(the_semester + the_dept + the_level);
               $.ajax({  
                    url:"getCourseList.php",  
                    method:"POST",  
                    data:{the_semester:the_semester, the_level:the_level, the_dept:the_dept},  
                    success:function(data){  
                         $('#show_product').html(data);  
                    }  
               });  
            });  
         });  
        </script>  
        <script type="text/javascript">
          $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
              keys: true
            });

            $('#datatable-scroller').DataTable({
              ajax: "js/datatables/json/scroller-demo.json",
              deferRender: true,
              scrollY: 380,
              scrollCollapse: true,
              scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>
        <!-- /dashbord linegraph -->
        <!-- <script src="js/bootstrap.min.js"></script> -->


        <!-- gauge js -->
        <script type="text/javascript" src="js/gauge/gauge.min.js"></script>
        <script type="text/javascript" src="js/gauge/gauge_demo.js"></script>
        <!-- bootstrap progress js -->
        <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="js/icheck/icheck.min.js"></script>
        <!-- daterangepicker -->
        <script type="text/javascript" src="js/moment/moment.min.js"></script>
        <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>
        <!-- chart js -->
        <script src="js/chartjs/chart.min.js"></script>

        <script src="js/custom.js"></script>

        <!-- flot js -->
        <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
        <script type="text/javascript" src="js/flot/jquery.flot.js"></script>
        <script type="text/javascript" src="js/flot/jquery.flot.pie.js"></script>
        <script type="text/javascript" src="js/flot/jquery.flot.orderBars.js"></script>
        <script type="text/javascript" src="js/flot/jquery.flot.time.min.js"></script>
        <script type="text/javascript" src="js/flot/date.js"></script>
        <script type="text/javascript" src="js/flot/jquery.flot.spline.js"></script>
        <script type="text/javascript" src="js/flot/jquery.flot.stack.js"></script>
        <script type="text/javascript" src="js/flot/curvedLines.js"></script>
        <script type="text/javascript" src="js/flot/jquery.flot.resize.js"></script>
        <script>
          $(document).ready(function() {
            // [17, 74, 6, 39, 20, 85, 7]
            //[82, 23, 66, 9, 99, 6, 2]
            var data1 = [
              [gd(2012, 1, 1), 17],
              [gd(2012, 1, 2), 74],
              [gd(2012, 1, 3), 6],
              [gd(2012, 1, 4), 39],
              [gd(2012, 1, 5), 20],
              [gd(2012, 1, 6), 85],
              [gd(2012, 1, 7), 7]
            ];

            var data2 = [
              [gd(2012, 1, 1), 82],
              [gd(2012, 1, 2), 23],
              [gd(2012, 1, 3), 66],
              [gd(2012, 1, 4), 9],
              [gd(2012, 1, 5), 119],
              [gd(2012, 1, 6), 6],
              [gd(2012, 1, 7), 9]
            ];
            $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
              data1, data2
            ], {
              series: {
                lines: {
                  show: false,
                  fill: true
                },
                splines: {
                  show: true,
                  tension: 0.4,
                  lineWidth: 1,
                  fill: 0.4
                },
                points: {
                  radius: 0,
                  show: true
                },
                shadowSize: 2
              },
              grid: {
                verticalLines: true,
                hoverable: true,
                clickable: true,
                tickColor: "#d5d5d5",
                borderWidth: 1,
                color: '#fff'
              },
              colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
              xaxis: {
                tickColor: "rgba(51, 51, 51, 0.06)",
                mode: "time",
                tickSize: [1, "day"],
                //tickLength: 10,
                axisLabel: "Date",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: 'Verdana, Arial',
                axisLabelPadding: 10
                  //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
              },
              yaxis: {
                ticks: 8,
                tickColor: "rgba(51, 51, 51, 0.06)",
              },
              tooltip: false
            });

            function gd(year, month, day) {
              return new Date(year, month - 1, day).getTime();
            }
          });
        </script>

        <!-- worldmap -->
        <script type="text/javascript" src="js/maps/jquery-jvectormap-2.0.3.min.js"></script>
        <script type="text/javascript" src="js/maps/gdp-data.js"></script>
        <script type="text/javascript" src="js/maps/jquery-jvectormap-world-mill-en.js"></script>
        <script type="text/javascript" src="js/maps/jquery-jvectormap-us-aea-en.js"></script>
        <!-- pace -->
        <script src="js/pace/pace.min.js"></script>
        <script>
          $(function() {
            $('#world-map-gdp').vectorMap({
              map: 'world_mill_en',
              backgroundColor: 'transparent',
              zoomOnScroll: false,
              series: {
                regions: [{
                  values: gdpData,
                  scale: ['#E6F2F0', '#149B7E'],
                  normalizeFunction: 'polynomial'
                }]
              },
              onRegionTipShow: function(e, el, code) {
                el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
              }
            });
          });
        </script>
        <!-- skycons -->
        <script src="js/skycons/skycons.min.js"></script>
        <script>
          var icons = new Skycons({
              "color": "#73879C"
            }),
            list = [
              "clear-day", "clear-night", "partly-cloudy-day",
              "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
              "fog"
            ],
            i;

          for (i = list.length; i--;)
            icons.set(list[i], list[i]);

          icons.play();
        </script>

        <!-- dashbord linegraph -->
        <script>
          Chart.defaults.global.legend = {
            enabled: false
          };

          var data = {
            labels: [
              "Symbian",
              "Blackberry",
              "Other",
              "Android",
              "IOS"
            ],
            datasets: [{
              data: [15, 20, 30, 10, 30],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#455C73",
                "#26B99A",
                "#3498DB"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#34495E",
                "#36CAAB",
                "#49A9EA"
              ]

            }]
          };

          var canvasDoughnut = new Chart(document.getElementById("canvas1"), {
            type: 'doughnut',
            tooltipFillColor: "rgba(51, 51, 51, 0.55)",
            data: data
          });
        </script>
        <!-- /dashbord linegraph -->
        <!-- datepicker -->
        <script type="text/javascript">
          $(document).ready(function() {

            var cb = function(start, end, label) {
              console.log(start.toISOString(), end.toISOString(), label);
              $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
              //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
            }

            var optionSet1 = {
              startDate: moment().subtract(29, 'days'),
              endDate: moment(),
              minDate: '01/01/2012',
              maxDate: '12/31/2015',
              dateLimit: {
                days: 60
              },
              showDropdowns: true,
              showWeekNumbers: true,
              timePicker: false,
              timePickerIncrement: 1,
              timePicker12Hour: true,
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              opens: 'left',
              buttonClasses: ['btn btn-default'],
              applyClass: 'btn-small btn-primary',
              cancelClass: 'btn-small',
              format: 'MM/DD/YYYY',
              separator: ' to ',
              locale: {
                applyLabel: 'Submit',
                cancelLabel: 'Clear',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                firstDay: 1
              }
            };
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange').daterangepicker(optionSet1, cb);
            $('#reportrange').on('show.daterangepicker', function() {
              console.log("show event fired");
            });
            $('#reportrange').on('hide.daterangepicker', function() {
              console.log("hide event fired");
            });
            $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
              console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
            });
            $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
              console.log("cancel event fired");
            });
            $('#options1').click(function() {
              $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
            });
            $('#options2').click(function() {
              $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
            });
            $('#destroy').click(function() {
              $('#reportrange').data('daterangepicker').remove();
            });
          });
        </script>
        <!-- /footer content -->

</body>

</html>
