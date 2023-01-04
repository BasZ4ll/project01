<style>
.user-panel img{
  width: 6.4rem;
  height: auto;
}
.img-thumbnails{
    box-shadow: 0 1px 2px rgba(0,0,0,.075);
    max-width: 100%;
}
</style>
<?php 

session_start(); //คำสั่งเริ่มต้น session

if (!$_SESSION['userid']) { //ถ้าไม่มี session ชื่อ userid ให้กลับไปหน้า login
    header("Location: index.php"); //คำสั่ง redirect ไปหน้า login
} else { //ถ้ามี session ชื่อ userid ให้แสดงหน้า user_page

?>
<?php 
$link = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$link);
$name = $link_array[count($link_array) - 2];
?>
<nav class="main-header navbar navbar-expand border-bottom navbar-dark bg-info">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fa fa-th-large"></i>
        </a>
      </li>
    </ul>
</nav>
<?php 
include('../../connect.php');
$sql9="select * from user where id = '".$_SESSION['id']."'";
$res9=mysqli_query($conn,$sql9);
$row9=mysqli_fetch_array($res9);
?>
  <!-- /.navbar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light text-center d-block">Homevisit</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <center>
            <a>Hello</a>
          <a  class="d-block h4"><?php echo $_SESSION['user']; ?></a>
          </center>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="../dashboard" class="nav-link <?php echo $name == 'dashboard' ? 'active': '' ?>">
              <i class="fas fa-tachometer-alt nav-icon"></i>
              <p>หน้าหลัก</p>
            </a>
          </li>

          <!-- dropdown -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-users-cog nav-icon"></i>
              <p>
                จัดการข้อมูลสมาชิก
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <!-- <li class="nav-item"> 
                <a href="../executive" class="nav-link <?php// echo $name == 'executive' ? 'active': '' ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ผู้บริหาร</p>
                </a>
              </li>-->
              <li class="nav-item">
                <a href="../teacher" class="nav-link <?php echo $name == 'teacher' ? 'active': '' ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ครู</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../student" class="nav-link <?php echo $name == 'student' ? 'active': '' ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>นักเรียน</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../parent" class="nav-link <?php echo $name == 'parent' ? 'active': '' ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ผู้ปกครอง</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- dropdown -->

          <li class="nav-item">
            <a href="../homevisit" class="nav-link <?php echo $name == 'homevisit' ? 'active': '' ?>">
              <i class="fas fa-home nav-icon"></i>
              <p>เยี่ยมบ้าน</p>
            </a>
          </li>
          <li class="nav-header dropdown">Account Settings</li>
          <li class="nav-item">
            <a href="../dashboard/logout.php" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <?php } ?>
    <!-- /.sidebar -->
</aside>