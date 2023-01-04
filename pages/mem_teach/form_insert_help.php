<?php 
include_once('navbar_login.php');
?>
<?php
include('../../connect.php');
?>
<?php
include('../../connect.php');
$studentID=$_GET['studentID'];
$sql1="select * from student where studentID = $studentID";
$res1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($res1);
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
  <link rel="stylesheet" href="../../plugins/responsive/responsive.bootstrap4.min.css"><!-- responsive-->
</head>
<style>
</style>
<body class="">
<!-- Site  -->
<div class="">
  <!-- Navbar & Main Sidebar Container -->


  <!-- Content . Contains page content -->
<br>
<br>
    <!-- Main content -->
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-6 col-xl-12">
        <div class="card rounded-3">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2 text-center">เพิ่มข้อมูลการช่วยเหลือ</h3>
        <!-- /.card-header -->
        <form role="form" action="insert_help.php" method="post"enctype="multipart/form-data"id="formRegister">
          <div class="card-body">
            <div class="form-row">
            <table>
            <input type="text" class="form-control" id="studentID" name="studentID" value="<?php echo $row1['studentID']=$studentID?>" hidden>
              <input type="text" class="form-control" id="studentName" name="studentName" value="<?php echo $row1['studentName']?>" hidden>
                  <label for="studentID">รหัส</label>
                  <input type="text" class="form-control" id="studentID" name="studentID" value="<?php echo $row1['studentID']?>" disabled>
                  <label for="studentName">ชื่อ-สกุล</label>
                  <input type="text" class="form-control" id="studentName" name="studentName" value="<?php echo $row1['studentName']?>" disabled><br><hr>    
              <div class="form-group col-md-6">
                  <label for="helpDate">วันที่ช่วยเหลือ</label>
                  <input type="date" class="form-control" id="helpDate" name="helpDate" >
              </div>
              <div class="form-group col-md-6">
                  <label for="helpDetail">รายละเอียด</label>
                  <input type="text" class="form-control" id="helpDetail" name="helpDetail" >
              </div>
              <div class="form-group col-md-6">
                  <label for="helpResult">ผลการช่วยเหลือ</label>
                  <input type="text" class="form-control" id="helpResult" name="helpResult" >
              </div>
              <div class="form-group col-md-6">
                  <label for="helpTeacher">ผู้ให้การช่วยเหลือ</label>
                  <input type="text" class="form-control" id="helpTeacher" name="helpTeacher" >
              </div>
            </div>
          </div>
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
  <!-- /.content- -->
</div>
<!-- ./ -->

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
