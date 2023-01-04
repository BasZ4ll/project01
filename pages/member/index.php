<?php 
include_once('navbar.php');
?>
<?php 
include_once('../../connect.php');
  $sql="select * from homevisit";
  $res=mysqli_query($conn,$sql);
?>
<?php 
include_once('../../connect.php');
  $sql1="select * from student where studentID = $studentID";
  $res1=mysqli_query($conn,$sql1);
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> <!-- Responsive website -->
    <title>GPS Tracker</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./test.js"></script>
</head>

<body>

<h2>
<br><br>
<center><img src="../img/1.png" alt="Logo" style="width: 25%;"><br>
ระบบเยี่ยมบ้านและติดตามนักเรียนด้วยเทคโนโลยีระบุตำแหน่ง<br>
Home Visit and Student Tracking System with Location Technology<br><br>
นายเกียรติยศ  คงทอง<br>
Kiattiyot Kongtong<br></center>
</h2>
</body>
<!-- Script view google map -->

</html>