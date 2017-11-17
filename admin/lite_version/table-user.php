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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
   
</head>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php 
            session_start(); 
            include ("left-sidebar.php"); ?>
        <div class="page-wrapper">
          
            <div class="container-fluid">
               
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Table</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">User</li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <a href="https://wrappixel.com/templates/monsteradmin/" class="btn pull-right hidden-sm-down btn-success"> Upgrade to Pro</a>
                    </div>
                </div>
                <?php
                if(isset($_SESSION['noti-update'])) {
                ?>
                <div class="alert alert-success">
                   <?php echo $_SESSION['noti-update']; ?>
                </div>
                <?php session_destroy();} ?>
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">User</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Họ và tên</th>
                                                <th>Quê quán</th>
                                                <th>Công ty</th>
                                                <th>Email</th>
                                                <th>Mật khẩu</th>
                                                <th>Quyền</th>
                                                <th>Ảnh</th>
                                                <th colspan="2"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include ("../../connect.php");

                                                $qr = "select * from User";

                                                $result = mysqli_query($conn,$qr);
                                                $i = 1;
                                                while($row = mysqli_fetch_array($result)){
                                            ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row['fullname']; ?></td>
                                                <td><?php echo $row['address']; ?></td>
                                                <td><?php echo $row['company']; ?></td>
                                                <td><?php echo $row['email_address']; ?></td>
                                                <td><?php echo $row['password']; ?></td>
                                                <td><?php echo $row['rule']; ?></td>
                                                <td><img src="../../images/<?php echo $row['image']; ?>" alt="" width="150" height="160"></td>
                                                <td><a href="edit-user.php?email_address=<?php echo $row['email_address']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                                <td><a href="delete-user.php?email_address=<?php echo $row['email_address']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <?php
                                                $i += 1;}
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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
