<?php
include('../../connect.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Executive</title>
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
<style>
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
            <h1>Executive Management</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title d-inline-block">เพิ่มข้อมูลผู้บริหาร</h3>
        </div>
        <!-- /.card-header -->
        <form role="form" action="insert.php" method="post"enctype="multipart/form-data"id="formRegister">
          <div class="card-body">
            <div class="form-row">
            <table>
            <div class="form-group col-md-4">
                  <label for="executiveID">รหัส</label>
                  <input type="text" class="form-control" id="executiveID" name="executiveID">
              </div>
              <div class="form-group col-md-4">
                  <label for="executiveName">ชื่อ</label>
                  <input type="text" class="form-control" id="executiveName" name="executiveName" >
              </div>
              <div class="form-group col-md-4">
                  <label for="executivePhone">เบอร์โทร</label>
                  <input type="text" class="form-control" id="executivePhone" name="executivePhone" >
              </div>
              <div class="form-group col-md-4">
                  <label for="executiveUser">User</label>
                  <input type="text" class="form-control" id="executiveUser" name="executiveUser"  >
              </div>

              <div class="form-group col-md-4">
                  <label for="executivePass">Password</label>
                  <input type="text" class="form-control" id="executivePass"  name="executivePass" >
              </div>
          </div>
          </table>
          </div>
             <div class="form-group">
                <label for="executiveAddress">ที่อยู่</label>
                <textarea class="form-control" id="executiveAddress" name="executiveAddress"  rows="5"></textarea>
            </div>
          </table>
          </div>              
              <div class="form-group col-md-3">
                  <label for="submit" style="opacity: 0;">submit</label><br>
                  <input type="submit" class="btn btn-success"name="submit">
              </div>
          </div>
        </form>

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
<script src="../../../../node_modules/jquery-validation/dist/jquery.validate.min.js"></script><!--เรียกjquery.validate -->

</body>
</html>
