<?php 
include_once('navbar_login.php');
?>
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
<body class="hold-transition sidebar-mini" >
<!-- Site  -->
<div class="" >
  <!-- Navbar & Main Sidebar Container -->

  <!-- Content . Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-6 col-xl-12">
        <div class="card rounded-3">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2 text-center">แบบบันทึกการเยี่ยมบ้านนักเรียน</h3>
        <!-- /.card-header -->
        <form role="form" action="insert.php" method="post"enctype="multipart/form-data"id="formRegister">
  <!-- /.ข้อมูลนักเรียน -->
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
              
            <div class="form-group col-md-6">
                  <label for="homevisitDate">วันที่เยี่ยมบ้าน</label>
                  <input type="date" class="form-control" id="homevisitDate" name="homevisitDate" value="" >
              </div>
              <div class="form-group col-md-6">
                  <label for="informant">ผู้ให้ข้อมูล</label>
                  <input type="text" class="form-control" id="informant" name="informant" value="">
              </div>
              <div class="form-group col-md-6">
                  <label for="homevisitAddress">ที่อยู่</label>
                  <input type="text" class="form-control" id="homevisitAddress" name="homevisitAddress" value="">
              </div>
              <div class="form-group col-md-6">
                  <label for="familyMembers">สมาชิกในครอบครัว</label>
                  <input type="text" class="form-control" id="familyMembers" name="familyMembers" value=""> 
              </div>
<!-- create radio button -->
<div class="input-group"> 
<span class="input-group-text">ค่าละติดจูด :</span>
<INPUT TYPE='text' name='mlat' id='mlat' value="<?php echo $row1['mlat']?>" class="form-control" readonly>
<span class="input-group-text">ค่าลองติดจูด :</span>
<INPUT TYPE='text' name='mlog' id='mlog' value="<?php echo $row1['mlog']?>" class="form-control" readonly >
</div>
<br>
</div>
</div>
<div class="col-md-3" align=center><br></div>
</div>
<p>
    <div id="map" style="width:100%;height:400px;" bgcolor="white">Show Google Map Here.</div>
    <script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
    <script>
    function initMap() {
        var mapProp = {
            center: new google.maps.LatLng(8.4636, 99.8620),
            mapTypeId: google.maps.MapTypeId.HYBRID,
            zoom: 13,
            
        };

        /* start show map */
        var map = new google.maps.Map(document.getElementById("map"), mapProp);
/* click */





           /* show info window in sql*/


        <?php while($row=mysqli_fetch_array($res)) { ?> 
        var location = [{ 
                name: "<?php echo $row1['studentName']; ?>",
                lat: "<?php echo $row1['mlat']; ?>",
                lon: "<?php echo $row1['mlog']; ?>",
                
            }
     
        ]
        
        $.each(location, function(index, value) {
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(value.lat, value.lon),
                map: map,
                title: value.name,
                icon: '../img/marker.png'
            });
        });    <?php }  ?>      
    }

    
    
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6wk2trQWVwXIZ7egSo2IVsIxql5fSCJc&callback=initMap"></script>

              
            
              
<!-- create radio button -->
<!--  -->
              <div class="form-group col-md-6"><hr>
                <b>ความสัมพันธ์ของครอบครัว</b><br>
                <input type="radio" name="relationship"   value="รักใคร่กันดี"> รักใคร่กันดี
                <br>
                <input type="radio" name="relationship"    value="ขัดแย้งทะเลาะกันบางครั้ง" > ขัดแย้งทะเลาะกันบางครั้ง
                <br>
                <input type="radio" name="relationship"    value="ขัดแย้งทะเลาะกันบ่อยครั้ง" > ขัดแย้งทะเลาะกันบ่อยครั้ง
                </div>
                <div class="form-group col-md-6"><hr>
                <br>
                <input type="radio" name="relationship"    value="ขัดแย้งและทำร้ายร่างกายบางครั้ง" > ขัดแย้งและทำร้ายร่างกายบางครั้ง
                <br>
                <input type="radio" name="relationship"    value="ขัดแย้งและทำร้ายร่างกายบ่อยครั้ง" > ขัดแย้งและทำร้ายร่างกายบ่อยครั้ง
                
                 
              </div>
              
              <div class="form-group col-md-6"><hr>
              <b>ปัจจุบันบิดามารดานักเรียน</b> <br>
                <input type="radio" name="parentStatus"   value="อยู่ด้วยกัน" > อยู่ด้วยกัน
                <br>
                <input type="radio" name="parentStatus"    value="หย่าร้าง" > หย่าร้าง
                <br>
                <input type="radio" name="parentStatus"    value="บิดาเสียชีวิต" > บิดาเสียชีวิต
                <br>
                <input type="radio" name="parentStatus"    value="มารดาเสียชีวิต" > มารดาเสียชีวิต
                </div><div class="form-group col-md-6"><hr>
                <br>
                <input type="radio" name="parentStatus"    value="บิดามารดาเสียชีวิต" > บิดามารดาเสียชีวิต
                <br>
                <input type="radio" name="parentStatus"    value="บิดาสมรสใหม่" > บิดาสมรสใหม่
                <br>
                <input type="radio" name="parentStatus"    value="มารดาสมรสใหม่" > มารดาสมรสใหม่
                <br>
                <input type="radio" name="parentStatus"    value="บิดามารดาสมรสใหม่" > บิดามารดาสมรสใหม่
                  
              </div>

              <div class="form-group col-md-6"><hr>
                <b>นักเรียนอาศัยอยู่กับ</b> <br>

                <input  type="radio" name="live" ="true" tabindex="live" value="ตามลำพัง"  onchange="disableTxt()"  /> ตามลำพัง <br>
                <input id="live" type="radio" name="live" ="true" tabindex="live" value="บิดามารดา"  onchange="disableTxt()" /> บิดามารดา <br>
                <input id="live" type="radio" name="live" ="true" tabindex="live" value="บิดา"  onchange="disableTxt()" /> บิดา <br>
                </div><div class="form-group col-md-6"><hr><br>
                <input id="live" type="radio" name="live" ="true" tabindex="live" value="มารดา"  onchange="disableTxt()" /> มารดา <br>
                <input id="live" type="radio" name="live" ="true" tabindex="live" value="other"   onchange="enableTxt()" /> ญาติ
                <input id="other" type="text" class="form-control" name="live" ="true" tabindex="live" disabled="disabled" value="" placeholder="ระบุ" />
                  <script> // สคริปต์สำหรับการเปิดปิดช่องกรอกข้อมูล
                  function disableTxt() {
                      document.getElementById("other").disabled = true;
                  }
                  function enableTxt() {
                      document.getElementById("other").disabled = false;
                  }
                  </script>
                </div>

                  
<!-- create radio button -->
              <div class="form-group col-md-6"><hr>
                <b>นักเรียนได้รับการอบรมเลี้ยงดู </b> <br>
                <input type="radio" name="nurture"   value="ตามใจ" > ตามใจ
                <br>
                <input type="radio" name="nurture"    value="ใช้เหตุผล" >ใช้เหตุผล
                <br>
                </div><div class="form-group col-md-6"><hr><br>
                <input type="radio" name="nurture"    value="ปล่อยปละละเลย" > ปล่อยปละละเลย
                <br>
                <input type="radio" name="nurture"    value="เข้มงวดกวดขัน" > เข้มงวดกวดขัน 
              </div>
                         
<!-- -->
              <div class="form-group col-md-6"><hr>
                <b>อาชีพของผู้ปกครอง</b> <br>
                <input  type="radio" name="parentOccupation" ="true" tabindex="parentOccupation" value="เกษตรกร"  onchange="disableTxt1()"  /> เกษตรกร <br>
                <input id="parentOccupation" type="radio" name="parentOccupation" ="true" tabindex="parentOccupation" value="ค้าขาย"  onchange="disableTxt1()" /> ค้าขาย <br>
                <input id="parentOccupation" type="radio" name="parentOccupation" ="true" tabindex="parentOccupation" value="รับราชการ"  onchange="disableTxt1()" /> รับราชการ <br>
                </div><div class="form-group col-md-6"><hr><br>
                <input id="parentOccupation" type="radio" name="parentOccupation" ="true" tabindex="parentOccupation" value="รับจ้าง"  onchange="disableTxt1()" /> รับจ้าง <br>
                <input id="parentOccupation" type="radio" name="parentOccupation" ="true" tabindex="parentOccupation" value="other1"  onchange="enableTxt1()" /> อื่นๆ
                <input id="other1" type="text" class="form-control" name="parentOccupation" ="true" tabindex="parentOccupation" value=""  disabled="disabled" placeholder="ระบุ" />
                  <script> // สคริปต์สำหรับการเปิดปิดช่องกรอกข้อมูล
                  function disableTxt1() {
                      document.getElementById("other1").disabled = true;
                  }
                  function enableTxt1() {
                      document.getElementById("other1").disabled = false;
                  }
                  </script>
                </div>
                   
              <div class="form-group col-md-6"><hr>
                <b>รายได้ของครอบครัวต่อปี</b> <br>
                <input type="radio" name="income"   value="น้อยกว่า 48,000 บาท" > น้อยกว่า 48,000 บาท 
                <br>
                <input type="radio" name="income"    value="48,000 - 71,999 บาท" > 48,000 - 71,999 บาท
                <br>
                <input type="radio" name="income"    value="72,000 บาทขึ้นไป" > 72,000 บาทขึ้นไป
                 
                </div><div class="form-group col-md-6"><hr>

                <b>รายได้กับรายจ่ายของครอบครัว</b> <br>
                <input type="radio" name="expenses"   value="เพียงพอ" > เพียงพอ
                <br>
                <input type="radio" name="expenses"    value="ไม่เพียงพอในบางครั้ง" > ไม่เพียงพอในบางครั้ง
                <br>
                <input type="radio" name="expenses"    value="ขัดสน" > ขัดสน
                
              </div>

              <div class="form-group col-md-6"><hr>
                <b>บุคคลในครอบครัวมีการใช้สารเสพติด</b> <br>
                <input  type="radio" name="drug" ="true" tabindex="drug" value="ไม่มี"  onchange="disableTxt2()"  /> ไม่มี <br>
                <input id="drug" type="radio" name="drug" ="true" tabindex="drug" value="บุหรี่"  onchange="disableTxt2()" /> บุหรี่ <br>
                <input id="drug" type="radio" name="drug" ="true" tabindex="drug" value="สุรา"  onchange="disableTxt2()" /> สุรา <br>
                </div><div class="form-group col-md-6"><hr><br>
                <input id="drug" type="radio" name="drug" ="true" tabindex="drug" value="ยาบ้า"  onchange="disableTxt2()" /> ยาบ้า <br>
                <input id="drug" type="radio" name="drug" ="true" tabindex="drug" value="other2"  onchange="enableTxt2()" /> อื่นๆ
                <input id="other2" type="text" class="form-control" name="drug" ="true" tabindex="drug" disabled="disabled" value=""  placeholder="ระบุ" />
                  <script> // สคริปต์สำหรับการเปิดปิดช่องกรอกข้อมูล
                  function disableTxt2() {
                      document.getElementById("other2").disabled = true;
                  }
                  function enableTxt2() {
                      document.getElementById("other2").disabled = false;
                  }
                  </script>
                </div>

              <div class="form-group col-md-6"><hr>
                <b>หน้าที่ที่รับผิดชอบที่บ้าน</b><br>
                <input type="radio" name="responsibilities"   value="ไม่มี" > ไม่มี
                <br>
                <input type="radio" name="responsibilities"    value="ทำครั้งคราว" > ทำครั้งคราว
                <br>
                <input type="radio" name="responsibilities"    value="ทำประจำ" > ทำประจำ
                
              </div>

              <div class="form-group col-md-6"><hr>
                <b>นักเรียนมีงานพิเศษทำ</b> <br>
                <input  type="radio" name="parttime" ="true" tabindex="parttime" value="ไม่มี" onchange="disableTxt4()"  /> ไม่มี <br>
                <input id="parttime" type="radio" name="parttime" ="true" tabindex="parttime" value="other4"  onchange="enableTxt4()" /> มี
                <input id="other4" type="text" class="form-control col-md-12" name="parttime" ="true" tabindex="parttime" disabled="disabled" value="" placeholder="ระบุรายได้ต่อวัน ต่อเดือน" />
                  <script> // สคริปต์สำหรับการเปิดปิดช่องกรอกข้อมูล
                  function disableTxt4() {
                      document.getElementById("other4").disabled = true;
                  }
                  function enableTxt4() {
                      document.getElementById("other4").disabled = false;
                  }
                  </script>
                </div>


              <div class="form-group col-md-6"><hr>
                <b>นักเรียนมาโรงเรียน</b><br>
                <input type="radio" name="vehicle"   value="เดิน" > เดิน
                <br>
                <input type="radio" name="vehicle"    value="รถจักยาน" > รถจักยาน
                <br>
                </div><div class="form-group col-md-6"><hr><br>
                <input type="radio" name="vehicle"    value="รถจักยานยนต์" > รถจักยานยนต์ 
                <input type="text"  name="motorcycle" value="" placeholder="ระบุทะเบียน">
                <br>
                <input type="radio" name="vehicle"    value="รถประจำทาง/รถประจำหมู่บ้าน" > รถประจำทาง/รถประจำหมู่บ้าน
                <br>
              </div>

              <div class="form-group col-md-6">
              <b>ระยะทางจากบ้านถึงโรงเรียน</b><br>
                <input type="text" class="form-control col-md-12" name="distance"  value="" placeholder="ระบุ/กิโลเมตร">
                </div>
              <div class="form-group col-md-6">
              <b>ใช้เวลาเดินทาง</b><br>
                <input type="text" class="form-control col-md-12" name="taketrip" value="" placeholder="ระบุ/นาที">
                </div>


              <div class="form-group col-md-12"><hr>
                <b>นักเรียนได้รับเงินมาโรงเรียนในแต่ละวัน</b> <br>
                <input  type="radio" name="moneytoSchool" ="true" tabindex="moneytoSchool" value="ไม่ได้เลย"  onchange="disableTxt5()" /> ไม่ได้เลย <br>
                <input id="moneytoSchool" type="radio" name="moneytoSchool" ="true" tabindex="moneytoSchool" value="ได้บางวัน" onchange="enableTxt5()" /> ได้บางวัน  <br>
                <input id="moneytoSchool" type="radio" name="moneytoSchool" ="true" tabindex="moneytoSchool" value="ได้ทุกวัน" onchange="enableTxt5()" /> ได้ทุกวัน
                <input id="other5" type="text" class="form-control col-md-12" name="money" ="true" tabindex="money" disabled="disabled" value="" placeholder="ระบุจำนวนเงินที่ได้มาโรงเรียน" />
                  <script> // สคริปต์สำหรับการเปิดปิดช่องกรอกข้อมูล
                  function disableTxt5() {
                      document.getElementById("other5").disabled = true;
                  }
                  function enableTxt5() {
                      document.getElementById("other5").disabled = false;
                  }
                  </script>
                </div>


              <div class="form-group col-md-6"><hr>
                <b>นักเรียนเข้านอนเวลา</b><br>
                <input type="radio" name="sleep"   value="ก่อน 22.00 น." > ก่อน 22.00 น.
                <br>
                <input type="radio" name="sleep"    value="22.00 - 24.00 น." > 22.00 - 24.00 น.
                <br>
                <input type="radio" name="sleep"    value="หลัง 24.00 น." > หลัง 24.00 น.
                

                </div><div class="form-group col-md-6"><hr>
                <b>นักเรียนตื่นนอนเวลา</b><br>
                <input type="radio" name="wakeUp"   value="ก่อน 05.00 น." > ก่อน 05.00 น.
                <br>
                <input type="radio" name="wakeUp"    value="05.00 - 06.00 น." > 05.00 - 06.00 น.
                <br>
                <input type="radio" name="wakeUp"    value="หลัง 06.00 น." > หลัง 06.00 น.
                
              </div>

              <div class="form-group col-md-6"><hr>
                <b>นักเรียนนอนค้างคืนบ้านเพื่อน/คนอื่น</b><br>
                <input type="radio" name="sleepover"   value="ไม่เคย" > ไม่เคย
                <br>
                <input type="radio" name="sleepover"    value="ครั้งคราว" > ครั้งคราว
                <br>
                <input type="radio" name="sleepover"    value="บ่อยครั้ง" > บ่อยครั้ง
                <br>
                <input type="radio" name="sleepover"    value="ประจำ" > ประจำ 
        


                </div><div class="form-group col-md-6"><hr>
                <b>นักเรียนเที่ยวกลางคืน</b><br>
                <input type="radio" name="nightOut"   value="ไม่เคย" > ไม่เคย
                <br>
                <input type="radio" name="nightOut"    value="ครั้งคราว" > ครั้งคราว
                <br>
                <input type="radio" name="nightOut"    value="บ่อยครั้ง" > บ่อยครั้ง 
                <br>
                <input type="radio" name="nightOut"    value="ประจำ" > ประจำ 

              </div>

              <div class="form-group col-md-6"><hr>
                <b>นักเรียนดูโทรทัศน์</b><br>
                <input type="radio" name="watchTV"   value="ไม่เคย" > ไม่เคย
                <br>
                <input type="radio" name="watchTV"    value="ครั้งคราว" > ครั้งคราว
                <br>
                <input type="radio" name="watchTV"    value="บ่อยครั้ง" > บ่อยครั้ง
                <br>
                <input type="radio" name="watchTV"    value="ประจำ" > ประจำ

                </div><div class="form-group col-md-6"><hr>
                <b>นักเรียนเล่นเกม</b><br>
                <input type="radio" name="playGame"   value="ไม่เคย" > ไม่เคย
                <br>
                <input type="radio" name="playGame"    value="ครั้งคราว" > ครั้งคราว
                <br>
                <input type="radio" name="playGame"    value="บ่อยครั้ง" > บ่อยครั้ง
                <br>
                <input type="radio" name="playGame"    value="ประจำ" > ประจำ
  
              </div>

              <div class="form-group col-md-12"><hr>
                <b>นักเรียนมีโทรศัพท์มือถือ</b><br>
                <input type="radio" name="havePhone"   value="ไม่มี" > ไม่มี
                <br>
                <input type="radio" name="havePhone"    value="มี" > มี
              </div>

              <div class="form-group col-md-6"><hr>
                <b>นักเรียนเข้ากับเพื่อนได้</b><br>
                <input type="radio" name="friendship"   value="ง่าย" > ง่าย
                <br>
                <input type="radio" name="friendship"    value="ค่อนข้างง่าย" > ค่อนข้างง่าย
                <br>
                <input type="radio" name="friendship"    value="ยาก" > ยาก 
                

                </div><div class="form-group col-md-6"><hr>
                <b>เมื่ออยู่ในกลุ่มเพื่อนนักเรียนมักจะ</b><br>
                <input type="radio" name="leadership"   value="ผู้นำ" > ผู้นำ
                <br>
                <input type="radio" name="leadership"    value="ผู้ตาม" >  ผู้ตาม
                <br>
                <input type="radio" name="leadership"    value="ผู้นำบางโอกาสผู้ตามบางโอกาส" >  ผู้นำบางโอกาสผู้ตามบางโอกาส

              </div>

              <div class="form-group col-md-6"><hr>
                <b>นักเรียนรู้สึกว่าโลกนี้</b><br>
                <input type="radio" name="longingforLife"   value="น่าอยู่" > น่าอยู่
                <br>
                <input type="radio" name="longingforLife"    value="ไม่น่าอยู่" > ไม่น่าอยู่
                
              </div>

              <div class="form-group col-md-6"><hr>
                <b>นักเรียนรู้สึกว่าตนเอง</b><br>
                <input type="radio" name="selfWorth"   value="มีค่า" > มีค่า
                <br>
                <input type="radio" name="selfWorth"    value="ไม่มีค่า" > ไม่มีค่า
                
              </div>

              <div class="form-group col-md-12"><hr>
                <b>ความต้องการของผู้ปกครองเมื่อเรียนจบชั้นสูงสุดของโรงเรียน</b> <br>
                <div>
                <input  type="radio" name="furtherEducation" ="true" tabindex="furtherEducation" value="ศึกษาต่อ" onchange="disableTxt3()" /> ศึกษาต่อ <br>
                <input id="furtherEducation" type="radio" name="furtherEducation" ="true" tabindex="furtherEducation" value="ประกอบอาชีพ" onchange="enableTxt3()" /> ประกอบอาชีพ
                <input id="other3" type="text" class="form-control" name="furtherEducation" ="true" tabindex="furtherEducation" disabled="disabled" placeholder="ระบุ" />
                  <script> // สคริปต์สำหรับการเปิดปิดช่องกรอกข้อมูล
                  function disableTxt3() {
                      document.getElementById("other3").disabled = true;
                  }
                  function enableTxt3() {
                      document.getElementById("other3").disabled = false;
                  }
                  </script>
                </div>
              </div>

              <div class="form-group col-md-12"><hr>
                  <label for="futureCareer">เมื่อโตขึ้นนักเรียนต้องการมีอาชีพ</label>
                  <input type="text" class="form-control" id="futureCareer" name="futureCareer" value=""> 
              </div>


              <div class="form-group col-md-6"><hr>
                <b>นักเรียนทำการบ้าน / อ่านหนังสือ</b><br>
                <input type="radio" name="homework"   value="ไม่เคย" > ไม่เคย
                <br>
                <input type="radio" name="homework"    value="บางครั้ง" > บางครั้ง
                <br>

                </div><div class="form-group col-md-6"><hr><br>
                <input type="radio" name="homework"    value="บ่อยครั้ง" > บ่อยครั้ง
                <br>
                <input type="radio" name="homework"    value="ประจำ" > ประจำ
                
              </div>

<?php
$studyConditions_arr = array("ไม่มีปัญหา","เรียนไม่เข้าใจ","เบื่อเรียนบางวิชา","อยากเลิกเรียน","เรียนไม่ทันเพื่อน","ต้องการให้เพื่อนช่วย","ต้องการครูที่เข้าใจและเป็นที่ปรึกษาได้");
?>
              <div class="form-group col-md-12"><hr>
                <b>การเรียนของนักเรียนในปัจจุบัน</b><br>
                
                <?php 
                $studyConditions=explode(",",$row8['studyConditions']);
                foreach($studyConditions_arr as $value){
                  if(in_array($value,$studyConditions)){
                    echo "<input type='checkbox' name='studyConditions[]' value='$value' checked>$value&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                  }else{
                    echo "<input type='checkbox' name='studyConditions[]' value='$value'>$value&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                }
              }
                ?>
                 
              </div>

              <div class="form-group col-md-6"><hr>
                <b>เมื่อมีปัญหาเกิดขึ้นนักเรียนมักจะ</b><br>
                <input type="radio" name="problemConsultant"   value="เก็บไว้คนเดียว" > เก็บไว้คนเดียว
                <br>
                <input type="radio" name="problemConsultant"    value="แก้ปัญหาด้วยตนเอง" > แก้ปัญหาด้วยตนเอง
                <br>
                <input type="radio" name="problemConsultant"    value="ปรึกษาเพื่อน" > ปรึกษาเพื่อน

                </div><div class="form-group col-md-6"><hr>
                <br>
                <input type="radio" name="problemConsultant"    value="ปรึกษาครู" > ปรึกษาครู
                <br>
                <input type="radio" name="problemConsultant"    value="ปรึกษาบิดามารดา / ผู้ปกครอง" > ปรึกษาบิดามารดา / ผู้ปกครอง
                
              </div>

<?php
$problem_arr = array("เรื่องครอบครัว","เรื่องการคบเพื่อน","เรื่องเศรษฐกิจ/ทุนการศึกษา","เรื่องการวางตัวในสังคม","เรื่องสุขภาพ","เรื่องการเลือกอาชีพ","เรื่องการเลือกศึกษาต่อ","เรื่องการปรับตัวเข้ากับครูในโรงเรียน");
?>

              <div class="form-group col-md-12"><hr>
                <b>ปัญหาที่นักเรียนกำลังประสบอยู่ในขณะนี้</b><br>
                <?php 
                $problem=explode(",",$row8['problem']);
                foreach($problem_arr as $value){
                  if(in_array($value,$problem)){
                    echo "<input type='checkbox' name='problem[]' value='$value' checked>$value&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                  }else{
                    echo "<input type='checkbox' name='problem[]' value='$value'>$value&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                }
              }
                ?><hr>
              </div>


<!-- ตารางคุณลักษณะ -->
<table class="table table-sm table-bordered table-hover w-100" align='center'>


               <thead class="thead-light">
                <tr align='center'>
                    <th align = ''>คุณลักษณะ</th> 
                    <th>ดี</th>
                    <th>ปานกลาง</th>
                    <th>ปรับปรุง</th>
                </tr>
                <tr>
                    <td>ความรับผิดชอบ</td>
                    <td align = 'center'><input type="radio" name="responsibility" value="ดี" ></td>
                    <td align = 'center'><input type="radio" name="responsibility" value="ปานกลาง" ></td>
                    <td align = 'center'><input type="radio" name="responsibility" value="ปรับปรุง" ></td>
                </tr>
                <tr>
                    <td>ความขยันหมั่นเพียร</td>
                    <td align = 'center'><input type="radio" name="diligence" value="ดี" ></td>
                    <td align = 'center'><input type="radio" name="diligence" value="ปานกลาง" ></td>
                    <td align = 'center'><input type="radio" name="diligence" value="ปรับปรุง" ></td>
                </tr>
                <tr>
                    <td>ความอดทน</td>
                    <td align = 'center'><input type="radio" name="patience" value="ดี" ></td>
                    <td align = 'center'><input type="radio" name="patience" value="ปานกลาง" ></td>
                    <td align = 'center'><input type="radio" name="patience" value="ปรับปรุง" ></td>
                </tr>

                <tr>
                    <td>ความมีระเบียบวินัย</td>
                    <td align = 'center'><input type="radio" name="discipline" value="ดี" ></td>
                    <td align = 'center'><input type="radio" name="discipline" value="ปานกลาง" ></td>
                    <td align = 'center'><input type="radio" name="discipline" value="ปรับปรุง" ></td>
                </tr>
                <tr>
                    <td>ความซื่อสัตย์</td>
                    <td align = 'center'><input type="radio" name="honesty" value="ดี" ></td>
                    <td align = 'center'><input type="radio" name="honesty" value="ปานกลาง" ></td>
                    <td align = 'center'><input type="radio" name="honesty" value="ปรับปรุง" ></td>
                </tr>
                <tr>
                    <td>ความมีน้ำใจ/เอื้ออาทร</td>
                    <td align = 'center'><input type="radio" name="kindness" value="ดี" ></td>
                    <td align = 'center'><input type="radio" name="kindness" value="ปานกลาง" ></td>
                    <td align = 'center'><input type="radio" name="kindness" value="ปรับปรุง" ></td>
                </tr>
                <tr>
                    <td>การตรงต่อเวลา</td>
                    <td align = 'center'><input type="radio" name="punctuality" value="ดี" ></td>
                    <td align = 'center'><input type="radio" name="punctuality" value="ปานกลาง" ></td>
                    <td align = 'center'><input type="radio" name="punctuality" value="ปรับปรุง" ></td>
                </tr>
                <tr>
                    <td>ความมั่นใจในตนเอง</td>
                    <td align = 'center'><input type="radio" name="selfconfidence" value="ดี" ></td>
                    <td align = 'center'><input type="radio" name="selfconfidence" value="ปานกลาง" ></td>
                    <td align = 'center'><input type="radio" name="selfconfidence" value="ปรับปรุง" ></td>
                </tr>
                <tr>
                    <td>การใฝ่หาความรู้</td>
                    <td align = 'center'><input type="radio" name="pursuingknowledge" value="ดี" ></td>
                    <td align = 'center'><input type="radio" name="pursuingknowledge" value="ปานกลาง" ></td>
                    <td align = 'center'><input type="radio" name="pursuingknowledge" value="ปรับปรุง" ></td>
                </tr>
                <tr>
                    <td>การใช้เวลาว่างให้เกิดประโยชน์</td>
                    <td align = 'center'><input type="radio" name="freetime" value="ดี" ></td>
                    <td align = 'center'><input type="radio" name="freetime" value="ปานกลาง" ></td>
                    <td align = 'center'><input type="radio" name="freetime" value="ปรับปรุง" ></td>
                </tr>
                </table>

<!-- ตารางคุณลักษณะ -->
                  <div class="form-group col-md-12">
                        <h6 class="my-2">อัพโหลดรูปภาพการเยี่ยมบ้านนักเรียน</h6>
                        <input type="file" name="file" class="form-control streched-link" accept="image/gif, image/jpeg, image/png">
                    </div>
                    
                    
                    

            <div class="form-group col-md-12"><hr>
                <label for="parentHelp">สิ่งที่ผู้ปกครองสามารถให้การสนับสนุนและช่วยเหลือโรงเรียน</label>
                <textarea class="form-control" id="parentHelp" name="parentHelp"  rows="2"></textarea>
            </div>

              <div class="form-group col-md-12"><hr>
                <label for="feedback">ข้อเสนอแนะ</label>
                <textarea class="form-control" id="feedback" name="feedback"  rows="2"> </textarea>
            </div>

              <div class="form-group col-md-12"><hr>
                <label for="summarize">สรุป</label>
                <textarea class="form-control" id="summarize" name="summarize"  rows="5"> </textarea>
            </div>
              
          </table>
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
  <!-- /.content- -->
  <!-- footer -->
</div>
<!-- ./ -->
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
