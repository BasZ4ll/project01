<?php 
    require_once('../../connect.php');

    
    if(isset($_POST['submit'])){

        $location_id = $_POST['location_id'];
        $name = $_POST['name'];
        $lat = $_POST['lat'];
        $lon = $_POST['lon'];
        $sql = "INSERT INTO `location` (location_id, name, lat, lon) VALUES ('$location_id', '$name', '$lat', '$lon')";


        $res= $conn->query($sql) or die($conn->error);
        echo '<pre>',print_r ($_POST),'<pre>';
            if($res){
               
                echo '<script>alert("เพิ่มสำเร็จแล้ว") </script>';
               header('Refresh:0; url=test.php');//สำเร็จ
            }else{
                echo $sql;
            }

       
    }else{
        header('Location: ../../../../login.php');  
    }   
?>