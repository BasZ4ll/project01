<?php 
include_once('../../connect.php');
?>
<?php
    $teacherID=$_GET['teacherID'];
    $sql="DELETE FROM `teacher` WHERE teacherID = $teacherID";
   
    if (mysqli_query($conn, $sql)) {
        echo '<script> alert("ลบข้อมูลเสร็จสิ้น!")</script>'; 
        header('Refresh:0; url=index.php');
	} else {
        echo "Error deleting record: " . mysqli_error($connect);
        header('Refresh:0; url=index.php');
	}
	mysqli_close($conn);
?>