<?php 
    require_once('../../connect.php');
    //echo '<pre>',print_r ($_POST),'<pre>';
    if(isset($_POST['submit'])){ //ถ้ามีการกดปุ่ม submit ให้ทำงาน ถ้าไม่มีก็ไม่ทำงาน 
        //echo '<pre>',print_r ($_FILES['file']),'<pre>';

        $studentID=$_POST['studentID'];

        $sql="INSERT INTO `homevisit` (`studentID`) VALUES ('$studentID')";
        $res= $conn->query($sql) or die($conn->error);  
    }   
?>
<?php 
include_once('../../connect.php');
?>
<?php

//echo '<pre>',print_r ($_POST),'<pre>';
$studentID=$_POST['studentID'];
$homevisitDate=$_POST['homevisitDate'];
$informant=$_POST['informant'];
$homevisitAddress=$_POST['homevisitAddress'];
$mlat=$_POST['mlat'];
$mlog=$_POST['mlog'];
$familyMembers=$_POST['familyMembers'];
$relationship=$_POST['relationship'];
$parentStatus=$_POST['parentStatus'];
$live=$_POST['live'];
$nurture=$_POST['nurture'];
$parentOccupation=$_POST['parentOccupation'];
$income=$_POST['income'];
$expenses=$_POST['expenses'];
$drug=$_POST['drug'];
$responsibilities=$_POST['responsibilities'];
$parttime=$_POST['parttime'];
$vehicle=$_POST['vehicle'];
$motorcycle=$_POST['motorcycle'];
$distance=$_POST['distance'];
$taketrip=$_POST['taketrip'];
$moneytoSchool=$_POST['moneytoSchool'];
$money=$_POST['money'];
$sleep=$_POST['sleep'];
$wakeUp=$_POST['wakeUp'];
$sleepover=$_POST['sleepover'];
$nightOut=$_POST['nightOut'];
$watchTV=$_POST['watchTV'];
$playGame=$_POST['playGame'];
$havePhone=$_POST['havePhone'];
$friendship=$_POST['friendship'];
$leadership=$_POST['leadership'];
$longingforLife=$_POST['longingforLife'];
$selfWorth=$_POST['selfWorth'];
$furtherEducation=$_POST['furtherEducation'];
$futureCareer=$_POST['futureCareer'];
$homework=$_POST['homework'];
$studyConditions[]=implode(',',$_POST['studyConditions']);
$studyConditions=implode(',',$studyConditions);
$problemConsultant=$_POST['problemConsultant'];
$problem[]=implode(',',$_POST['problem']);
$problem=implode(',',$problem);

$file=$_POST['file'];
$dir = "../upload/";
$fileImage = $dir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $fileImage)) {
    echo "ไฟล์ชื่อ ". basename( $_FILES["file"]["name"]). " เสร็จ.";
} else {
    echo "Sorry,";
}

//echo '<pre>',print_r ($_FILES),'<pre>';


$sql="UPDATE homevisit SET homevisitDate='$homevisitDate',informant='$informant',homevisitAddress='$homevisitAddress',mlat='$mlat',mlog='$mlog',familyMembers='$familyMembers',relationship='$relationship',parentStatus='$parentStatus',live='$live',nurture='$nurture',parentOccupation='$parentOccupation',income='$income',expenses='$expenses',drug='$drug',responsibilities='$responsibilities',parttime='$parttime',vehicle='$vehicle',motorcycle='$motorcycle',distance='$distance',taketrip='$taketrip',moneytoSchool='$moneytoSchool',money='$money',sleep='$sleep',wakeUp='$wakeUp',sleepover='$sleepover',nightOut='$nightOut',watchTV='$watchTV',playGame='$playGame',havePhone='$havePhone',friendship='$friendship',leadership='$leadership',longingforLife='$longingforLife',selfWorth='$selfWorth',furtherEducation='$furtherEducation',futureCareer='$futureCareer',homework='$homework',studyConditions='$studyConditions',problemConsultant='$problemConsultant',problem='$problem',file='$fileImage',parentHelp='$parentHelp',feedback='$feedback',summarize='$summarize' WHERE studentID='$studentID'";
$res= $conn->query($sql) or die($conn->error);
?>

<?php 
    require_once('../../connect.php');
    //echo '<pre>',print_r ($_POST),'<pre>';
    if(isset($_POST['submit'])){ 
        $studentID=$_POST['studentID'];

        $sql="INSERT INTO `attribute` (`studentID`) VALUES ('$studentID')";
        $res= $conn->query($sql) or die($conn->error);  
    }   
?>
<?php

//echo '<pre>',print_r ($_POST),'<pre>';
$studentID=$_POST['studentID'];
$responsibility=$_POST['responsibility'];
$diligence=$_POST['diligence'];
$patience=$_POST['patience'];
$discipline=$_POST['discipline'];
$honesty=$_POST['honesty'];
$kindness=$_POST['kindness'];
$punctuality=$_POST['punctuality'];
$selfconfidence=$_POST['selfconfidence'];
$pursuingknowledge=$_POST['pursuingknowledge'];
$freetime=$_POST['freetime'];


$sql="UPDATE attribute SET responsibility='$responsibility',diligence='$diligence',patience='$patience',discipline='$discipline',honesty='$honesty',kindness='$kindness',punctuality='$punctuality',selfconfidence='$selfconfidence',pursuingknowledge='$pursuingknowledge',freetime='$freetime' WHERE studentID='$studentID'";
$res= $conn->query($sql) or die($conn->error);
?>

