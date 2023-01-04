<?php 
include_once('../../connect.php');
?>
<?php

//echo '<pre>',print_r ($_POST),'<pre>';
$executiveID=$_POST['executiveID'];
$executiveName=$_POST['executiveName'];
$executivePhone=$_POST['executivePhone'];
$executiveAddress=$_POST['executiveAddress'];
$executiveUser=$_POST['executiveUser'];
$executivePass=$_POST['executivePass'];
$sql="UPDATE `executive` SET `executiveName` = '$executiveName', `executivePhone` = '$executivePhone', `executiveAddress` = '$executiveAddress', `executiveUser` = '$executiveUser',`executivePass`= '$executivePass' WHERE `executiveID` = $executiveID;";
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