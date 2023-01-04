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
<!-- Site wrapper -->
<div class="wrapper" >
  <!-- Navbar & Main Sidebar Container -->
  <?php include_once('../includes/sidebar.php') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student Management</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content" >
      <!-- Default box -->
      <div class="card card-primary" > <!-- //เปลี่ยนสี -->
        <div class="card-header">
          <h3 class="card-title d-inline-block">เพิ่มข้อมูลการเยี่ยม</h3>
        </div>
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
                  <input type="date" class="form-control" id="homevisitDate" name="homevisitDate" value="<?php echo $row8['homevisitDate']?>" >
              </div>
              <div class="form-group col-md-6">
                  <label for="informant">ผู้ให้ข้อมูล</label>
                  <input type="text" class="form-control" id="informant" name="informant" value="<?php echo $row8['informant']?>">
              </div>
              <div class="form-group col-md-6">
                  <label for="homevisitAddress">ที่อยู่</label>
                  <input type="text" class="form-control" id="homevisitAddress" name="homevisitAddress" value="<?php echo $row8['homevisitAddress']?>">
              </div>
              <div class="form-group col-md-6">
                  <label for="familyMembers">สมาชิกในครอบครัว</label>
                  <input type="text" class="form-control" id="familyMembers" name="familyMembers" value="<?php echo $row8['familyMembers']?>"> 
              </div>
              <div class="form-group col-md-6">
                  <label for="mlat">ละติจูด</label>
                  <input type="text" class="form-control" id="mlat" name="mlat" value="<?php echo $row8['mlat']?>">
              </div>
              <div class="form-group col-md-6">
                  <label for="mlog">ลองติจูด</label>
                  <input type="text" class="form-control" id="mlog" name="mlog" value="<?php echo $row8['mlog']?>">
              </div>
              
            
              
<!-- create radio button -->
<!--  -->
              <div class="form-group col-md-6"><hr>
                <b>ความสัมพันธ์ของครอบครัว</b><br>
                <input type="radio" name="relationship"   value="รักใคร่กันดี"<?php if($row8['relationship']=="รักใคร่กันดี"){echo "checked";}?>> รักใคร่กันดี
                <br>
                <input type="radio" name="relationship"    value="ขัดแย้งทะเลาะกันบางครั้ง" <?php if($row8['relationship']=="ขัดแย้งทะเลาะกันบางครั้ง"){echo "checked";}?>> ขัดแย้งทะเลาะกันบางครั้ง
                <br>
                <input type="radio" name="relationship"    value="ขัดแย้งทะเลาะกันบ่อยครั้ง" <?php if($row8['relationship']=="ขัดแย้งทะเลาะกันบ่อยครั้ง"){echo "checked";}?>> ขัดแย้งทะเลาะกันบ่อยครั้ง
                </div>
                <div class="form-group col-md-6"><hr>
                <br>
                <input type="radio" name="relationship"    value="ขัดแย้งและทำร้ายร่างกายบางครั้ง" <?php if($row8['relationship']=="ขัดแย้งและทำร้ายร่างกายบางครั้ง"){echo "checked";}?>> ขัดแย้งและทำร้ายร่างกายบางครั้ง
                <br>
                <input type="radio" name="relationship"    value="ขัดแย้งและทำร้ายร่างกายบ่อยครั้ง" <?php if($row8['relationship']=="ขัดแย้งและทำร้ายร่างกายบ่อยครั้ง"){echo "checked";}?>> ขัดแย้งและทำร้ายร่างกายบ่อยครั้ง
                
                 
              </div>
              
              <div class="form-group col-md-6"><hr>
              <b>ปัจจุบันบิดามารดานักเรียน</b> <br>
                <input type="radio" name="parentStatus"   value="อยู่ด้วยกัน" <?php if($row8['parentStatus']=="อยู่ด้วยกัน"){echo "checked";}?>> อยู่ด้วยกัน
                <br>
                <input type="radio" name="parentStatus"    value="หย่าร้าง" <?php if($row8['parentStatus']=="หย่าร้าง"){echo "checked";}?>> หย่าร้าง
                <br>
                <input type="radio" name="parentStatus"    value="บิดาเสียชีวิต" <?php if($row8['parentStatus']=="บิดาเสียชีวิต"){echo "checked";}?>> บิดาเสียชีวิต
                <br>
                <input type="radio" name="parentStatus"    value="มารดาเสียชีวิต" <?php if($row8['parentStatus']=="มารดาเสียชีวิต"){echo "checked";}?>> มารดาเสียชีวิต
                </div><div class="form-group col-md-6"><hr>
                <br>
                <input type="radio" name="parentStatus"    value="บิดามารดาเสียชีวิต" <?php if($row8['parentStatus']=="บิดามารดาเสียชีวิต"){echo "checked";}?>> บิดามารดาเสียชีวิต
                <br>
                <input type="radio" name="parentStatus"    value="บิดาสมรสใหม่" <?php if($row8['parentStatus']=="บิดาสมรสใหม่"){echo "checked";}?>> บิดาสมรสใหม่
                <br>
                <input type="radio" name="parentStatus"    value="มารดาสมรสใหม่" <?php if($row8['parentStatus']=="มารดาสมรสใหม่"){echo "checked";}?>> มารดาสมรสใหม่
                <br>
                <input type="radio" name="parentStatus"    value="บิดามารดาสมรสใหม่" <?php if($row8['parentStatus']=="บิดามารดาสมรสใหม่"){echo "checked";}?>> บิดามารดาสมรสใหม่
                  
              </div>

              <div class="form-group col-md-6"><hr>
                <b>นักเรียนอาศัยอยู่กับ</b> <br>

                <input  type="radio" name="live" ="true" tabindex="live" value="ตามลำพัง" <?php if($row8['live']=="ตามลำพัง"){echo "checked";}?> onchange="disableTxt()"  /> ตามลำพัง <br>
                <input id="live" type="radio" name="live" ="true" tabindex="live" value="บิดามารดา" <?php if($row8['live']=="บิดามารดา"){echo "checked";}?> onchange="disableTxt()" /> บิดามารดา <br>
                <input id="live" type="radio" name="live" ="true" tabindex="live" value="บิดา" <?php if($row8['live']=="บิดา"){echo "checked";}?> onchange="disableTxt()" /> บิดา <br>
                </div><div class="form-group col-md-6"><hr><br>
                <input id="live" type="radio" name="live" ="true" tabindex="live" value="มารดา" <?php if($row8['live']=="มารดา"){echo "checked";}?> onchange="disableTxt()" /> มารดา <br>
                <input id="live" type="radio" name="live" ="true" tabindex="live" value="other" <?php if($row8['live']=="other"){echo "checked";}?>  onchange="enableTxt()" /> ญาติ
                <input id="other" type="text" class="form-control" name="live" ="true" tabindex="live" disabled="disabled" value="<?php echo $row8['live']?>" placeholder="ระบุ" />
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
                <input type="radio" name="nurture"   value="ตามใจ" <?php if($row8['nurture']=="ตามใจ"){echo "checked";}?>> ตามใจ
                <br>
                <input type="radio" name="nurture"    value="ใช้เหตุผล" <?php if($row8['nurture']=="ตามใช้เหตุผลใจ"){echo "checked";}?>>ใช้เหตุผล
                <br>
                </div><div class="form-group col-md-6"><hr><br>
                <input type="radio" name="nurture"    value="ปล่อยปละละเลย" <?php if($row8['nurture']=="ปล่อยปละละเลย"){echo "checked";}?>> ปล่อยปละละเลย
                <br>
                <input type="radio" name="nurture"    value="เข้มงวดกวดขัน" <?php if($row8['nurture']=="เข้มงวดกวดขัน"){echo "checked";}?>> เข้มงวดกวดขัน 
              </div>
                         
<!-- -->
              <div class="form-group col-md-6"><hr>
                <b>อาชีพของผู้ปกครอง</b> <br>
                <input  type="radio" name="parentOccupation" ="true" tabindex="parentOccupation" value="เกษตรกร" <?php if($row8['parentOccupation']=="เกษตรกร"){echo "checked";}?> onchange="disableTxt1()"  /> เกษตรกร <br>
                <input id="parentOccupation" type="radio" name="parentOccupation" ="true" tabindex="parentOccupation" value="ค้าขาย" <?php if($row8['parentOccupation']=="ค้าขาย"){echo "checked";}?> onchange="disableTxt1()" /> ค้าขาย <br>
                <input id="parentOccupation" type="radio" name="parentOccupation" ="true" tabindex="parentOccupation" value="รับราชการ" <?php if($row8['parentOccupation']=="รับราชการ"){echo "checked";}?> onchange="disableTxt1()" /> รับราชการ <br>
                </div><div class="form-group col-md-6"><hr><br>
                <input id="parentOccupation" type="radio" name="parentOccupation" ="true" tabindex="parentOccupation" value="รับจ้าง" <?php if($row8['parentOccupation']=="รับจ้าง"){echo "checked";}?> onchange="disableTxt1()" /> รับจ้าง <br>
                <input id="parentOccupation" type="radio" name="parentOccupation" ="true" tabindex="parentOccupation" value="other1" <?php if($row8['parentOccupation']=="other1"){echo "checked";}?> onchange="enableTxt1()" /> อื่นๆ
                <input id="other1" type="text" class="form-control" name="parentOccupation" ="true" tabindex="parentOccupation" value="<?php echo $row8['parentOccupation']?>"  disabled="disabled" placeholder="ระบุ" />
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
                <input type="radio" name="income"   value="น้อยกว่า 48,000 บาท" <?php if($row8['income']=="น้อยกว่า 48,000 บาท"){echo "checked";}?>> น้อยกว่า 48,000 บาท 
                <br>
                <input type="radio" name="income"    value="48,000 - 71,999 บาท" <?php if($row8['income']=="48,000 - 71,999 บาท"){echo "checked";}?>> 48,000 - 71,999 บาท
                <br>
                <input type="radio" name="income"    value="72,000 บาทขึ้นไป" <?php if($row8['income']=="72,000 บาทขึ้นไป"){echo "checked";}?>> 72,000 บาทขึ้นไป
                 
                </div><div class="form-group col-md-6"><hr>

                <b>รายได้กับรายจ่ายของครอบครัว</b> <br>
                <input type="radio" name="expenses"   value="เพียงพอ" <?php if($row8['expenses']=="เพียงพอ"){echo "checked";}?>> เพียงพอ
                <br>
                <input type="radio" name="expenses"    value="ไม่เพียงพอในบางครั้ง" <?php if($row8['expenses']=="ไม่เพียงพอในบางครั้ง"){echo "checked";}?>> ไม่เพียงพอในบางครั้ง
                <br>
                <input type="radio" name="expenses"    value="ขัดสน" <?php if($row8['expenses']=="ขัดสน"){echo "checked";}?>> ขัดสน
                
              </div>

              <div class="form-group col-md-6"><hr>
                <b>บุคคลในครอบครัวมีการใช้สารเสพติด</b> <br>
                <input  type="radio" name="drug" ="true" tabindex="drug" value="ไม่มี" <?php if($row8['drug']=="ไม่มี"){echo "checked";}?> onchange="disableTxt2()"  /> ไม่มี <br>
                <input id="drug" type="radio" name="drug" ="true" tabindex="drug" value="บุหรี่" <?php if($row8['drug']=="บุหรี่"){echo "checked";}?> onchange="disableTxt2()" /> บุหรี่ <br>
                <input id="drug" type="radio" name="drug" ="true" tabindex="drug" value="สุรา" <?php if($row8['drug']=="สุรา"){echo "checked";}?> onchange="disableTxt2()" /> สุรา <br>
                </div><div class="form-group col-md-6"><hr><br>
                <input id="drug" type="radio" name="drug" ="true" tabindex="drug" value="ยาบ้า" <?php if($row8['drug']=="ยาบ้า"){echo "checked";}?> onchange="disableTxt2()" /> ยาบ้า <br>
                <input id="drug" type="radio" name="drug" ="true" tabindex="drug" value="other2" <?php if($row8['drug']=="other2"){echo "checked";}?> onchange="enableTxt2()" /> อื่นๆ
                <input id="other2" type="text" class="form-control" name="drug" ="true" tabindex="drug" disabled="disabled" value="<?php echo $row8['drug']?>"  placeholder="ระบุ" />
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
                <input type="radio" name="responsibilities"   value="ไม่มี" <?php if($row8['responsibilities']=="ไม่มี"){echo "checked";}?>> ไม่มี
                <br>
                <input type="radio" name="responsibilities"    value="ทำครั้งคราว" <?php if($row8['responsibilities']=="ทำครั้งคราว"){echo "checked";}?>> ทำครั้งคราว
                <br>
                <input type="radio" name="responsibilities"    value="ทำประจำ" <?php if($row8['responsibilities']=="ทำประจำ"){echo "checked";}?>> ทำประจำ
                
              </div>

              <div class="form-group col-md-6"><hr>
                <b>นักเรียนมีงานพิเศษทำ</b> <br>
                <input  type="radio" name="parttime" ="true" tabindex="parttime" value="ไม่มี" onchange="disableTxt4()" <?php if($row8['parttime']=="ไม่มี"){echo "checked";}?> /> ไม่มี <br>
                <input id="parttime" type="radio" name="parttime" ="true" tabindex="parttime" value="other4" <?php if($row8['parttime']=="other4"){echo "checked";}?> onchange="enableTxt4()" /> มี
                <input id="other4" type="text" class="form-control col-md-12" name="parttime" ="true" tabindex="parttime" disabled="disabled" value="<?php echo $row8['parttime']?>" placeholder="ระบุรายได้ต่อวัน ต่อเดือน" />
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
                <input type="radio" name="vehicle"   value="เดิน" <?php if($row8['vehicle']=="เดิน"){echo "checked";}?>> เดิน
                <br>
                <input type="radio" name="vehicle"    value="รถจักยาน" <?php if($row8['vehicle']=="รถจักยาน"){echo "checked";}?>> รถจักยาน
                <br>
                </div><div class="form-group col-md-6"><hr><br>
                <input type="radio" name="vehicle"    value="รถจักยานยนต์" <?php if($row8['vehicle']=="รถจักยานยนต์"){echo "checked";}?>> รถจักยานยนต์ 
                <input type="text"  name="motorcycle" value="<?php echo $row8['motorcycle']?>" placeholder="ระบุทะเบียน">
                <br>
                <input type="radio" name="vehicle"    value="รถประจำทาง/รถประจำหมู่บ้าน" <?php if($row8['vehicle']=="รถประจำทาง/รถประจำหมู่บ้าน"){echo "checked";}?>> รถประจำทาง/รถประจำหมู่บ้าน
                <br>
              </div>

              <div class="form-group col-md-6">
              <b>ระยะทางจากบ้านถึงโรงเรียน</b><br>
                <input type="text" class="form-control col-md-12" name="distance"  value="<?php echo $row8['distance']?>" placeholder="ระบุ/กิโลเมตร">
                </div>
              <div class="form-group col-md-6">
              <b>ใช้เวลาเดินทาง</b><br>
                <input type="text" class="form-control col-md-12" name="taketrip" value="<?php echo $row8['taketrip']?>" placeholder="ระบุ/นาที">
                </div>


              <div class="form-group col-md-12"><hr>
                <b>นักเรียนได้รับเงินมาโรงเรียนในแต่ละวัน</b> <br>
                <input  type="radio" name="moneytoSchool" ="true" tabindex="moneytoSchool" value="ไม่ได้เลย" <?php if($row8['moneytoSchool']=="ไม่ได้เลย"){echo "checked";}?> onchange="disableTxt5()" /> ไม่ได้เลย <br>
                <input id="moneytoSchool" type="radio" name="moneytoSchool" ="true" tabindex="moneytoSchool" value="ได้บางวัน" <?php if($row8['moneytoSchool']=="ได้บางวัน"){echo "checked";}?> onchange="enableTxt5()" /> ได้บางวัน  <br>
                <input id="moneytoSchool" type="radio" name="moneytoSchool" ="true" tabindex="moneytoSchool" value="ได้ทุกวัน" <?php if($row8['moneytoSchool']=="ได้ทุกวัน"){echo "checked";}?> onchange="enableTxt5()" /> ได้ทุกวัน
                <input id="other5" type="text" class="form-control col-md-12" name="money" ="true" tabindex="money" disabled="disabled" value="<?php echo $row8['money']?>" placeholder="ระบุจำนวนเงินที่ได้มาโรงเรียน" />
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
                <input type="radio" name="sleep"   value="ก่อน 22.00 น." <?php if($row8['sleep']=="ก่อน 22.00 น."){echo "checked";}?>> ก่อน 22.00 น.
                <br>
                <input type="radio" name="sleep"    value="22.00 - 24.00 น." <?php if($row8['sleep']=="22.00 - 24.00 น."){echo "checked";}?>> 22.00 - 24.00 น.
                <br>
                <input type="radio" name="sleep"    value="หลัง 24.00 น." <?php if($row8['sleep']=="หลัง 24.00 น."){echo "checked";}?>> หลัง 24.00 น.
                

                </div><div class="form-group col-md-6"><hr>
                <b>นักเรียนตื่นนอนเวลา</b><br>
                <input type="radio" name="wakeUp"   value="ก่อน 05.00 น." <?php if($row8['wakeUp']=="ก่อน 05.00 น."){echo "checked";}?>> ก่อน 05.00 น.
                <br>
                <input type="radio" name="wakeUp"    value="05.00 - 06.00 น." <?php if($row8['wakeUp']=="05.00 - 06.00 น."){echo "checked";}?>> 05.00 - 06.00 น.
                <br>
                <input type="radio" name="wakeUp"    value="หลัง 06.00 น." <?php if($row8['wakeUp']=="หลัง 06.00 น."){echo "checked";}?>> หลัง 06.00 น.
                
              </div>

              <div class="form-group col-md-6"><hr>
                <b>นักเรียนนอนค้างคืนบ้านเพื่อน/คนอื่น</b><br>
                <input type="radio" name="sleepover"   value="ไม่เคย" <?php if($row8['sleepover']=="ไม่เคย"){echo "checked";}?>> ไม่เคย
                <br>
                <input type="radio" name="sleepover"    value="ครั้งคราว" <?php if($row8['sleepover']=="ครั้งคราว"){echo "checked";}?>> ครั้งคราว
                <br>
                <input type="radio" name="sleepover"    value="บ่อยครั้ง" <?php if($row8['sleepover']=="บ่อยครั้ง"){echo "checked";}?>> บ่อยครั้ง
                <br>
                <input type="radio" name="sleepover"    value="ประจำ" <?php if($row8['sleepover']=="ประจำ"){echo "checked";}?>> ประจำ 
        


                </div><div class="form-group col-md-6"><hr>
                <b>นักเรียนเที่ยวกลางคืน</b><br>
                <input type="radio" name="nightOut"   value="ไม่เคย" <?php if($row8['nightOut']=="ไม่เคย"){echo "checked";}?>> ไม่เคย
                <br>
                <input type="radio" name="nightOut"    value="ครั้งคราว" <?php if($row8['nightOut']=="ครั้งคราว"){echo "checked";}?>> ครั้งคราว
                <br>
                <input type="radio" name="nightOut"    value="บ่อยครั้ง" <?php if($row8['nightOut']=="บ่อยครั้ง"){echo "checked";}?>> บ่อยครั้ง 
                <br>
                <input type="radio" name="nightOut"    value="ประจำ" <?php if($row8['nightOut']=="ประจำ"){echo "checked";}?>> ประจำ 

              </div>

              <div class="form-group col-md-6"><hr>
                <b>นักเรียนดูโทรทัศน์</b><br>
                <input type="radio" name="watchTV"   value="ไม่เคย" <?php if($row8['watchTV']=="ไม่เคย"){echo "checked";}?>> ไม่เคย
                <br>
                <input type="radio" name="watchTV"    value="ครั้งคราว" <?php if($row8['watchTV']=="ครั้งคราว"){echo "checked";}?>> ครั้งคราว
                <br>
                <input type="radio" name="watchTV"    value="บ่อยครั้ง" <?php if($row8['watchTV']=="บ่อยครั้ง"){echo "checked";}?>> บ่อยครั้ง
                <br>
                <input type="radio" name="watchTV"    value="ประจำ" <?php if($row8['watchTV']=="ประจำ"){echo "checked";}?>> ประจำ


                </div><div class="form-group col-md-6"><hr>
                <b>นักเรียนเล่นเกม</b><br>
                <input type="radio" name="playGame"   value="ไม่เคย" <?php if($row8['playGame']=="ไม่เคย"){echo "checked";}?>> ไม่เคย
                <br>
                <input type="radio" name="playGame"    value="ครั้งคราว" <?php if($row8['playGame']=="ครั้งคราว"){echo "checked";}?>> ครั้งคราว
                <br>
                <input type="radio" name="playGame"    value="บ่อยครั้ง" <?php if($row8['playGame']=="บ่อยครั้ง"){echo "checked";}?>> บ่อยครั้ง
                <br>
                <input type="radio" name="playGame"    value="ประจำ" <?php if($row8['playGame']=="ประจำ"){echo "checked";}?>> ประจำ
  
              </div>

              <div class="form-group col-md-12"><hr>
                <b>นักเรียนมีโทรศัพท์มือถือ</b><br>
                <input type="radio" name="havePhone"   value="ไม่มี" <?php if($row8['havePhone']=="ไม่มี"){echo "checked";}?>> ไม่มี
                <br>
                <input type="radio" name="havePhone"    value="มี" <?php if($row8['havePhone']=="มี"){echo "checked";}?>> มี
              </div>

              <div class="form-group col-md-6"><hr>
                <b>นักเรียนเข้ากับเพื่อนได้</b><br>
                <input type="radio" name="friendship"   value="ง่าย" <?php if($row8['friendship']=="ง่าย"){echo "checked";}?>> ง่าย
                <br>
                <input type="radio" name="friendship"    value="ค่อนข้างง่าย" <?php if($row8['friendship']=="ค่อนข้างง่าย"){echo "checked";}?>> ค่อนข้างง่าย
                <br>
                <input type="radio" name="friendship"    value="ยาก" <?php if($row8['friendship']=="ยาก"){echo "checked";}?>> ยาก 
                

                </div><div class="form-group col-md-6"><hr>
                <b>เมื่ออยู่ในกลุ่มเพื่อนนักเรียนมักจะ</b><br>
                <input type="radio" name="leadership"   value="ผู้นำ" <?php if($row8['leadership']=="ผู้นำ"){echo "checked";}?>> ผู้นำ
                <br>
                <input type="radio" name="leadership"    value="ผู้ตาม" <?php if($row8['leadership']=="ผู้ตาม"){echo "checked";}?>>  ผู้ตาม
                <br>
                <input type="radio" name="leadership"    value="ผู้นำบางโอกาสผู้ตามบางโอกาส" <?php if($row8['leadership']=="ผู้นำบางโอกาสผู้ตามบางโอกาส"){echo "checked";}?>>  ผู้นำบางโอกาสผู้ตามบางโอกาส

              </div>

              <div class="form-group col-md-6"><hr>
                <b>นักเรียนรู้สึกว่าโลกนี้</b><br>
                <input type="radio" name="longingforLife"   value="น่าอยู่" <?php if($row8['longingforLife']=="น่าอยู่"){echo "checked";}?>> น่าอยู่
                <br>
                <input type="radio" name="longingforLife"    value="ไม่น่าอยู่" <?php if($row8['longingforLife']=="ไม่น่าอยู่"){echo "checked";}?>> ไม่น่าอยู่
                
              </div>

              <div class="form-group col-md-6"><hr>
                <b>นักเรียนรู้สึกว่าตนเอง</b><br>
                <input type="radio" name="selfWorth"   value="มีค่า" <?php if($row8['selfWorth']=="มีค่า"){echo "checked";}?>> มีค่า
                <br>
                <input type="radio" name="selfWorth"    value="ไม่มีค่า" <?php if($row8['selfWorth']=="ไม่มีค่า"){echo "checked";}?>> ไม่มีค่า
                
              </div>

              <div class="form-group col-md-12"><hr>
                <b>ความต้องการของผู้ปกครองเมื่อเรียนจบชั้นสูงสุดของโรงเรียน</b> <br>
                <div>
                <input  type="radio" name="furtherEducation" ="true" tabindex="furtherEducation" value="ศึกษาต่อ" onchange="disableTxt3()" checked="checked" /> ศึกษาต่อ <br>
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
                  <input type="text" class="form-control" id="futureCareer" name="futureCareer" value="<?php echo $row8['futureCareer']?>"> 
              </div>


              <div class="form-group col-md-6"><hr>
                <b>นักเรียนทำการบ้าน / อ่านหนังสือ</b><br>
                <input type="radio" name="homework"   value="ไม่เคย" <?php if($row8['homework']=="ไม่เคย"){echo "checked";}?>> ไม่เคย
                <br>
                <input type="radio" name="homework"    value="บางครั้ง" <?php if($row8['homework']=="บางครั้ง"){echo "checked";}?>> บางครั้ง
                <br>

                </div><div class="form-group col-md-6"><hr><br>
                <input type="radio" name="homework"    value="บ่อยครั้ง" <?php if($row8['homework']=="บ่อยครั้ง"){echo "checked";}?>> บ่อยครั้ง
                <br>
                <input type="radio" name="homework"    value="ประจำ" <?php if($row8['homework']=="ประจำ"){echo "checked";}?>> ประจำ
                
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
                <input type="radio" name="problemConsultant"   value="เก็บไว้คนเดียว" <?php if($row8['problemConsultant']=="เก็บไว้คนเดียว"){echo "checked";}?>> เก็บไว้คนเดียว
                <br>
                <input type="radio" name="problemConsultant"    value="แก้ปัญหาด้วยตนเอง" <?php if($row8['problemConsultant']=="แก้ปัญหาด้วยตนเอง"){echo "checked";}?>> แก้ปัญหาด้วยตนเอง
                <br>
                <input type="radio" name="problemConsultant"    value="ปรึกษาเพื่อน" <?php if($row8['problemConsultant']=="ปรึกษาเพื่อน"){echo "checked";}?>> ปรึกษาเพื่อน

                </div><div class="form-group col-md-6"><hr>
                <br>
                <input type="radio" name="problemConsultant"    value="ปรึกษาครู" <?php if($row8['problemConsultant']=="ปรึกษาครู"){echo "checked";}?>> ปรึกษาครู
                <br>
                <input type="radio" name="problemConsultant"    value="ปรึกษาบิดามารดา / ผู้ปกครอง" <?php if($row8['problemConsultant']=="ปรึกษาบิดามารดา / ผู้ปกครอง"){echo "checked";}?>> ปรึกษาบิดามารดา / ผู้ปกครอง
                
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
                    echo "<input type='checkbox' name='problem[]' value='$value' checked>$value&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                  }else{
                    echo "<input type='checkbox' name='problem[]' value='$value'>$value&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
                }
              }
                ?><hr>
              </div>


<!-- ตารางคุณลักษณะ -->
              <table class="table table-sm table-bordered table-hover w-50" align="center">
<?php 
  include_once('../../connect.php');
  $studentID=$_GET['studentID'];
  $sql1="select * from attribute where studentID = $studentID";
  $res8=mysqli_query($conn,$sql1);
  $row9=mysqli_fetch_assoc($res8);
?>
               <thead class="thead-light">
                <tr>
                    <th>คุณลักษณะ</th>
                    <th>ดี</th>
                    <th>ปานกลาง</th>
                    <th>ปรับปรุง</th>
                </tr>
                <tr>
                    <td>ความรับผิดชอบ</td>
                    <td align = 'center'><input type="radio" name="responsibility" value="ดี" <?php if($row9['responsibility']=="ดี"){echo "checked";}?>></td>
                    <td align = 'center'><input type="radio" name="responsibility" value="ปานกลาง" <?php if($row9['responsibility']=="ปานกลาง"){echo "checked";}?>></td>
                    <td align = 'center'><input type="radio" name="responsibility" value="ปรับปรุง" <?php if($row9['responsibility']=="ปรับปรุง"){echo "checked";}?>></td>
                </tr>
                <tr>
                    <td>ความขยันหมั่นเพียร</td>
                    <td align = 'center'><input type="radio" name="diligence" value="ดี" <?php if($row9['diligence']=="ดี"){echo "checked";}?>></td>
                    <td align = 'center'><input type="radio" name="diligence" value="ปานกลาง" <?php if($row9['diligence']=="ปานกลาง"){echo "checked";}?>></td>
                    <td align = 'center'><input type="radio" name="diligence" value="ปรับปรุง" <?php if($row9['diligence']=="ปรับปรุง"){echo "checked";}?>></td>
                </tr>
                <tr>
                    <td>ความอดทน</td>
                    <td align = 'center'><input type="radio" name="patience" value="ดี" <?php if($row9['patience']=="ดี"){echo "checked";}?>></td>
                    <td align = 'center'><input type="radio" name="patience" value="ปานกลาง" <?php if($row9['patience']=="ปานกลาง"){echo "checked";}?>></td>
                    <td align = 'center'><input type="radio" name="patience" value="ปรับปรุง" <?php if($row9['patience']=="ปรับปรุง"){echo "checked";}?>></td>
                </tr>

                <tr>
                    <td>ความมีระเบียบวินัย</td>
                    <td align = 'center'><input type="radio" name="discipline" value="ดี" <?php if($row9['discipline']=="ดี"){echo "checked";}?>></td>
                    <td align = 'center'><input type="radio" name="discipline" value="ปานกลาง" <?php if($row9['discipline']=="ปานกลาง"){echo "checked";}?>></td>
                    <td align = 'center'><input type="radio" name="discipline" value="ปรับปรุง" <?php if($row9['discipline']=="ปรับปรุง"){echo "checked";}?>></td>
                </tr>
                <tr>
                    <td>ความซื่อสัตย์</td>
                    <td align = 'center'><input type="radio" name="honesty" value="ดี" <?php if($row9['honesty']=="ดี"){echo "checked";}?>></td>
                    <td align = 'center'><input type="radio" name="honesty" value="ปานกลาง" <?php if($row9['honesty']=="ปานกลาง"){echo "checked";}?>></td>
                    <td align = 'center'><input type="radio" name="honesty" value="ปรับปรุง" <?php if($row9['honesty']=="ปรับปรุง"){echo "checked";}?>></td>
                </tr>
                <tr>
                    <td>ความมีน้ำใจ/เอื้ออาทร</td>
                    <td align = 'center'><input type="radio" name="kindness" value="ดี" <?php if($row9['kindness']=="ดี"){echo "checked";}?>></td>
                    <td align = 'center'><input type="radio" name="kindness" value="ปานกลาง" <?php if($row9['kindness']=="ปานกลาง"){echo "checked";}?>></td>
                    <td align = 'center'><input type="radio" name="kindness" value="ปรับปรุง" <?php if($row9['kindness']=="ปรับปรุง"){echo "checked";}?>></td>
                </tr>
                <tr>
                    <td>การตรงต่อเวลา</td>
                    <td align = 'center'><input type="radio" name="punctuality" value="ดี" <?php if($row9['punctuality']=="ดี"){echo "checked";}?>></td>
                    <td align = 'center'><input type="radio" name="punctuality" value="ปานกลาง" <?php if($row9['punctuality']=="ปานกลาง"){echo "checked";}?>></td>
                    <td align = 'center'><input type="radio" name="punctuality" value="ปรับปรุง" <?php if($row9['punctuality']=="ปรับปรุง"){echo "checked";}?>></td>
                </tr>
                <tr>
                    <td>ความมั่นใจในตนเอง</td>
                    <td align = 'center'><input type="radio" name="selfconfidence" value="ดี" <?php if($row9['selfconfidence']=="ดี"){echo "checked";}?>></td>
                    <td align = 'center'><input type="radio" name="selfconfidence" value="ปานกลาง" <?php if($row9['selfconfidence']=="ปานกลาง"){echo "checked";}?>></td>
                    <td align = 'center'><input type="radio" name="selfconfidence" value="ปรับปรุง" <?php if($row9['selfconfidence']=="ปรับปรุง"){echo "checked";}?>></td>
                </tr>
                <tr>
                    <td>การใฝ่หาความรู้</td>
                    <td align = 'center'><input type="radio" name="pursuingknowledge" value="ดี" <?php if($row9['pursuingknowledge']=="ดี"){echo "checked";}?>></td>
                    <td align = 'center'><input type="radio" name="pursuingknowledge" value="ปานกลาง" <?php if($row9['pursuingknowledge']=="ปานกลาง"){echo "checked";}?>></td>
                    <td align = 'center'><input type="radio" name="pursuingknowledge" value="ปรับปรุง" <?php if($row9['pursuingknowledge']=="ปรับปรุง"){echo "checked";}?>></td>
                </tr>
                <tr>
                    <td>การใช้เวลาว่างให้เกิดประโยชน์</td>
                    <td align = 'center'><input type="radio" name="freetime" value="ดี" <?php if($row9['freetime']=="ดี"){echo "checked";}?>></td>
                    <td align = 'center'><input type="radio" name="freetime" value="ปานกลาง" <?php if($row9['freetime']=="ปานกลาง"){echo "checked";}?>></td>
                    <td align = 'center'><input type="radio" name="freetime" value="ปรับปรุง" <?php if($row9['freetime']=="ปรับปรุง"){echo "checked";}?>></td>
                </tr>
                </table>

<!-- ตารางคุณลักษณะ -->
                  <div class="form-group col-md-12">
                        <h6 class="my-2">อัพโหลดรูปภาพการเยี่ยมบ้านนักเรียน</h6>
                        <input type="file" name="file" class="form-control streched-link" accept="image/gif, image/jpeg, image/png">
                        <td><img src="../upload/<?php echo $row8['file']?>" class="img-fluid d-block mx-auto "  width="50%"></td>
                    </div>
                    
                    
                    

            <div class="form-group col-md-12"><hr>
                <label for="parentHelp">สิ่งที่ผู้ปกครองสามารถให้การสนับสนุนและช่วยเหลือโรงเรียน</label>
                <textarea class="form-control" id="parentHelp" name="parentHelp"  rows="2"> <?php echo $row8['parentHelp']?></textarea>
            </div>

              <div class="form-group col-md-12"><hr>
                <label for="feedback">ข้อเสนอแนะ</label>
                <textarea class="form-control" id="feedback" name="feedback"  rows="2"> <?php echo $row8['feedback']?></textarea>
            </div>

              <div class="form-group col-md-12"><hr>
                <label for="summarize">สรุป</label>
                <textarea class="form-control" id="summarize" name="summarize"  rows="5"> <?php echo $row8['summarize']?></textarea>
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
