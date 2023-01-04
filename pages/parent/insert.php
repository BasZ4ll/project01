    <?php 
    require_once('../../connect.php');
    date_default_timezone_set('Asia/Bangkok');
    echo '<pre>',print_r ($_POST),'<pre>';
    if(isset($_POST['submit'])){
        //echo '<pre>',print_r ($_FILES['file']),'<pre>';
        $parentID=$_POST['parentID'];
        $parentName=$_POST['parentName'];
        $parentPhone=$_POST['parentPhone'];
        $parentAddress=$_POST['parentAddress'];
        $usernameparent=$_POST['usernameparent'];
        $passwordparent=$_POST['passwordparent'];
        $userlevel=$_POST['userlevel'];
        

        $sql="INSERT INTO parent (parentID,parentName,parentPhone,parentAddress,usernameparent,passwordparent,userlevel) VALUES ('$parentID','$parentName','$parentPhone','$parentAddress','$usernameparent','$passwordparent','ผู้ปกครอง')";
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
