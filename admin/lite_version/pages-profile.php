<?php ob_start() ; ?>
<?php session_start(); ?>
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
        <?php include ("left-sidebar.php"); ?>
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
              
                <div class="row">
                    <?php if(isset($_SESSION['noti-update']) && !is_null($_SESSION['noti-update'])){ ?>
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            <?php $mes = $_SESSION['noti-update'];echo $mes; ?>
                        </div>
                    </div>
                    <?php $_SESSION['noti-update']= NULL;}  ?>
                </div>
                
                <div class="row">
                    <!-- Column -->
                    <?php 
                        include ("../../connect.php");
                        if(isset($_SESSION['rule'])){
                            $email = $_SESSION['email_address'];
                            $password = $_SESSION['password'];

                            $qr = "select * from User where email_address='$email' and password='$password'";

                            $result = mysqli_query($conn,$qr);

                            if(mysqli_num_rows($result)>0){
                                while($row = mysqli_fetch_array($result)){

                    ?>
                    <!-- messages -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-block">
                                <center class="m-t-30"> 
                                    <?php if($row['image']=="") {?>
                                        <img src="../../images/user.jpg" class="img-circle" width="150" />
                                    <?php }else{ ?>
                                        <img src="../../images/<?php echo $row['image']; ?>" class="img-circle" width="150" />
                                    <?php } ?>
                                    <h4 class="card-title m-t-10">Admin</h4>
                                    <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
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
                                <form class="form-horizontal form-material" action="pages-profile.php" method="post">
                                    <div class="form-group">
                                        <label class="col-md-12">Họ và tên</label>
                                        <div class="col-md-12">
                                            <input type="text" name="fullname"  value="<?php echo $row['fullname']; ?>" class="form-control form-control-line">
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
                                            <input type="email" name="email" value="<?php echo $row['email_address']; ?>" class="form-control form-control-line" name="example-email" id="example-email">
                                            <input type="hidden"  value="<?php echo $email; ?>" class="form-control form-control-line" name="email_old" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Mật khẩu</label>
                                        <div class="col-md-12">
                                            <input type="password" name="password" value="<?php echo $row['password']; ?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Hinh anh</label>
                                        <div class="col-md-12">
                                            <input type="file" name="hinhanh"  class="form-control form-control-line"><?php echo $row['image']; ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" name="update" class="btn btn-success">Update thông tin cá nhân</button>
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
                    <?php 
                    
                    if(isset($_POST['update'])){
                        $fullname = $_POST['fullname'];
                        $address = $_POST['address'];
                        $company = $_POST['company'];
                        $email_address = $_POST['email'];
                        $password = $_POST['password'];
                        // $rule = $_POST['rule'];
                        $email_old = $_POST['email_old'];

                        $filename = $_FILES['hinhanh']['name'];
                        // if(empty($_FILES) || !isset($_FILES['hinhanh'])){
                        $file_tmp = $_FILES['hinhanh']['tmp_name'];
                        move_uploaded_file($file_tmp,'../../images/'.$filename);
                        if($filename == ""){
                            $qrup = "update User set fullname='$fullname',address='$address',company='$company',email_address='$email_address',password='$password' where email_address='$email_old'";
                            // echo $qrup;
                        }else{
                            $qrup = "update User set fullname='$fullname',address='$address',company='$company',email_address='$email_address',image='$filename',password='$password' where email_address='$email_old'";
                        }
                        
                        if(mysqli_query($conn,$qrup)){
                            $_SESSION['noti-update']= "You updated successful";
                            $_SESSION['password']= NULL;
                            $_SESSION['password'] = $password;
                            header("location:pages-profile.php");
                        }else{
                            echo mysqli_errors($conn);
                        }
                    }
                    ?>
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
<?php ob_flush()  ; ?>