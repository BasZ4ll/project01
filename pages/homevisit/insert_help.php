<?php 
    require_once('../../connect.php');
    echo '<pre>',print_r ($_POST),'<pre>';
    if(isset($_POST['submit'])){
        //echo '<pre>',print_r ($_FILES['file']),'<pre>';
        $helpDate=$_POST['helpDate'];
        $helpResult=$_POST['helpResult'];
        $studentID=$_POST['studentID'];

        
        $sql="INSERT INTO help (`helpDate`,`helpResult`,`studentID`) VALUES ('$helpDate','$helpResult','$studentID' )";
        $res= $conn->query($sql) or die($conn->error);
        echo '<pre>',print_r ($_POST),'<pre>';


            if($res){
               
                echo '<script>alert("เพิ่มสำเร็จแล้ว") </script>';
               header('Refresh:0; url=index.php');//สำเร็จ
            }else{
                echo $sql;
            }

       
    }else{
        header('Location: ../../../../login.php');  
    }   
?>