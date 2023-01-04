<?php 
    require_once('../../connect.php');
    //echo '<pre>',print_r ($_POST),'<pre>';
    if(isset($_POST['submit'])){ //ถ้ามีการกดปุ่ม submit ให้ทำงาน ถ้าไม่มีก็ไม่ทำงาน 
        //echo '<pre>',print_r ($_FILES['file']),'<pre>';

        //echo '<pre>',print_r ($_POST),'<pre>';
        $studentID=$_POST['studentID'];
        $homevisitDate=$_POST['homevisitDate'];
        $informant=$_POST['informant'];
        $homevisitAddress=$_POST['homevisitAddress'];
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
        $parentHelp=$_POST['parentHelp'];
        $feedback=$_POST['feedback'];
        $summarize=$_POST['summarize'];
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


        $file=$_POST['file'];
        $dir = "../upload/";
        $fileImage = $dir . basename($_FILES["file"]["name"]);

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $fileImage)) {
            //echo "ไฟล์ชื่อ ". basename( $_FILES["file"]["name"]). " เสร็จ.";
        } else {
            //echo "Sorry,";
        }

        

        $sql="INSERT INTO homevisit (studentID,homevisitDate,informant,homevisitAddress,familyMembers,relationship,parentStatus,live,nurture,parentOccupation,income,expenses,drug,responsibilities,parttime,vehicle,motorcycle,distance,taketrip,moneytoSchool,money,sleep,wakeUp,sleepover,nightOut,watchTV,playGame,havePhone,friendship,leadership,longingforLife,selfWorth,furtherEducation,futureCareer,homework,studyConditions,problemConsultant,problem,parentHelp,feedback,summarize,responsibility,diligence,patience,discipline,honesty,kindness,punctuality,selfconfidence,pursuingknowledge,freetime,file) VALUES ('$studentID','$homevisitDate','$informant','$homevisitAddress','$familyMembers','$relationship','$parentStatus','$live','$nurture','$parentOccupation','$income','$expenses','$drug','$responsibilities','$parttime','$vehicle','$motorcycle','$distance','$taketrip','$moneytoSchool','$money','$sleep','$wakeUp','$sleepover','$nightOut','$watchTV','$playGame','$havePhone','$friendship','$leadership','$longingforLife','$selfWorth','$furtherEducation','$futureCareer','$homework','$studyConditions','$problemConsultant','$problem','$parentHelp','$feedback','$summarize','$responsibility','$diligence','$patience','$discipline','$honesty','$kindness','$punctuality','$selfconfidence','$pursuingknowledge','$freetime','$fileImage')";
        $res= $conn->query($sql) or die($conn->error);
        echo '<pre>',print_r ($sql),'<pre>';
        if($res){
            echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');window.location='index_homevisit.php';</script>";
        }else{
            echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');window.location='index_homevisit.php';</script>";
        }
    }
    ?>
        



