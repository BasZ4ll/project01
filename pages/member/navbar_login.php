<?php 
//session_start();
//echo '<pre>';
//print_r($_SESSION);
//echo '</pre>';
include('../../connect.php');
?>
<?php 
include_once('../../connect.php');
  $sql="select * from student";
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($res)
?>
<?php 

session_start(); //คำสั่งเริ่มต้น session

if (!$_SESSION['userid']) { //ถ้าไม่มี session ชื่อ userid ให้กลับไปหน้า login
    header("Location: index.php"); //คำสั่ง redirect ไปหน้า login
} else { //ถ้ามี session ชื่อ userid ให้แสดงหน้า user_page
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Project</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/style.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/responsive/responsive.bootstrap4.min.css">
  <!-- responsive-->
</head>
<!-- Site wrapper -->
<nav>
		<div class="logo">
    <a href="../member/form-edit2.php" class="text-white"><p style='font-size:20px;'><?php echo $_SESSION['user']; ?>
    </p>
      </a>
		</div>
		<ul>
			<li><a href="../member/welcome.php" class="">หน้าหลัก</a></li>
			<li><a href="../member/index_homevisit.php">เยี่ยมบ้าน</a></li>
      <li><a href="../login/logout.php">ออกจากระบบ</a></li>
		</ul>
    </div><?php } ?>
	</nav>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- DataTables -->
<script src="../../../../node_modules/jquery-datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/responsive/dataTables.responsive.min.js"></script> <!-- responsive-->
</body>
</html>


