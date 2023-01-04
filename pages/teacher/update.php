<?php 
include_once('../../connect.php');
?>
<?php

//echo '<pre>',print_r ($_POST),'<pre>';
$teacherID=$_POST['teacherID'];
$teacherName=$_POST['teacherName'];
$teacherPhone=$_POST['teacherPhone'];
$teacherAddress=$_POST['teacherAddress'];
$class=$_POST['class'];
$room1=$_POST['room1'];
$username=$_POST['username'];
$password=$_POST['password'];
$userlevel=$_POST['userlevel'];

$sql="UPDATE teacher SET teacherName='$teacherName',teacherPhone='$teacherPhone',teacherAddress='$teacherAddress',class='$class',room1='$room1',username='$username',password='$password',userlevel='$userlevel' WHERE teacherID='$teacherID'";
$res=mysqli_query($conn,$sql);


if(mysqli_query($conn,$sql)){
    echo '<script> alert("แก้ไขข้อมูลเสร็จสิ้น!")</script>'; 
    header('Refresh:0; url=index.php');
}else{
    echo "Sql Error:ไม่สามารถแก้ไขข้อมูลได้".$sql; 
    header('Refresh:5; url=index.php');
}
    //echo '<pre>'.print_r($_POST),'<pre>';

?>