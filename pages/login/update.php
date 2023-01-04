<?php 
include_once('../../connect.php');
?>
<?php

//echo '<pre>',print_r ($_POST),'<pre>';
$studentID=$_POST['studentID'];
$studentName=$_POST['studentName'];
$studentSex=$_POST['studentSex'];
$studentPhone=$_POST['studentPhone'];
$studentAddress=$_POST['studentAddress'];
$class=$_POST['class'];
$room1=$_POST['room1'];
$username=$_POST['username'];

$sql="UPDATE student SET `studentName` = '$studentName', `studentSex` = '$studentSex', `studentPhone` = '$studentPhone', `studentAddress` = '$studentAddress', `class` = '$class', `room1` = '$room1', `username` = '$username' WHERE `student`.`studentID` = '$studentID'";
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

