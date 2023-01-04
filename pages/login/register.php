<?php 
    include_once('../member/navbar.php');
    session_start();

    include_once('../../connect.php');

    if (isset($_POST['submit'])) {

        $parentName=$_POST['parentName'];
        $parentPhone=$_POST['parentPhone'];
        $parentAddress=$_POST['parentAddress'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $userlevel=$_POST['userlevel'];


        $user_check = "SELECT * FROM parent WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn, $user_check);
        $user = mysqli_fetch_assoc($result);
 
        if ($user['username'] === $username) {
            echo "<script>alert('Username already exists');</script>";
        } else {
            
            $query = "INSERT INTO parent (parentName, parentPhone, parentAddress, username, password, userlevel) 
                      VALUES('$parentName','$parentPhone','$parentAddress','$username','$password','รอการอนุมัติ')";

            $result = mysqli_query($conn, $query);

            if ($result) {
                $_SESSION['success'] = "Insert user successfully";
                header("Location: formlogin.php");
            } else {
                $_SESSION['error'] = "Something went wrong";
                header("Location: index.php");
            }
        }

    }


?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>bas</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/responsive/responsive.bootstrap4.min.css">
  <!-- responsive-->
</head>
<body ><br><br>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">


  <section class="vh-100" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
          <img src="../img/1.png" alt="Logo" style="width: 25%;">
            <h3 class="mb-5">ระบบเยี่ยมบ้านและติดตามนักเรียนด้วยเทคโนโลยีระบุตำแหน่ง</h3>
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="parentName" placeholder="ชื่อ-สกุล" name="parentName" class="form-control" />
                </div>
              </div>

              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="parentPhone" placeholder="เบอร์โทรศัพท์" name="parentPhone" class="form-control" />
                </div>
              </div>
            </div>


            <div class="form-outline mb-4">
              <input type="text" id="parentAddress" placeholder="ที่อยู่" name="parentAddress" class="form-control" />
              
            </div>

            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="username" placeholder="ชื่อผู้ใช้" name="username" class="form-control" />
                </div>
              </div>

              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="password" id="password" placeholder="รหัสผ่าน" name="password" class="form-control" />
                </div>
              </div>
            </div>


            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">
              สมัครสมาชิก
            </button>

            <!-- Register buttons -->
            <div class="text-center">
              <p>© Home Visit and Student Tracking System with Location Technology</p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

</form>

</body>
</html>