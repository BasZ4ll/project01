<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Teacher</title>
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
            <h1>Teacher Management</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<?php 
  include_once('../../connect.php');
  $teacherID=$_GET['teacherID'];
  $sql1="select * from teacher where teacherID = $teacherID";
  $res1=mysqli_query($conn,$sql1);
  $row1=mysqli_fetch_assoc($res1);
  $class=$row1['class'];
  $room1=$row1['room1'];
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
              <input type="text" class="form-control" id="teacherID" name="teacherID" value="<?php echo $row1['teacherID']=$teacherID?>" hidden>
              <input type="text" class="form-control" id="teacherName" name="teacherName" value="<?php echo $row1['teacherName']?>" hidden>
                  <label for="teacherID">รหัส</label>
                  <input type="text" class="form-control" id="teacherID" name="teacherID" value="<?php echo $row1['teacherID']?>" disabled>
              </div>
              <div class="form-group col-md-4">
                  <label for="teacherName">ชื่อ</label>
                  <input type="text" class="form-control" id="teacherName" name="teacherName" value="<?php echo $row1['teacherName']?>">
              </div>
              <div class="form-group col-md-4">
                  <label for="teacherPhone">เบอร์โทร</label>
                  <input type="text" class="form-control" id="teacherPhone" name="teacherPhone" value="<?php echo $row1['teacherPhone']?>">
              </div>
              <div class="form-group col-md-2">
                  <label for="class">ชั้น</label>
                  <select class="form-control" name="class">
                  <?php 
                  $sql1="select * from room";
                  $res=mysqli_query($conn,$sql1);
                  while($row=mysqli_fetch_array($res)){
                  ?>
                  <option value="<?php echo $row['class']?>" <?php if($row['class']==$class){
                      echo "selected";
                  }?>><?php echo $row['class']?></option>
                  <?php }
                  ?>
                  </select>
              </div>

              <div class="form-group col-md-2">
                  <label for="room1">ห้อง</label>
                  <select class="form-control" name="room1">
                  <?php 
                  $sql1="select * from room";
                  $res=mysqli_query($conn,$sql1);
                  while($row=mysqli_fetch_array($res)){
                  ?>
                  <option value="<?php echo $row['room1']?>" <?php if($row['room1']==$room1){
                      echo "selected";
                  }?>><?php echo $row['room1']?></option>
                  <?php }
                  ?>
                  </select>
              </div>

              <div class="form-group col-md-4">
                  <label for="username">ชื่อผู้ใช้</label>
                  <input type="text" class="form-control" id="username" name="username"  value="<?php echo $row1['username']?>">
              </div>

              <div class="form-group col-md-4">
                  <label for="password">รหัสผ่าน</label>
                  <input type="text" class="form-control" id="password"  name="password" value="<?php echo $row1['password']?>">
              </div>
              <div class="form-group col-md-4">
                  <label for="userlevel">สถานะ</label>
                  <select name="userlevel" id="userlevel" class="form-control">
                  <?php 
                  $sql1="Select * from teacher where teacherID=$teacherID";
                  $res1=mysqli_query($conn,$sql1);
                  $row1=mysqli_fetch_assoc($res1);
                  $a;
                  $b;
                  $c;
                  if($row1['userlevel']=="ผู้บริหาร"){
                    $a="selected";
                  }elseif($row1['userlevel']=="ครู"){
                    $b="selected";
                  }else{
                    $c="selected";
                  }
                  ?>
                  <option value="ครู" <?php echo $b?>>ครู</option>
                  <option value="ผู้บริหาร"<?php echo $a?>>ผู้บริหาร</option>
                  <option value="admin"<?php echo $c?>>admin</option>
                  </select>
                  <?php    
                  ?>
              </div>

            </div>

            <div class="form-group">
                <label for="teacherAddress">ที่อยู่</label>
                <textarea class="form-control" id="teacherAddress" name="teacherAddress"  rows="5"> <?php echo $row1['teacherAddress']?></textarea>
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
