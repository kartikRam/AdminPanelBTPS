<?php
    if(!isset($_SESSION['name'])){
        return view('auth-signin');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Institute</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <style type="text/css">
        ::-webkit-input-placeholder { 
             color: blue;
             font-style: bold;
             font-family: calibri,cambria;
             font-size: 15px;
         }
    </style>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
               <a href="index.html" class="b-brand">
                   <div class="b-bg">
                       <i class="fas fa-bus-alt"></i>
                   </div>
                   <span class="b-title">BTPS</span>
               </a>
               <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
           </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Options</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="index" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>

                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="ManageDepoManager" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user-check"></i></span><span class="pcoded-mtext">Manage Depo-Manager</span></a>
                    </li>

                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="ManageInstitute" class="nav-link "><span class="pcoded-micon"><i class="feather icon-award"></i></span><span class="pcoded-mtext">Manage Institute</span></a>
                    </li>
</ul>
                    <!-- 
                    <li class="nav-item pcoded-menu-caption">
                        <label>UI Element</label>
                    </li> --><!-- 
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Componant</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="bc_button.html" class="">Button</a></li>
                            <li class=""><a href="bc_badges.html" class="">Badges</a></li>
                            <li class=""><a href="bc_breadcrumb-pagination.html" class="">Breadcrumb & paggination</a></li>
                            <li class=""><a href="bc_collapse.html" class="">Collapse</a></li>
                            <li class=""><a href="bc_tabs.html" class="">Tabs & pills</a></li>
                            <li class=""><a href="bc_typography.html" class="">Typography</a></li>
                            <li class=""><a href="icon-feather.html" class="">Feather<span class="pcoded-badge label label-danger">NEW</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Forms & table</label>
                    </li>
                    <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item active">
                        <a href="form_elements.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Form elements</span></a>
                    </li>
                    <li data-username="Table bootstrap datatable footable" class="nav-item">
                        <a href="tbl_bootstrap.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-server"></i></span><span class="pcoded-mtext">Table</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Chart & Maps</label>
                    </li>
                    <li data-username="Charts Morris" class="nav-item"><a href="chart-morris.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a></li>
                    <li data-username="Maps Google" class="nav-item"><a href="map-google.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Maps</span></a></li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Pages</label>
                    </li>
                    <li data-username="Authentication Sign up Sign in reset password Change password Personal information profile settings map form subscribe" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="auth-signup.html" class="" target="_blank">Sign up</a></li>
                            <li class=""><a href="auth-signin.html" class="" target="_blank">Sign in</a></li>
                        </ul>
                    </li>
                    <li data-username="Sample Page" class="nav-item"><a href="sample-page.html" class="nav-link"><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li>
                    <li data-username="Disabled Menu" class="nav-item disabled"><a href="javascript:" class="nav-link"><span class="pcoded-micon"><i class="feather icon-power"></i></span><span class="pcoded-mtext">Disabled menu</span></a></li>
                 --></ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="index.html" class="b-brand">
                   <div class="b-bg">
                       <i class="feather icon-trending-up"></i>
                   </div>
                   <span class="b-title">BTPS</span>
               </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li><a href="javascript:" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>
                <li class="nav-item dropdown">
                </li>
                <li class="nav-item">
                    <div class="main-search">
                        <div class="input-group">
                            <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                            <a href="javascript:" class="input-group-append search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </a>
                            <span class="input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span><?php
                                    if(isset($_SESSION['name'])){
                                        echo $_SESSION['name'];
                                    }
                                ?></span>
                                <a href="logout" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="logout" class="dropdown-item"><i class="feather icon-lock"></i> 
                                 Logout!</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header><!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container" style="background-image: url('assets/images/editbackground.jpg');background-repeat: no-repeat;">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        </div><!-- 
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Form Componants</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Form Elements</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>




                    <?php
                        foreach ($sql as $sql1 ) {
                            # code...
                            $name=$sql1->institute_name;
                            $email=$sql1->institute_email;
                            $district=$sql1->institute_district;
                            $address=$sql1->institute_address;
                            $contact=$sql1->institute_contact_no;
                            $password=$sql1->institute_password;
                        }

                    ?>
                    <!-- [ breadcrumb ] end -->
                    <div style="transparent;opacity: 0.9;margin-left: 260px;margin-right: 260px;" class="main-body">
                        <div class="page-wrapper" >
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card" >
                                        <h5 style="margin-left:124px; font-size: 35px;font-style:bold; font-family: 'calibri';
                                            color:#007bff;" class="m-b-10">Edit Institute Form</h5>
                                        <div class="card-body">
                                            <hr>

                                            <div style="margin-left:10px ;margin-top:-10px;opacity: 0.9;color: #007bff;font-family: cambria;;font-style: bold;font-size: 17px;" >
                                        <!--         <div class="col-md-6">
                                         -->            <form method="POST" action="updateInstitute">

                                                        @csrf
                                                        <div >
                                                        
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Name</label>
                                                            <input name="name" style="background-color: #f2f2f2" type="text" class="form-control" size="55" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name"
                                                            value="<?php echo $name; ?>"
                                                            /><!-- 
                                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <input name="email" style="background-color: #f2f2f2" type="email" class="form-control" size="55" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"
                                                            value="<?php echo $email; ?>"
                                                            /><!-- 
                                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                        </div>


                                                        <div class="form-group">
                                                            <label>District</label>
                                                            <input name="district" style="background-color: #f2f2f2" type="text" class="form-control" placeholder="District"
                                                            value="<?php echo $district; ?>"
                                                            />
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Address</label>
                                                            <textarea name="address" style="background-color: #f2f2f2" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $address; ?></textarea>
                                                        </div>


                                                        <div class="form-group">
                                                            <label>Contact-No</label>
                                                            <input name="contact" style="background-color: #f2f2f2" type="number" class="form-control" placeholder="Contact-No"
                                                            value="<?php echo $contact; ?>"
                                                            />
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Password</label>
                                                            <input name="password" style="background-color: #f2f2f2" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                                                            value="<?php echo $password; ?>"
                                                            >
                                                        </div>
                                                         <div class="form-group form-check">
                                                            <input type="checkbox" style="margin-top: 9px;" onclick="myFunction()" class="form-check-input" id="exampleCheck1">
                                                            <label style="font-size: 12px;" class="form-check-label" for="exampleCheck1">Show Password</label>
                                                        </div>
                                                        

                                                                <script>
                                                                function myFunction() {
                                                                var x = document.getElementById("exampleInputPassword1");
                                                                  if (x.type === "password") {
                                                                    x.type = "text";
                                                                  } else {
                                                                    x.type = "password";
                                                                  }
                                                                }
                                                                </script>


                                                        </div>  
                                                        <button style="margin-left: 180px; background-color: #007bff;" type="submit" class="btn btn-info"  data-toggle="tooltip">Modify</button>
       
                                                    </form>
                                               <!-- 
                                                <div class="col-md-6">
                                                    <form>
                                                    </form>
                                                </div> -->
                                            </div><!-- 
                                            <h5 class="mt-5">Sizing</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input class="mb-3 form-control form-control-lg" type="text" placeholder=".form-control-lg">
                                                    <input class="mb-3 form-control" type="text" placeholder="Default input">
                                                    <input class="mb-3 form-control form-control-sm" type="text" placeholder=".form-control-sm">
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="mb-3 form-control form-control-lg">
                                                        <option>Large select</option>
                                                    </select>
                                                    <select class="mb-3 form-control">
                                                        <option>Default select</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h5 class="mt-5">Inline</h5>
                                            <hr>
                                            <form class="form-inline">
                                                <div class="form-group mb-2">
                                                    <label for="staticEmail2" class="sr-only">Email</label>
                                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
                                                </div>
                                                <div class="form-group mx-sm-3 mb-2">
                                                    <label for="inputPassword2" class="sr-only">Password</label>
                                                    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                                                </div>
                                                <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
                                            </form>
                                            <h3 class="mt-5">Checkboxes and Radios</h3>
                                            <h5 class="mt-3">Checkboxes</h5>
                                            <hr>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="mt-5">Radios</h5>
                                                    <hr>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                                                    </div>
                                                    <h5 class="mt-5">Inline</h5>
                                                    <hr>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadioInline1">Toggle this custom radio</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadioInline2">Or toggle this other custom radio</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="mt-5">Range</h5>
                                                    <hr>
                                                    <label for="customRange1">Example range</label>
                                                    <input type="range" class="custom-range" id="customRange1">
                                                    <label for="customRange2">Example range</label>
                                                    <input type="range" class="custom-range" min="0" max="5" id="customRange2">
                                                    <label for="customRange3">Example range</label>
                                                    <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     Input group
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Input Group</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">@</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                                                </div>
                                            </div>
                                            <label for="basic-url">Your vanity URL</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                                </div>
                                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                            <h5 class="mt-5">Sizing</h5>
                                            <hr>
                                            <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                            </div>
                                            <div class="input-group input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                            <h5 class="mt-5">Button Addons</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-primary" type="button">Button</button>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary" type="button">Button</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-primary" type="button">Button</button>
                                                            <button class="btn btn-secondary" type="button">Button</button>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-secondary" type="button">Button</button>
                                                            <button class="btn btn-primary" type="button">Button</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="mt-5">Buttons With Dropdowns</h5>
                                                    <hr>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#!">Action</a>
                                                                <a class="dropdown-item" href="#!">Another action</a>
                                                                <a class="dropdown-item" href="#!">Something else here</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#!">Separated link</a>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#!">Action</a>
                                                                <a class="dropdown-item" href="#!">Another action</a>
                                                                <a class="dropdown-item" href="#!">Something else here</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#!">Separated link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5 class="mt-5">Segmented Buttons</h5>
                                                    <hr>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-secondary">Action</button>
                                                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#!">Action</a>
                                                                <a class="dropdown-item" href="#!">Another action</a>
                                                                <a class="dropdown-item" href="#!">Something else here</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#!">Separated link</a>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-secondary">Action</button>
                                                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#!">Action</a>
                                                                <a class="dropdown-item" href="#!">Another action</a>
                                                                <a class="dropdown-item" href="#!">Something else here</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#!">Separated link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>  
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script src="assets/js/pcoded.min.js"></script>

</body>
</html>
