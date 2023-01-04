
<?php 
include_once('../../connect.php');

//echo '<pre>',print_r ($_POST),'<pre>';
$studentID=$_POST['studentID'];
$mlat=$_POST['mlat'];
$mlog=$_POST['mlog'];


//echo '<pre>',print_r ($_FILES),'<pre>';

$sql="UPDATE student SET mlat='$mlat',mlog='$mlog' WHERE studentID='$studentID'";
$res= $conn->query($sql) or die($conn->error);
    if ($res) {
        echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');window.location='index_homevisit.php';</script>";
    } else {
        echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');window.location='index_homevisit.php';</script>";
    }

?>

<?php 
$studentID=$_POST['studentID'];
$file=$_POST['file'];
$dir = "../upload/";
$fileImage = $dir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $fileImage)) {
    //echo "ไฟล์ชื่อ ". basename( $_FILES["file"]["name"]). " เสร็จ.";
} else {
    //echo "Sorry,";
}
$sql="UPDATE homevisit SET file='$fileImage' WHERE studentID='$studentID'";
$res= $conn->query($sql) or die($conn->error);


?>


