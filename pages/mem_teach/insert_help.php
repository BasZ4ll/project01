<?php 
    require_once('../../connect.php');
    //echo '<pre>',print_r ($_POST),'<pre>';
    if(isset($_POST['submit'])){
        //echo '<pre>',print_r ($_FILES['file']),'<pre>';
        $studentID=$_POST['studentID'];
        $helpDate=$_POST['helpDate'];
        $helpDetail=$_POST['helpDetail'];
        $helpResult=$_POST['helpResult'];
        $helpTeacher=$_POST['helpTeacher'];

        $sql="INSERT INTO `help`(`studentID`, `helpDate`, `helpDetail`, `helpResult`, `helpTeacher`) VALUES ('$studentID','$helpDate','$helpDetail','$helpResult','$helpTeacher')";
        $result=$conn->query($sql);
        if($result){
            echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');window.location='index_homevisit.php';</script>";
        }else{
            echo "<script>alert('บันทึกข้อมูลไม่สำเร็จ');window.location='index_homevisit.php';</script>";
        }
    }
?>