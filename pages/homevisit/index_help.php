<?php
include('../../connect.php');
$studentID=$_GET['studentID'];
$sql1="select * from student where studentID = $studentID";
$res1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($res1);
?>
<?php 
  include_once('../../connect.php');
  $studentID=$_GET['studentID'];
  $sql1="select * from help where studentID = $studentID";
  $res8=mysqli_query($conn,$sql1);
  $row8=mysqli_fetch_assoc($res8);
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
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar & Main Sidebar Container -->
  <?php include_once('../includes/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>รายละเอียดช่วยเหลือ</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
      <form action="form_search.php" class="form-group" method="POST">
        <div class="card-header">
          <h3 class="card-title d-inline-block">รายละเอียดช่วยเหลือ</h3>
          <div class="card-tools">
            <input type="search" name="search" placeholder="ค้นหาชื่อนักเรียน">
                <button class="btn btn-sm btn-dark">ค้นหา</button>
          </div>
        </div> </form>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="dataTable" class="table table-bordered table-striped w-100 ">
            <thead>

          
            <tr>
              <th>วันที่</th>
              <th>ชื่อ</th>
              <th>รายละเอียด </th>              <div class="form-group col-md-12 text-right">   <a href="form_insert_help.php?studentID=<?php echo $row8['studentID']; ?>" class="btn btn-md btn-info text-white">
                    <i class="fas fa-plus-square"></i> เพิ่ม
                  </a></div>
            </tr>
            </thead>
            <tbody>
              <tr><?php while($row8=mysqli_fetch_array($res8)) { ?>
                
                                
                <td><?php echo $row8['helpDate']; ?></td>
                <td><?php echo $row1['studentName']; ?></td>
                
                <td><?php echo $row8['helpResult']; ?></td>
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
