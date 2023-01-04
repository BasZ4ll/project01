
    <?php 
    require_once('../../connect.php');
    //echo '<pre>',print_r ($_POST),'<pre>';
    if(isset($_POST['submit'])){
        //echo '<pre>',print_r ($_FILES['file']),'<pre>';
        $teacherID=$_POST['teacherID'];
        $teacherName=$_POST['teacherName'];
        $teacherPhone=$_POST['teacherPhone'];
        $teacherAddress=$_POST['teacherAddress'];
        $class=$_POST['class'];
        $room1=$_POST['room1'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $userlevel=$_POST['userlevel'];

        $sql="INSERT INTO teacher VALUES('$teacherID','$teacherName','$teacherPhone','$teacherAddress','$class','$room1','$username','$password','$userlevel')";
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