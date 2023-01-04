<?php 
include_once('navbar_login.php');
?>
<?php 
include_once('../../connect.php');
$search1=$_POST['search1'];
  $sql="select * from student where class='$_SESSION[class]' and room1='$_SESSION[room1]' AND studentName like '%".$_POST['search1']."%'";
  $res=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($res);
?>
<style>
.successa {
 
 color: #fff;

 background-color: #28a745;
 border-radius: 35px;

 padding:5px;
}
.infos {
 
 color: #fff;
 background-color: #17a2b8;
 border-radius: 35px;
 border: 1px solid rgba(23, 162, 184, 0.75); 
 padding:5px;

}
</style>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/responsive/responsive.bootstrap4.min.css"><!-- responsive-->
</head>
<body class="">

<!-- Site wrapper -->
<div class="">
  <!-- Navbar & Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student Management</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
      <form action="form_search1.php" class="form-group" method="POST">
        <div class="card-header">
          <h3 class="card-title d-inline-block">รายชื่อนักเรียน</h3>
          <div class="card-tools">
            <input type="search" name="search1" placeholder="ค้นหาชื่อนักเรียน">
                <button class="btn btn-sm btn-dark">ค้นหา</button>
          </div>
        </div> </form>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="dataTable" class="table table-bordered table-striped w-100 ">
            <thead>
            <tr>
              <th>รหัส</th>
              <th>ชื่อ</th>
              <th>เพศ</th>
              <th>ชั้น</th>
              <th>ห้อง</th>
              <th>เยี่ยมบ้าน</th>
            </tr>
            </thead>
            <tbody>
            <?php while($row=mysqli_fetch_array($res)) { ?>
              <tr>
                <td><?php echo $row['studentID']; ?></td>
                <td><?php echo $row['studentName']; ?></td>
                <td><?php echo $row['studentSex']; ?></td>
                <td><?php echo $row['class']; ?></td>
                <td><?php echo $row['room1']; ?></td>
                <td>
                  <a href="form_insert_home.php?studentID=<?php echo $row['studentID']; ?>" class="btn btn-sm btn-success text-white">
                    <i class="fas fa-home"></i> เยี่ยมบ้าน
                  </a>
                  <a href="index_show.php?studentID=<?php echo $row['studentID']; ?>" class="btn btn-sm btn-info text-white">
                    <i class="fas fa-eye"></i> ดู
                  </a>
                  <a href="index_help.php?studentID=<?php echo $row['studentID']; ?>" class="btn btn-sm btn-warning text-white">
                    <i class="fas fa-eye"></i> ช่วยเหลือ
                  </a>  
                </td>
              </tr>
            <?php } ?>
            
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
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
