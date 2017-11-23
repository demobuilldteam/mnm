<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Admin Shop</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" href="css/button.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <?php 
        session_start();
        include ("../../connect.php");
        $_SESSION['noti-err-ml'] = NULL;
        if(isset($_POST['submit'])){
            $matheloai = $_POST['matheloai'];
            $tentheloai = $_POST['tentheloai'];
            
            $qr = "update loai set tenloai='{$tentheloai}' where maloai='{$matheloai}'";
            if(mysqli_query($conn,$qr)){
                $_SESSION['noti-err-ml']= "You updated successful";
                header("location:table-loai.php"); 
            }else{
                $_SESSION['noti-err-ml'] = "Updated not success!!";
                header("location:edit-theloai.php"); 
            }   
        }

    ?>
</head>

<body class="fix-header card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /></svg>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                            <!-- dark Logo text -->
                            <h4>SHOP MOTORCYCLES</h4>
                        </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item hidden-sm-down">
                            <form class="app-search p-l-20">
                                <input type="text" class="form-control" placeholder="Search for..."> <a class="srh-btn"><i class="ti-search"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <?php 
                            if(isset($_SESSION['fullname'])){
                        ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../images/user.jpg" alt="user" class="profile-pic m-r-5" /><?php echo $_SESSION['fullname'];?></a>
                        </li>
                        <?php 
                            } 
                        ?>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        
                        <li>
                            <a href="pages-profile.php" class="waves-effect"><i class="fa fa-user m-r-10" aria-hidden="true"></i>Profile</a>
                        </li>
                        <li>
                            <a href="table-loai.php" class="waves-effect"><i class="fa fa-table m-r-10" aria-hidden="true"></i>Loại sản phẩm</a>
                        </li>
                         <li>
                            <a href="table-user.php" class="waves-effect"><i class="fa fa-table m-r-10" aria-hidden="true"></i>User</a>
                        </li>
                        <li>
                            <a href="pages-blank.html" class="waves-effect"><i class="fa fa-columns m-r-10" aria-hidden="true"></i>Blank Page</a>
                        </li>
                        <li>
                            <a href="pages-error-404.html" class="waves-effect"><i class="fa fa-info-circle m-r-10" aria-hidden="true"></i>Error 404</a>
                        </li>
                    </ul>
                    <div class="text-center m-t-30">
                        <a href="https://wrappixel.com/templates/monsteradmin/" class="btn btn-danger"> Upgrade to Pro</a>
                    </div>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Cập nhật thể loại</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Cập nhật thể loại</li>
                        </ol>
                    </div>
                    
                </div>
                
                <div class="row">
                    <!-- Column -->
                    
                    
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7" style="margin: 0px auto;">
                        <div class="card">
                            <div class="card-block">
                                <?php if(isset($_SESSION['noti-err-ml']) && !is_null($_SESSION['noti-err-ml'])){
                                 ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="alert alert-warning">
                                           <?php 
                                           $err = $_SESSION['noti-err-ml'];
                                           echo $err; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <form class="form-horizontal form-material" method="POST" action="edit-theloai.php" >
                                    <?php 
                                        if(isset($_GET['maloai'])){
                                           $maloai = $_GET['maloai'];
                                           $qr = "select * from loai where maloai='$maloai' ";
                                           $rs = mysqli_query($conn,$qr);
                                           while($row = mysqli_fetch_array($rs)){

                                    ?>
                                    <div class="form-group">
                                        <label class="col-md-12">Mã thể loại</label>
                                        <div class="col-md-12">
                                            <input type="text" name="matheloai" value="<?php echo $row['maloai']; ?>" readonly class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Tên thể loại</label>
                                        <div class="col-md-12">
                                            <input type="text" name="tentheloai" value="<?php echo $row['tenloai']; ?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <?php }
                                        }
                                    ?>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" name="submit" value="capnhat" class="btn btn-success">Cập nhật</button>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                   
                    <!-- Column -->
                </div>
            </div>
            <footer class="footer text-center">
                <p>Copyright&copy; Frteam | MNM | 2017</p>
            </footer>
        </div>
    </div>
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>