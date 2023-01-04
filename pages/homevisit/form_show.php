
<?php //นักเรียน
  include_once('../../connect.php');
  $studentID=$_GET['studentID'];
  $sql1="select * from student where studentID = $studentID";
  $res1=mysqli_query($conn,$sql1);
  $row1=mysqli_fetch_assoc($res1);
  $class=$row1['class'];
  $room1=$row1['room1'];
?>
<?php //เยี่ยมบ้าน
  include_once('../../connect.php');
  $studentID=$_GET['studentID'];
  $sql1="select * from homevisit where studentID = $studentID";
  $res8=mysqli_query($conn,$sql1);
  $row8=mysqli_fetch_assoc($res8);
?>
<?php //คุณลักษณะ
  include_once('../../connect.php');
  $studentID=$_GET['studentID'];
  $sql1="select * from attribute where studentID = $studentID";
  $res8=mysqli_query($conn,$sql1);
  $row9=mysqli_fetch_assoc($res8);
?>
<style>
.successa {
 
 color: #fff;

 background-color: #28a745;
 border-radius: 35px;

 padding:5px;
}
.infos {
 
 color: #fff;
 background-color: #17a2b8;
 border-radius: 35px;
 border: 1px solid rgba(23, 162, 184, 0.75); 
 padding:5px;

}

</style>
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
<section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-6 col-xl-12">
        <div class="card rounded-3">
          <div class="card-body p-4 p-md-5">
          <?php

require_once __DIR__ . '/vendor/autoload.php';
$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . 'tmp',
    ]),
    'fontdata' => $fontData + [ // lowercase letters only in font key
        'sarabun' => [
            'R' => 'THSarabunNew.ttf',
            'I' => 'THSarabunNew Italic.ttf',
            'B' => 'THSarabunNew Bold.ttf',
            'BI' => 'THSarabunNew BoldItalic.ttf',
        ]
    ],
    'default_font' => 'sarabun'
]);
ob_start();

?>
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2 text-center">แบบบันทึกการเยี่ยมบ้านนักเรียน</h3>

            <form class="px-md-2">
                <center><img src="../upload/<?php echo $row8['file']?>" class=""  width="50%"></center><br>
            <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                <div class="col-md-12">
                <label>ข้อมูลทั่วไป</label><br>
                </div>
                <div class="col-md-6">
                    <a>รหัสนักเรียน : </a>
                    <a><?php echo $row1['studentID']?></a>
                </div>
                <div class="col-md-6">
                    <a>ชื่อ-สกุล : </a>
                    <a><?php echo $row1['studentName']?></a>
                </div>
                <div class="col-md-6">
                    <a>เพศ : </a>
                    <a><?php echo $row1['studentSex']?></a>
                </div>
                <div class="col-md-6">
                    <a>ห้อง : </a>
                    <a><?php echo $row1['class']?></a>
                </div>
                <div class="col-md-6">
                    <a>ชั้น : </a>
                    <a><?php echo $row1['room1']?></a>
                </div>
                <div class="col-md-6">
                    <a>เบอร์โทร : </a>
                    <a><?php echo $row1['studentPhone']?></a>
                </div>
                <div class="col-md-12">
                    <a>ที่อยู่ : </a>
                    <a><?php echo $row1['studentAddress']?></a>
                </div>
                <div class="col-md-6">
                    <a>ละติจูด : </a>
                    <a><?php echo $row8['mlat']?></a>
                </div>
                <div class="col-md-6">
                    <a>ลองติจูด : </a>
                    <a><?php echo $row8['mlog']?></a>
                </div>
            </div>
            <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                <div class="col-md-12">
                <label>ข้อมูลการเยี่ยมบ้าน</label><br>
                </div>
                <div class="col-md-6">
                    <a>วันที่เยี่ยมบ้าน : </a>
                    <a><?php echo $row8['homevisitDate']?></a>
                </div>
                <div class="col-md-6">
                    <a>ผู้ให้ข้อมูล : </a>
                    <a><?php echo $row8['informant']?></a>
                </div>
                <div class="col-md-6">
                    <a>ที่อยู่ : </a>
                    <a><?php echo $row8['homevisitAddress']?></a>
                </div>
                <div class="col-md-6">
                    <a>สมาชิกในครอบครัว : </a>
                    <a><?php echo $row8['familyMembers']?></a> คน
                </div>
                <div class="col-md-6">
                    <a>ความสัมพันธ์ของครอบครัว : </a>
                    <a><?php echo $row8['relationship']?></a>
                </div>
                <div class="col-md-6">
                    <a>ปัจจุบันบิดามารดานักเรียน : </a>
                    <a><?php echo $row8['parentStatus']?></a>
                </div>
                <div class="col-md-6">
                    <a>นักเรียนอาศัยอยู่กับ : </a>
                    <a><?php echo $row8['live']?></a>
                </div>
                <div class="col-md-6">
                    <a>นักเรียนได้รับการอบรมเลี้ยงดู : </a>
                    <a><?php echo $row8['nurture']?></a>
                </div>
                <div class="col-md-6">
                    <a>อาชีพของผู้ปกครอง : </a>
                    <a><?php echo $row8['parentOccupation']?></a>
                </div>
                <div class="col-md-6">
                    <a>รายได้ของครอบครัวต่อปี : </a>
                    <a><?php echo $row8['income']?></a>
                </div>
                <div class="col-md-6">
                    <a>รายได้กับรายจ่ายของครอบครัว : </a>
                    <a><?php echo $row8['expenses']?></a>
                </div>
                <div class="col-md-6">
                    <a>บุคคลในครอบครัวมีการใช้สารเสพติด : </a>
                    <a><?php echo $row8['drug']?></a>
                </div>
                <div class="col-md-6">
                    <a>หน้าที่ที่รับผิดชอบที่บ้าน : </a>
                    <a><?php echo $row8['responsibilities']?></a>
                </div>
                <div class="col-md-6">
                    <a>นักเรียนมีงานพิเศษทำ : </a>
                    <a><?php echo $row8['parttime']?></a>
                </div>
                <div class="col-md-6">
                    <a>นักเรียนมาโรงเรียน : </a>
                    <a><?php echo $row8['vehicle']?></a><br>
                    <a>ทะเบียนรถ <?php echo $row8['motorcycle']?></a>
                </div>
                <div class="col-md-6">
                    <a>ระยะทางจากบ้านถึงโรงเรียน : </a>
                    <a><?php echo $row8['distance']?></a> กิโลเมตร
                </div>
                <div class="col-md-6">
                    <a>ใช้เวลาเดินทาง : </a>
                    <a><?php echo $row8['taketrip']?></a> นาที
                </div>
                <div class="col-md-6">
                    <a>นักเรียนได้รับเงินมาโรงเรียนในแต่ละวัน : </a>
                    <a><?php echo $row8['moneytoSchool']?></a>
                    <a><?php echo $row8['money']?></a> บาท
                </div>
                <div class="col-md-6">
                    <a>นักเรียนเข้านอนเวลา : </a>
                    <a><?php echo $row8['sleep']?></a>
                </div>
                <div class="col-md-6">
                    <a>นักเรียนตื่นนอนเวลา : </a>
                    <a><?php echo $row8['wakeUp']?></a>
                </div>
                <div class="col-md-6">
                    <a>นักเรียนนอนค้างคืนบ้านเพื่อน/คนอื่น : </a>
                    <a><?php echo $row8['sleepover']?></a>
                </div>
                <div class="col-md-6">
                    <a>นักเรียนเที่ยวกลางคืน : </a>
                    <a><?php echo $row8['nightOut']?></a>
                </div>
                <div class="col-md-6">
                    <a>นักเรียนดูโทรทัศน์ : </a>
                    <a><?php echo $row8['watchTV']?></a>
                </div>
                <div class="col-md-6">
                    <a>นักเรียนเล่นเกม : </a>
                    <a><?php echo $row8['playGame']?></a>
                </div>
                <div class="col-md-6">
                    <a>นักเรียนมีโทรศัพท์มือถือ : </a>
                    <a><?php echo $row8['havePhone']?></a>
                </div>
                <div class="col-md-6">
                    <a>นักเรียนเข้ากับเพื่อนได้ : </a>
                    <a><?php echo $row8['friendship']?></a>
                </div>
                <div class="col-md-6">
                    <a>เมื่ออยู่ในกลุ่มเพื่อนนักเรียนมักจะ : </a>
                    <a><?php echo $row8['leadership']?></a>
                </div>
                <div class="col-md-6">
                    <a>นักเรียนรู้สึกว่าโลกนี้ : </a>
                    <a><?php echo $row8['longingforLife']?></a>
                </div>
                <div class="col-md-6">
                    <a>นักเรียนรู้สึกว่าตนเอง : </a>
                    <a><?php echo $row8['selfWorth']?></a>
                </div>
                <div class="col-md-6">
                    <a>ความต้องการของผู้ปกครองเมื่อเรียนจบชั้นสูงสุดของโรงเรียน : </a>
                    <a><?php echo $row8['furtherEducation']?></a>
                </div>
                <div class="col-md-6">
                    <a>เมื่อโตขึ้นนักเรียนต้องการมีอาชีพ : </a>
                    <a><?php echo $row8['futureCareer']?></a>
                </div>
                <div class="col-md-6">
                    <a>นักเรียนทำการบ้าน / อ่านหนังสือ : </a>
                    <a><?php echo $row8['homework']?></a>
                </div>
                <div class="col-md-6">
                    <a>การเรียนของนักเรียนในปัจจุบัน : </a>
                    <a><?php echo $row8['studyConditions']?></a>
                </div>
                <div class="col-md-6">
                    <a>เมื่อมีปัญหาเกิดขึ้นนักเรียนมักจะ : </a>
                    <a><?php echo $row8['problemConsultant']?></a>
                </div>
                <div class="col-md-6">
                    <a>ปัญหาที่นักเรียนกำลังประสบอยู่ในขณะนี้ : </a>
                    <a><?php echo $row8['problem']?></a>
                </div>
                <div class="col-md-6">
                    <a>สิ่งที่ผู้ปกครองสามารถให้การสนับสนุนและช่วยเหลือโรงเรียน : </a>
                    <a><?php echo $row8['parentHelp']?></a>
                </div>
                <div class="col-md-6">
                    <a>ข้อเสนอแนะ : </a>
                    <a><?php echo $row8['feedback']?></a>
                </div>
                <div class="col-md-6">
                    <a>สรุป : </a>
                    <a><?php echo $row8['summarize']?></a>
                </div>
            </div>

            <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                <div class="col-md-12">
                <label>คุณลักษณะ</label><br>
                </div>
                <div class="col-md-6">
                    <a>ความรับผิดชอบ : </a>
                    <a><?php echo $row9['responsibility']?></a>
                </div>
                <div class="col-md-6">
                    <a>ความขยันหมั่นเพียร : </a>
                    <a><?php echo $row9['diligence']?></a>
                </div>
                <div class="col-md-6">
                    <a>ความอดทน : </a>
                    <a><?php echo $row9['patience']?></a>
                </div>
                <div class="col-md-6">
                    <a>ความมีระเบียบวินัย : </a>
                    <a><?php echo $row9['discipline']?></a>
                </div>
                <div class="col-md-6">
                    <a>ความซื่อสัตย์ : </a>
                    <a><?php echo $row9['honesty']?></a>
                </div>
                <div class="col-md-6">
                    <a>ความมีน้ำใจ/เอื้ออาทร : </a>
                    <a><?php echo $row9['kindness']?></a>
                </div>
                <div class="col-md-6">
                    <a>การตรงต่อเวลา : </a>
                    <a><?php echo $row9['punctuality']?></a>
                </div>
                <div class="col-md-6">
                    <a>ความมั่นใจในตนเอง : </a>
                    <a><?php echo $row9['selfconfidence']?></a>
                </div>
                <div class="col-md-6">
                    <a>การใฝ่หาความรู้ : </a>
                    <a><?php echo $row9['pursuingknowledge']?></a>
                </div>
                <div class="col-md-6">
                    <a>การใช้เวลาว่างให้เกิดประโยชน์ : </a>
                    <a><?php echo $row9['freetime']?></a>
                </div>
            </div>
            <?php 
    $html=ob_get_contents();
    $mpdf->WriteHTML($html);
    $mpdf->Output("report.pdf");
    ob_end_flush();
?>
        <center><a href="index.php" class="btn btn-md btn-info text-black">
                    <i class="fas fa-home"></i> กลับหน้าหลัก
                  </a>
                  <a href="report.pdf" class="btn btn-md btn-Danger text-black">
                    <i class="fas fa-file-pdf"></i> ดาวน์โหลด
                  </a>
                </center>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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
</body>
</html>
