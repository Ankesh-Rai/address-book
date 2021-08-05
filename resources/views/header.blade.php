<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/dashboard.css" rel="stylesheet">
    <link rel="icon" href="Favicon.png">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.0/moment.min.js  "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Address Book</title>
</head>

<body style="background-color:#0000000d;">
    <div class="container-fluid">
        <div class="row bg-info">
            <div class="col-12 col-sm-4 col-md-4 col-lg-2 col-xl-2 text-white text-center p-2" id="header">
                <h5 class="p-0">Address Book</h5>
            </div>
            <div class="col-12 col-sm-8 col-md-8 col-lg-10 col-xl-10 text-center text-sm-right">
                <i class="fa fa-user-circle" style="font-size:40px;" aria-hidden="true"></i>
            </div>
        </div>

    </div>
    <div class="container-fluid" id="navigation">
        <div class="row">
            <div class="col-4 col-sm-4 col-md-4 col-lg-2 col-xl-2 p-0" id="menu" class="">
                <nav class="navbar flex-column navbar-light p-0" id="navbar">
                    <div class="p-2 text-center" style="width:100%;">
                        <a href="#" class="navbar-brand text-white">
                            <i class="fa fa-user-circle"></i>
                            <span>Admin</span>
                        </a>
                    </div>
                    <ul class="navbar-nav">
                        <li class="navigation p-2">MAIN NAVIGATION</li>
                        <li class="nav-item">
                            <a href="/address-book/public/dashboard" class="nav-link">
                                <i class="fa fa-user"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/address-book/public/userform" class="nav-link">
                                <i class="fa fa-user-plus"></i>
                                <span>Add Address</span>
                            </a>
                        </li>
                         <!-- <li class="nav-item">
                            <a href="bulk_form" class="nav-link">
                                <i class="fa fa-users"></i>
                                <span>Bulk Upoad<span>
                            </a>
                        </li>  -->
                        <li class="nav-item">
                            <a href="/address-book/public" class="nav-link">
                                <i class="fa fa-power-off"></i>
                                <span>LogOut</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            @yield('dashboard')
            @yield('userform')
            @yield('edit')
            @yield('bulkupload')
        </div>
    </div>
</body>

</html>