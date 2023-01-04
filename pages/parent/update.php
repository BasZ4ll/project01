<?php 
include_once('../../connect.php');
?>
<?php

//echo '<pre>',print_r ($_POST),'<pre>';
$parentID=$_POST['parentID'];
$parentName=$_POST['parentName'];
$parentPhone=$_POST['parentPhone'];
$parentAddress=$_POST['parentAddress'];
$usernameparent=$_POST['usernameparent'];
$passwordparent=$_POST['passwordparent'];
$userlevel=$_POST['userlevel'];


$sql="UPDATE `parent` SET `parentName` = '$parentName', `parentPhone` = '$parentPhone', `parentAddress` = '$parentAddress', `usernameparent` = '$usernameparent',`passwordparent`= '$passwordparent',`userlevel`= '$userlevel' WHERE `parentID` = $parentID;";
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