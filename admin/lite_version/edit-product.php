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
    <script>
        function Checknumber(obj){
            var num = obj.value;
            if(isNaN(num)){
                document.getElementById('errsl').innerHTML = "Ban phai nhap so!!";
                document.getElementById('errsl').style.color = "red";
            }else{
                document.getElementById('errsl').innerHTML = "";
            }
        }
        function Checknumberg(obj){
            var num = obj.value;
            if(isNaN(num)){
                document.getElementById('errgia').innerHTML = "Ban phai nhap so!!";
                document.getElementById('errgia').style.color = "red";
            }else{
                document.getElementById('errgia').innerHTML = "";
            }
        }
    </script>
    <?php 
        session_start();
        include ("../../connect.php");
        if(isset($_POST['submit'])){
            $id = $_POST['id'];
            $ten = $_POST['ten'];
            $mota = $_POST['mota'];
            $soluong = $_POST['soluong'];
            $gia = $_POST['gia'];
            $maloai = $_POST['maloai'];
            $thoigian = date('Y-m-d');
            $filename = $_FILES['hinhanh']['name'];
            $filetmp = $_FILES['hinhanh']['tmp_name'];
            move_uploaded_file($filetmp, "../../images/".$filename);

            if($filename == ""){
                $qr = "update product set ten='$ten', mota='$mota', soluong='$soluong', gia='$gia', maloai='$maloai', created='$thoigian' where id='$id'";
            }else{
                $qr = "update product set ten='$ten', mota='$mota', soluong='$soluong', gia='$gia', maloai='$maloai', created='$thoigian', image='$filename' where id='$id'";
            }
            if(mysqli_query($conn,$qr)){
                $_SESSION['noti-err-pr']= "You updated successful";
                header("location:table-product.php"); 
            }else{
                echo mysqli_error($conn);
                $_SESSION['noti-err-pr'] = "Update product have few errors!!";
                header("location:edit-product.php"); 
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
        <?php include ("left-sidebar.php"); ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Cập nhât sản phẩm</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Cập nhât sản phẩm</li>
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
                                <?php if(isset($_SESSION['noti-err-pr']) && !is_null($_SESSION['noti-err-pr'])){
                                 ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="alert alert-warning">
                                           <?php 
                                           $err = $_SESSION['noti-err-pr'];
                                           echo $err; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>

                                <?php 
                                    if(isset($_GET['id'])){
                                        $id = $_GET['id'];
                                        $qre = "select * from product where id=$id";
                                        $rse = mysqli_query($conn,$qre);
                                        while($row = mysqli_fetch_array($rse)){
                                ?>
                                <form class="form-horizontal form-material" method="POST" action="edit-product.php" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label class="col-md-12">Tên sản phẩm</label>
                                        <div class="col-md-12">
                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>"  class="form-control form-control-line">
                                            <input type="text" name="ten" value="<?php echo $row['ten']; ?>"  class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Mô tả</label>
                                        <div class="col-md-12">
                                            <textarea name="mota" class="form-control" rows="5" ><?php echo $row['mota']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Số lượng</label>
                                        <div class="col-md-12">
                                            <input type="text" onblur="Checknumber(this);" name="soluong" value="<?php echo $row['soluong']; ?>"  class="form-control form-control-line">
                                            <p id="errsl"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Giá</label>
                                        <div class="col-md-12">
                                            <input type="text" onblur="Checknumberg(this);" name="gia" value="<?php echo $row['gia']; ?>"  class="form-control form-control-line">
                                            <p id="errgia"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Mã loại</label>
                                        <div class="col-md-12">
                                            <select name="maloai" class="form-control">
                                                <?php 
                                                    $qrmaloai = "SELECT * FROM `loai`";
                                                    $rsloai = mysqli_query($conn,$qrmaloai);
                                                    while($rowl = mysqli_fetch_array($rsloai)){
                                                        if($rowl['maloai']==$row['maloai']){
                                                ?>
                                                <option value="<?php echo $rowl['maloai']; ?>" selected="selected"><?php echo $rowl['tenloai']; ?></option>
                                                <?php }else{ ?>
                                                <option value="<?php echo $rowl['maloai']; ?>"><?php echo $rowl['tenloai']; ?></option>
                                                <?php } }?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Hình ảnh</label>
                                        <div class="col-md-12">
                                            <input type="file" name="hinhanh"  class="form-control form-control-line"><?php echo $row['image']; ?>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" name="submit" value="theloai" class="btn btn-success">Cập nhât</button>
                                        </div>
                                    </div>
                                </form>
                                <?php 
                                    }   }
                                ?>
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