 <header class="topbar">
    <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="../../index.php">
                <!-- Logo icon -->
                <b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="../../images/iconmoto2.png" alt="homepage" class="dark-logo" width="40"  />

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
                    <form class="app-search p-l-20" action="table-product.php" method="GET">
                        <input type="text" class="form-control" name="search" placeholder="Search for...">
                        <button type="submit" class="srh-btn"><i class="ti-search"></i></button>
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
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../images/user.jpg?>" alt="user" class="profile-pic m-r-5" /><?php echo $_SESSION['fullname'];?></a>
                </li>
                <?php
                    }
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="../../index.php" aria-haspopup="true" aria-expanded="false">Home</a>
                </li>
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
