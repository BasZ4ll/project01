<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Parent</title>
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
            <h1>Parent Management</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<?php 
  include_once('../../connect.php');
  $parentID=$_GET['parentID'];
  $sql1="select * from parent where parentID = $parentID";
  $res1=mysqli_query($conn,$sql1);
  $row1=mysqli_fetch_assoc($res1);
?>
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
              <input type="text" class="form-control" id="parentID" name="parentID" value="<?php echo $row1['parentID']=$parentID?>" hidden>
              <input type="text" class="form-control" id="parentName" name="parentName" value="<?php echo $row1['parentName']?>" hidden>
                  <label for="parentID">รหัส</label>
                  <input type="text" class="form-control" id="parentID" name="parentID" value="<?php echo $row1['parentID']?>" disabled>
              </div>
              <div class="form-group col-md-4">
                  <label for="parentName">ชื่อ</label>
                  <input type="text" class="form-control" id="parentName" name="parentName" value="<?php echo $row1['parentName']?>">
              </div>
              <div class="form-group col-md-4">
                  <label for="parentPhone">เบอร์โทร</label>
                  <input type="text" class="form-control" id="parentPhone" name="parentPhone" value="<?php echo $row1['parentPhone']?>">
              </div>
              <div class="form-group col-md-4">
                  <label for="usernameparent">ชื่อผู้ใช้</label>
                  <input type="text" class="form-control" id="usernameparent" name="usernameparent" value="<?php echo $row1['usernameparent']?>" >
              </div>
              <div class="form-group col-md-4">
                  <label for="passwordparent">รหัสผ่าน</label>
                  <input type="password" class="form-control" id="passwordparent"  name="passwordparent" value="<?php echo $row1['passwordparent']?>">
              </div>

              
            
            </div>

            <div class="form-group">
                <label for="parentAddress">ที่อยู่</label>
                <textarea class="form-control" id="parentAddress" name="parentAddress"  rows="5"> <?php echo $row1['parentAddress']?></textarea>
            </div>

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
