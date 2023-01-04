<?php 
include_once('navbar_login.php');
?>
<?php 
include_once('../../connect.php');
$sql="select * from student where studentID = '".$_SESSION['userid']."' ";
$res=mysqli_query($conn,$sql);
$row1=mysqli_fetch_array($res);
?>
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
</head>
<style>
.w-50{
  width:30px;
}
</style>
<body>
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
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">แก้ไขข้อมูล</h3>
        </div>
   
        <form role="form" action="update.php" method="post">
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-4">
              <input type="text" class="form-control" id="studentID" name="studentID" value="<?php echo $row1['studentID']=$studentID?>" hidden>
              <input type="text" class="form-control" id="studentName" name="studentName" value="<?php echo $row1['studentName']?>" hidden>
                  <label for="studentID">รหัส</label>
                  <input type="text" class="form-control" id="studentID" name="studentID" value="<?php echo $_SESSION['userid']?>" disabled>
              </div>
              <div class="form-group col-md-4">
                  <label for="studentName">ชื่อ</label>
                  <input type="text" class="form-control" id="studentName" name="studentName" value="<?php echo $row1['studentName']?>">
              </div>


              <div class="form-group col-md-4">
                  <label for="studentPhone">เบอร์โทร</label>
                  <input type="text" class="form-control" id="studentPhone" name="studentPhone"  value="<?php echo $row1['studentPhone']?>">
              </div>



              <div class="form-group col-md-4">
                  <label for="username">ชื่อผู้ใช้</label>
                  <input type="text" class="form-control" id="username" name="username" value="<?php echo $row1['username']?>" >
            </div>
            <div class="form-group col-md-4">
                  <label for="password">รหัสผ่าน</label>
                  <input type="password" class="form-control" id="password" name="password" value="<?php echo $row1['password']?>" >
            </div>
          </div>
            <div class="form-group">
                <label for="studentAddress">ที่อยู่</label>
                <textarea class="form-control" id="studentAddress" name="studentAddress"  rows="5"> <?php echo $row1['studentAddress']?></textarea>
            </div>
          <div class="card-footer">
          <a href="index.php" class="btn btn-warning float-left">ย้อนกลับ</a>
          <input type="submit" name="submit" class="btn btn-primary float-right" value="บันทึกข้อมูล">
          </div>
        </form>
      </div>    
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


</body>
</html>
