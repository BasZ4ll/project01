<?php 
    require_once('../../connect.php');
    //echo '<pre>',print_r ($_POST),'<pre>';
    if(isset($_POST['submit'])){ //ถ้ามีการกดปุ่ม submit ให้ทำงาน ถ้าไม่มีก็ไม่ทำงาน 
        //echo '<pre>',print_r ($_FILES['file']),'<pre>';

        $studentID=$_POST['studentID'];

        $sql="INSERT INTO `homevisit` (`studentID`) VALUES ('$studentID')";
        $res= $conn->query($sql) or die($conn->error);  
    }   
?>
<?php 
include_once('../../connect.php');
?>
<?php

//echo '<pre>',print_r ($_POST),'<pre>';
$studentID=$_POST['studentID'];
$mlat=$_POST['mlat'];
$mlog=$_POST['mlog'];


$file=$_POST['file'];
$dir = "../upload/";
$fileImage = $dir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $fileImage)) {
    //echo "ไฟล์ชื่อ ". basename( $_FILES["file"]["name"]). " เสร็จ.";
} else {
    //echo "Sorry,";
}

//echo '<pre>',print_r ($_FILES),'<pre>';

$sql="UPDATE homevisit SET mlat='$mlat',mlog='$mlog',file='$fileImage' WHERE studentID='$studentID'";
$res= $conn->query($sql) or die($conn->error);
    if ($res) {
        echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');window.location='index_homevisit.php';</script>";
    } else {
        echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');window.location='index_homevisit.php';</script>";
    }

?>

<?php 
    require_once('../../connect.php');
    //echo '<pre>',print_r ($_POST),'<pre>';
    if(isset($_POST['submit'])){ 
        $studentID=$_POST['studentID'];

        $sql="INSERT INTO `attribute` (`studentID`) VALUES ('$studentID')";
        $res= $conn->query($sql) or die($conn->error);  
    }   
?>


