<?php 
include_once('../../connect.php');
?>
<?php

//echo '<pre>',print_r ($_POST),'<pre>';
$studentID=$_POST['studentID'];
$studentName=$_POST['studentName'];

$studentPhone=$_POST['studentPhone'];
$studentAddress=$_POST['studentAddress'];
$username=$_POST['username'];
$password=$_POST['password'];
$userlevel=$_POST['userlevel'];

$sql="UPDATE student SET studentName='$studentName',studentPhone='$studentPhone',studentAddress='$studentAddress',username='$username',password='$password',userlevel='$userlevel' WHERE studentID='$studentID'";
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