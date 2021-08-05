<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
        <link rel="icon" href="Favicon.png">
        <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.0/moment.min.js  "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
        <title>Employee Management System</title>
    </head>
    <body style="background-color:#0000000d;">
        <div class="container-fluid">
            <div class="row bg-info">
                <div class="col-12 col-sm-4 col-md-4 col-lg-2 col-xl-2 text-white text-center p-2" id="header">
                    <h5 class="p-0">ViewOne</h5>
                </div>
                <div class="col-4 col-sm-2 col-md-2 col-lg-1 col-xl-1 pt-1 text-white" id="user-id">
                    <h5><i class="fa fa-navicon p-2"></i></h5>
                </div>
                <div class="col-4 col-sm-3 col-md-3 col-lg-4 col-xl-7 pt-2 text-white" id="clock">
                    <button class="btn btn-danger btn-sm">Clock Out</button>
                </div>
                <div class="col-4 col-sm-3 col-md-3 col-lg-3 col-xl-2 d-flex align-items-center text-sm-center text-white pt-1" id="user-id">
                    <div class="" id="user-info">
                        <h5><i class="fa fa-user-circle-o p-2"></i> <span class="">User</span></h5>
                    </div>
                    <div class="dropdown-menu animation zoomIn pull-right  p-0 m-0" id="mini-profile">
                        <div class="mini-header">
                            <h1><i class="fa fa-user-circle-o text-center text-white pt-2" style="width:100%; font-size:85px;"></i></h1>
                            <p class="text-center text-white" style="font-size:20px;">Janhavi mishra</p>
                        </div>
                        <div class="mini-footer p-2">
                            <button class="btn btn-outline-info btn-sm float-left">Update Profile</button>
                            <button class="btn btn-outline-danger btn-sm float-right">LogOut</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="navigation">
            <div class="row">  
                <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 p-0" id="menu">
                    <nav class="navbar flex-column navbar-light p-0" id="navbar">
                        <div class="p-2 text-center" style="width:100%;">
                            <a href="#" class="navbar-brand text-white">
                                <i class="fa fa-user-circle"></i>
                                <span>User</span>
                            </a>
                        </div>
                        <ul class="navbar-nav">
                            <li class="navigation p-2">MAIN NAVIGATION</li>
                            <li class="nav-item">
                                <a href="dashboard" class="nav-link">
                                    <i class="fa fa-tachometer"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="department" class="nav-link">
                                    <i class="fa fa-user-secret"></i>
                                    <span>Department</span>
                                </a>
                            </li> -->
                            <!-- <li class="nav-item">
                                <a href="designation" class="nav-link">
                                    <i class="fa fa-user-circle-o"></i>
                                    <span>Designation</span>
                                </a>
                            </li> -->
                            <!-- <li class="nav-item">
                                <a href="calender" class="nav-link">
                                    <i class="fa fa-calendar"></i>
                                    <span>Calendar<span>
                                </a>
                            </li> -->
                            <!-- <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="fa fa-plane"></i>
                                    <span>Leave Management</span>
                                </a>
                            </li> -->
                            <!-- <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="fa fa-align-center"></i> 
                                   <span>Payroll</span> 
                                </a> 
                            </li> -->
                            <li class="nav-item">
                                    <a href="usermanager" class="nav-link">
                                    <i class="fa fa-users"></i>  
                                    <span>User Manager</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="fa fa-line-chart"></i>  
                                    <span>Attendence    <span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="fa fa-cogs"></i>  
                                    <span>Holiday</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                @yield('dashboard')
                @yield('calander')
                @yield('usermanager')
            </div>
        </div>
    </body>
</html>         
<script>
    $(document).ready(function(){
        $("#user-id").click(function(){
            $("#menu").toggle('slow',function(){
            });
        });  
        $("#user-info").click(function(){
            $("#mini-profile").toggle();
        });
    });
</script>