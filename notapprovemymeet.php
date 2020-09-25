<?php 
$id = $_GET['id'];
if($id==""){
    header("location: meetdoctor.php");
}else{
    require_once 'dbconfig.php';
    $sql = $conn->query("UPDATE meetdr SET status='2' Where id='$id'");
    if($sql){
        echo "<script>";
        echo "alert('ปฏิเสธการจองแล้ว');";
        echo "window.location.href='meetdoctor.php'";
        echo "</script>";
    }else{
        echo "<script>";
        echo "alert('ไม่สามารถปฏิเสธการจองได้');";
        echo "window.location.href='meetdoctor.php'";
        echo "</script>";
    }
}
?>