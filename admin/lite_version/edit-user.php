<?php ob_start() ; ?>
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
</head>

<body class="fix-header card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
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
                            <a href="pages-profile.php" class="waves-effect"><i class="fa fa-user m-r-10" aria-hidden="true"></i>Thông tin cá nhân</a>
                        </li>
                        <li>
                            <a href="table-loai.php" class="waves-effect"><i class="fa fa-tasks m-r-10" aria-hidden="true"></i></i>Loại sản phẩm</a>
                        </li>
                        <li>
                            <a href="table-user.php" class="waves-effect"><i class="fa fa-address-card m-r-10" aria-hidden="true"></i>Người dùng</a>
                        </li>
                        <li>
                            <a href="table-product.php" class="waves-effect"><i class="fa fa-product-hunt m-r-10" aria-hidden="true"></i>Sản phẩm</a>
                        </li>
                        <li>
                            <a href="table-hoadon.php" class="waves-effect"><i class="fa fa-list-alt m-r-10" aria-hidden="true"></i>Hóa đơn</a>
                        </li>
                        <li>
                            <a href="table-feedback.php" class="waves-effect"><i class="fa fa-paper-plane m-r-10" aria-hidden="true"></i>Tương tác</a>
                        </li>

                    </ul>
                    <div class="text-center m-t-30">
                        <a href="pages-profile.php" class="btn btn-danger">Cập nhật thông tin cá nhân</a>
                    </div>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Thông tin cá nhân</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Thông tin cá nhân</li>
                        </ol>
                    </div>

                </div>
                <?php

                    if(isset($_POST['submit'])){
                        include '../../connect.php';
                        $fullname = $_POST['fullname'];
                        $address = $_POST['address'];
                        $company = $_POST['company'];
                        $email_address = $_POST['email_address'];
                        // $password = $_POST['password'];
                        $rule = $_POST['rule'];
                        $email_old = $_POST['email_old'];

                        $filename = $_FILES['hinhanh']['name'];
                        // if(empty($_FILES) || !isset($_FILES['hinhanh'])){
                        $file_tmp = $_FILES['hinhanh']['tmp_name'];
                        move_uploaded_file($file_tmp,'../../images/'.$filename);
                        if($filename == ""){
                            $qrup = "update User set fullname='$fullname',address='$address',company='$company',email_address='$email_address',rule='$rule' where email_address='$email_old'";
                        }else{
                            $qrup = "update User set fullname='$fullname',address='$address',company='$company',email_address='$email_address',image='$filename',rule='$rule' where email_address='$email_old'";
                        }

                        if(mysqli_query($conn,$qrup)){
                            $_SESSION['noti-update']= "You updated successful";
                            header("location:table-user.php");
                        }else{
                            echo mysqli_errors($conn);
                        }

                    }
                ?>
                <div class="row">
                    <!-- Column -->
                    <?php

                        include ("../../connect.php");
                        if(isset($_GET['email_address'])){
                            $email = $_GET['email_address'];

                            $qr = "select * from User where email_address='$email'";

                            $result = mysqli_query($conn,$qr);

                            if(mysqli_num_rows($result)>0){
                                while($row = mysqli_fetch_array($result)){

                    ?>
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-block">
                                <center class="m-t-30">
                                    <?php if($row['image']=="") {?>
                                        <img src="../../images/user.jpg" class="img-circle" width="150" />
                                    <?php }else{ ?>
                                        <img src="../../images/<?php echo $row['image']; ?>" class="img-circle" width="150" />
                                    <?php } ?>
                                    <h4 class="card-title m-t-10">User</h4>
                                    <h6 class="card-subtitle">Account contact with pages</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" method="POST" action="edit-user.php" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label class="col-md-12">Họ và tên</label>
                                        <div class="col-md-12">
                                            <input type="text" name="fullname" value="<?php echo $row['fullname']; ?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Ảnh đại diện</label>
                                        <div class="col-md-12">
                                            <input type="file" name="hinhanh" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Quê quán</label>
                                        <div class="col-md-12">
                                            <input type="text" name="address" value="<?php echo $row['address']; ?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Công ty</label>
                                        <div class="col-md-12">
                                            <input type="text" name="company" value="<?php echo $row['company']; ?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email"  value="<?php echo $row['email_address']; ?>" class="form-control form-control-line" name="email_address" id="email_address">
                                            <input type="hidden"  value="<?php echo $row['email_address']; ?>" class="form-control form-control-line" name="email_old" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Mật khẩu</label>
                                        <div class="col-md-12">
                                            <input type="password"  value="<?php echo $row['password']; ?>" class="form-control form-control-line" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Quyền</label>
                                        <div class="col-md-12">
                                            <input type="text" name="rule"  value="<?php echo $row['rule']; ?>" class="form-control form-control-line" >
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" name="submit" value="capnhat" class="btn btn-success">Cập nhật</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                                }
                            }
                        }
                    ?>
                    <!-- Column -->
                </div>
            </div>
            <footer class="footer text-center">
                <p>&copy;Copyright Frteam | MNM | 2017</p>
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
<?php ob_flush()  ; ?>
