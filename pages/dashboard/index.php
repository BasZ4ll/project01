<?php
include_once('../../connect.php'); 
?>
<?php 
include_once('../../connect.php');
  $sql10="select * from homevisit";
  $res10=mysqli_query($conn,$sql10);
?>
<?php 
include_once('../../connect.php');
  $sql1="select * from student where studentID = $studentID";
  $res1=mysqli_query($conn,$sql1);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
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

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 
  <!-- Navbar -->
  <?php include_once('../includes/sidebar.php') ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center">
            <h1 class="m-0 text-dark">ระบบเยี่ยมบ้านและติดตามนักเรียนและเทคโนโลยีระบุตำแหน่ง</h1>
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div id="map" style="height:250px; width:1250px;" bgcolor="white">Show Google Map Here.</div>
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- Widget: user widget style 1 -->
            <div class="col-md-12">
              
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="card-footer">
                <div class="row">
                  
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                    <?php $sql="SELECT COUNT(*) as summember FROM `student`"; 
                          $res=mysqli_query($conn,$sql);
                          $row=mysqli_fetch_array($res);
                    ?>
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
        </div>

        <div class="row">

          <div class="col-lg-6 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <a href="../student/index.php"><h3><?php echo $row['summember']?></h3>
                <p>All Student</p></a>
              </div>
              <div class="icon">
                <i class="fas fa-users-cog nav-icon"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-6">
            <div class="small-box bg-success">
              <div class="inner">
              <?php $sql1="SELECT COUNT(*) as sumteacher FROM teacher";
                    $res1=mysqli_query($conn,$sql1);
                    $row1=mysqli_fetch_array($res1);
                    ?>
                <h3> <a href="../teacher/index.php"><?php echo $row1['sumteacher']?></h3>
                <p>All Teacher</p></a>
              </div>
              <div class="icon">
              <i class="fas fa-users-cog nav-icon"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
              <?php $sql2="SELECT COUNT(*) as sumhomevisit FROM homevisit";
                    $res2=mysqli_query($conn,$sql2);
                    $row2=mysqli_fetch_array($res2);
                    ?>
                <h3><a href="../homevisit/index.php"><?php echo $row2['sumhomevisit']?></h3>
                <p>All Homevisit</p></a>
              </div>
              <div class="icon">
                <i class="fas fa-home nav-icon"></i>
              </div>
            </div>
          </div>
          
          <div class="col-lg-6 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
              <?php $sql3="SELECT COUNT(*) as sumparent FROM parent";
                    $res3=mysqli_query($conn,$sql3);
                    $row3=mysqli_fetch_array($res3);
                    ?>
                <h3><a href="../parent/index.php"><?php echo $row3['sumparent']?></h3>
                <p>All Parent</p></a>
              </div>
              <div class="icon">
              <i class="fas fa-users-cog nav-icon"></i></i>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<script>
    function initMap() {
        var mapProp = {
            center: new google.maps.LatLng(8.4636, 99.8620),
            mapTypeId: google.maps.MapTypeId.HYBRID,
            zoom: 14,
        };

        /* start show map */
        var map = new google.maps.Map(document.getElementById("map"), mapProp);
/* click */
    map.addListener("click", (e) => {
        let mk = new google.maps.Marker({
            position:{
                lat: e.latLng.lat(),
                lng: e.latLng.lng()
            },
            map: map
        });
        });
        /* show marker */
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(8.4636, 99.8620),
            map: map,
            icon: '',
            title: 'Hello World!'
        });

        <?php while($row10=mysqli_fetch_array($res10)) { ?> 
        var location = [{ 
                name: "<?php echo $row10['studentID']; ?>",
                lat: "<?php echo $row10['lat']; ?>",
                lon: "<?php echo $row10['lon']; ?>",
                test: "<?php echo $row10['studentName']; ?>"
            }
     
        ]
        
        $.each(location, function(index, value) {
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(value.lat, value.lon),
                map: map,
                title: value.name,
                test: value.test
            });
        });    <?php }  ?>      
    }

    
    
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6wk2trQWVwXIZ7egSo2IVsIxql5fSCJc&callback=initMap"></script>

</body>
</html>

