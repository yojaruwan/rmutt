<?php 
require_once 'checkrole.php';
$ownerid = $_SESSION['id'];
$date = $_POST['date'];
$time = $_POST['time'];
if($ownerid=="" OR $date=="" OR $time==""){
    echo "<script>";
    echo "alert('คุณกรอกข้อมูลไม่ครบถ้วน');";
    echo "window.location.href='meetdoctor.php'";
    echo "</script>";

}else{
    require_once 'dbconfig.php';
    $newmeet = $conn->query("INSERT INTO meetdr (date,time,ownerid,status) VALUES ('$date','$time','$ownerid',0)");
    if($newmeet){
        echo "<script>";
        echo "alert('จองเรียบร้อยแล้ว กรุณารออนุมัติจากแพทย์');";
        echo "window.location.href='meetdoctor.php'";
        echo "</script>";
    }else{
        echo "<script>";
        echo "alert('ไม่สามารถจองได้ กรุณาติดต่อ admin');";
        echo "window.location.href='meetdoctor.php'";
        echo "</script>";
    }
}


?>