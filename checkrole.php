<?php
session_start();
require 'dbconfig.php';
if (isset($_POST['submit'])) {
    $username= $_POST['username'];
$password= $conn->real_escape_string($_POST['password']);

$sql ="SELECT * FROM `login` WHERE `username` = '".$username."' AND `password` = '".$password."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result-> fetch_assoc();
    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['logined'] = TRUE;
    session_write_close();
    header("Location: index.php");
}else{
    echo "<script>";
    echo "alert('ชื่อผู้ใช้และรหัสผ่านไม่ถูกต้อง');";
    echo "window.location.href='index.php'";
    echo "</script>";
}
}
$datathisuser = mysqli_Fetch_Array(mysqli_query($conn,"SELECT * FROM login Where id='$_SESSION[id]'"));