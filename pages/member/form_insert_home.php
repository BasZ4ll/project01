<?php
include('../../connect.php');
$studentID=$_GET['studentID'];
$sql1="select * from student where studentID = $studentID";
$res1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($res1);
$class=$row1['class'];
$room1=$row1['room1'];
?>
<?php 
  include_once('../../connect.php');
  $studentID=$_GET['studentID'];
  $sql1="select * from homevisit where studentID = $studentID";
  $res8=mysqli_query($conn,$sql1);
  $row8=mysqli_fetch_assoc($res8);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student</title>
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
  <link rel="stylesheet" href="../../plugins/responsive/responsive.bootstrap4.min.css"><!-- responsive-->
</head>
<body>
<!-- Site wrapper -->

  <!-- Navbar & Main Sidebar Container -->
<?php 
include_once('navbar_login.php');
?>
<br><br>
  <!-- Content Wrapper. Contains page content -->
  <section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-6 col-xl-12">
        <div class="card rounded-3">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2 text-center">แบบบันทึกการเยี่ยมบ้านนักเรียน</h3>

        <form role="form" action="insert_test.php" method="post"enctype="multipart/form-data"id="formRegister">

          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-4">
              <input type="text" class="form-control" id="studentID" name="studentID" value="<?php echo $row1['studentID']=$studentID?>" hidden>
              <input type="text" class="form-control" id="studentName" name="studentName" value="<?php echo $row1['studentName']?>" hidden>
                  <label for="studentID">รหัส</label>
                  <input type="text" class="form-control" id="studentID" name="studentID" value="<?php echo $row1['studentID']?>" disabled><br><hr>
              </div>
              <div class="form-group col-md-8">
                  <label for="studentName">ชื่อ</label>
                  <input type="text" class="form-control" id="studentName" name="studentName" value="<?php echo $row1['studentName']?>" disabled><br><hr>
              </div>
            </div>
            </div>
  <!-- /.ข้อมูลนักเรียน -->
          <div class="card-body">
            <div class="form-row">
            <table>
              
<!-- create radio button -->
<div class="input-group"> 
<span class="input-group-text">ค่าละติดจูด :</span>
<INPUT TYPE='text' NAME='mlat' id='mlat' value="<?php echo $row1['mlat']?>" class="form-control" readonly>
<span class="input-group-text">ค่าลองติดจูด :</span>
<INPUT TYPE='text' NAME='mlog' id='mlog' value="<?php echo $row1['mlog']?>" class="form-control" readonly >
</div>
<br>
</div>
</div>
<div class="col-md-3" align=center><br></div>
</div>
<p>
    <div id="GoogleMap" style="width:100%;height:400px;"></div>
    <script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript">
                var map;
                var infoWindow;
                var infowindowTmp; 
                var infowindow1; 
                var infowindowTmp1; 
                var my_Marker=[];    
                var my_Marker1=[];  

				  function initMap(address) {
						map = new google.maps.Map(document.getElementById('GoogleMap'), {
							center: {lat: 7.9653969, lng: 100.0059379},
							zoom: 10
						});
						infoWindow = new google.maps.InfoWindow;
   
						map.markers = [];

						// Try HTML5 geolocation.
						if (navigator.geolocation) {
								navigator.geolocation.getCurrentPosition(function(position) {
										var pos = {
											  lat: position.coords.latitude,
											  lng: position.coords.longitude,
											  mapTypeControl:true,
											  navigationControl:true
										};
										var pos1 = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
										var my_Marker = new google.maps.Marker({ // สร้างตัว marker  
												position: pos1,  // กำหนดไว้ที่เดียวกับจุดกึ่งกลาง  
												map: map, // กำหนดว่า marker นี้ใช้กับแผนที่ชื่อ instance ว่า map  
												icon:"../img/marker.png", 
													draggable:true, // กำหนดให้สามารถลากตัว marker นี้ได้  
													title:"คลิกลากเพื่อหาตำแหน่งจุดที่ต้องการ!" , // แสดง title เมื่อเอาเมาส์มาอยู่เหนือ
											}); 
										map.setCenter(pos);

										// กำหนด event ให้กับตัว marker เมื่อสิ้นสุดการลากตัว marker ให้ทำงานอะไร   
										google.maps.event.addListener(my_Marker, 'dragend', function() {
											var my_Point = my_Marker.getPosition();  // หาตำแหน่งของตัว marker เมื่อกดลากแล้วปล่อย
											map.panTo(my_Point); // ให้แผนที่แสดงไปที่ตัว marker        
											$("#mlat").val(my_Point.lat());  // เอาค่า latitude ตัว marker แสดงใน textbox id=lat_value
											$("#mlog").val(my_Point.lng());  // เอาค่า longitude ตัว marker แสดงใน textbox id=lon_value 
										});     						
          					  }, function() {
          						handleLocationError(true, infoWindow, map.getCenter());
          					  });
          				} else {
          					  // Browser doesn't support Geolocation
          					  handleLocationError(false, infoWindow, map.getCenter());
          				}
				}

    $(function(){
        $("<script/>", {
        "type": "text/javascript",
        src: "http://maps.google.com/maps/api/js?v=3.2&key=AIzaSyB6wk2trQWVwXIZ7egSo2IVsIxql5fSCJc&sensor=false&language=th&callback=initMap"
        }).appendTo("body");    
    });

    </script>  
              
            
              
<!-- create radio button -->
<!--  -->

<!-- ตารางคุณลักษณะ -->
                  
                              
          </table><br><div class="form-group col-md-12">
                        <h6 class="my-2">อัพโหลดรูปภาพการเยี่ยมบ้านนักเรียน</h6>
                        <input type="file" name="file" class="form-control streched-link" accept="image/gif, image/jpeg, image/png">
                        <td><img src="../upload/<?php echo $row8['file']?>" class="img-fluid d-block mx-auto "  width="50%"></td>
                    </div>
      </div>              
            <div class="form-group col-md-3">
                  <label for="submit" style="opacity: 0;">submit</label><br>
                  <input type="submit" class="btn btn-success"name="submit">
              </div>
          </div> 
        </form>
        <!-- /.card-body -->
      </div>
      <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- footer -->
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
<!-- DataTables -->
<script src="../../../../node_modules/jquery-datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/responsive/dataTables.responsive.min.js"></script> <!-- responsive-->
<script src="../../../../node_modules/jquery-validation/dist/jquery.validate.min.js"></script><!--เรียกjquery.validate -->

</body>
</html>
