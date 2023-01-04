<?php 
    session_start();

    if (isset($_POST['username'])) {

        include_once('../../connect.php');

        $username = $_POST['username'];
        $password = $_POST['password'];


        $query = "SELECT * FROM student WHERE username = '$username' AND password = '$password'";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['userid'] = $row['studentID'];
            $_SESSION['user'] = $row['studentName'];
            $_SESSION['userlevel'] = $row['userlevel'];


            if ($_SESSION['userlevel'] == 'นักเรียน') {
                header("Location: ../member/welcome.php");
            }
            if ($_SESSION['userlevel'] == 'ผู้ปกครอง') {
                header("Location: pages/member/index.php");
            }
        } else {
            $_SESSION['error'] = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
            echo "<script>alert('User หรือ Password ไม่ถูกต้อง);</script>";
            
        }

    } else {
        header("Location: index.php");
    }


?>

<?php 
    session_start();

    if (isset($_POST['username'])) {

        include_once('../../connect.php');

        $username = $_POST['username'];
        $password = $_POST['password'];


        $query = "SELECT * FROM teacher WHERE username = '$username' AND password = '$password'";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['userid'] = $row['teacherID'];
            $_SESSION['user'] = $row['teacherName'];
            $_SESSION['class'] = $row['class'];
            $_SESSION['room1'] = $row['room1'];
            $_SESSION['userlevel'] = $row['userlevel'];

            if ($_SESSION['userlevel'] == 'admin') {
                header("Location: ../index.php");
            }
            if ($_SESSION['userlevel'] == 'ผู้บริหาร') {
                header("Location: ../mem_exe/welcome.php");
            }
            if ($_SESSION['userlevel'] == 'ครู') {
                header("Location: ../mem_teach/welcome.php");
            }
        } else {
            $_SESSION['error'] = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
            echo "<script>alert('User หรือ Password ไม่ถูกต้อง);</script>";
            
        }

    } else {
        header("Location: index.php");
    }


?>
<?php 
    session_start();

    if (isset($_POST['username'])) {

        include_once('../../connect.php');

        $username = $_POST['username'];
        $password = $_POST['password'];


        $query = "SELECT * FROM parent WHERE usernameparent = '$username' AND passwordparent = '$password'";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['userid'] = $row['parentID'];
            $_SESSION['user'] = $row['parentName'];
            $_SESSION['userlevel'] = $row['userlevel'];

            if ($_SESSION['userlevel'] == 'ผู้ปกครอง') {
                header("Location: ../mem_parent/welcome.php");
            }
        } else {
            $_SESSION['error'] = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
            echo "<script>alert('User หรือ Password ไม่ถูกต้อง);</script>";
            
        }

    } else {
        header("Location: index.php");
    }


?>