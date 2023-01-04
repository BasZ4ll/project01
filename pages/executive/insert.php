<?php 
    require_once('../../connect.php');
    //echo '<pre>',print_r ($_POST),'<pre>';
    if(isset($_POST['submit'])){
        //echo '<pre>',print_r ($_FILES['file']),'<pre>';
        $executiveID=$_POST['executiveID'];
        $executiveName=$_POST['executiveName'];
        $executivePhone=$_POST['executivePhone'];
        $executiveAddress=$_POST['executiveAddress'];
        $executiveUser=$_POST['executiveUser'];
        $executivePass=$_POST['executivePass'];
        $sql="INSERT INTO `executive` values('$executiveID','$executiveName','$executivePhone','$executiveAddress','$executiveUser','$executivePass')";
        $res= $conn->query($sql) or die($conn->error);

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