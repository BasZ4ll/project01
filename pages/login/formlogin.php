<?php 
include_once('../member/navbar.php');
    session_start();

?>

<?php if (isset($_SESSION['success'])) : ?>
        <div class="success">
            <?php 
                echo $_SESSION['success'];
            ?>
        </div>
    <?php endif; ?>


    <?php if (isset($_SESSION['error'])) : ?>
        <div class="error">
            <?php 
                echo $_SESSION['error'];
            ?>
        </div>
    <?php endif; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="dist/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="dist/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="dist/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="dist/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="dist/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body><br><br>

<section class="vh-100" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <br><br><br>
              <img src="../img/1.png" alt="login form" class="img-fluid" height="800" width="450"  style="border-radius: 1rem 0 0 1rem; ">       
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

              <form action="login.php" method="post">

                  <div class="d-flex align-items-center mb-3 pb-1">
                   
                    <span class="h1 fw-bold mb-0">เข้าสู่ระบบเพื่อเข้าใช้งาน</span>
                  </div>

                  <h6 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">ระบบเยี่ยมบ้านและติดตามนักเรียนและเทคโนโลยีระบุตำแหน่ง<br><br></h6>

                  <div class="form-outline mb-4">
                    <input type="text" id="username" placeholder="ชื่อผู้ใช้" name="username" class="form-control form-control" />

                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="password" placeholder="รหัสผ่าน" name="password" class="form-control form-control" />

                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" name="submit">เข้าสู่ระบบ</button>
                  </div>

                  <a class="small text-muted" href="#!"></a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;"><a href="#!"
                      style="color: #393f81;"><br><br></a></p>
                  <a href="#!" class="small text-muted">© Home Visit and Student Tracking System with Location Technology</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php 

    if (isset($_SESSION['success']) || isset($_SESSION['error'])) { //
        session_destroy();
    }

?>
