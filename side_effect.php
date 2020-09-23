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
?>
<!doctype html>
<html lang="en">
<style>
        *{
            font-family: 'Prompt', sans-serif;
        }
    </style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <title>RMUTT Counselling</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">RMUTT COUNSELLING</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="about.php">เกี่ยวกับองค์กร <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sad.php">แบบประเมินความเสี่ยง</a>
                </li>
                <?php
                if($_SESSION['logined']===TRUE){ ?>
                    <li class="nav-item">
                     <a class="nav-link" href="">ตารางนัดพบแพทย์</a>
                    </li>
                <?php } ?>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        เกี่ยวกับภาวะซึมเศร้า
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="Depressive_causes.php">สาเหตุอาการภาวะซึมเศร้า</a>
                        <a class="dropdown-item" href="treat.php">วิธีการรักษาเบื้องต้น</a>
                        <a class="dropdown-item" href="side_effect.php">ผลข้างเคียงของยารักษาภาวะซึมเศร้า</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
            </ul>
                
                <?php 
                if($_SESSION['logined']==FALSE){ ?>
                    <button class="btn btn-outline-success my-2 my-sm-0" 
                data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">เข้าสู่ระบบ</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เข้าสู่ระบบ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">รหัสบัตรนักศึกษา:</label>
                        <input type="text" name="username" class="form-control" id="recipient-name" required="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">รหัสผ่าน:</label>
                        <input type="password" name="password" class="form-control" required="">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button type="submit" name="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                </form>
            </div>
        </div>
    </div>
</div>
                <?php }else{ ?>
                    <i class="fa fa-user text-white"> สวัสดีคุณ <?= $datathisuser['name'] ?></i>
                    |<a href="logout.php" class="btn btn-danger"><i class="fa fa-sign-out-alt text-white"></i></a>
                <?php } ?></button>
                
            </form>
        </div>
    </nav>

<h1 align=center style="background-color: #99ffcc;"><p></p>ผลข้างเคียงของยารักษาภาวะซึมเศร้า</h1>
<div class="container">
<p><br>1. selective serotonin reuptake inhibitor (SSRI) <br>&emsp;&emsp;&emsp;&emsp;ผลข้างเคียงพบบ่อยที่สุดคือ อาการทางระบบทางเดินอาหารได้แก่ ความอยากอาหารลดลงคลื่นไส้อาเจียนท้องเสีย หรือ ท้องผูก นอกจากนี้ยังพบ <br> dysfunction และบางรายอาจมีอาการกระสับกระส่าย กระวนกระวายใจปวดศีรษะ ส่วนมากเป็นอาการที่เกิดขึ้นชั่วคราวเฉพาะช่วงหนึ่งถึงสองสัปดาห์แรกแล้ว<br>อาการจะดีขึ้นเอง แต่หากอาการมาก ควรลดขนาดยาหรืออาจเปลี่ยนมื้อยา จนถึงหยุดยาชั่วคราว และค่อยๆ เริ่มยาอีกครั้งในขนาดต่ำ</p>
<p>2 tricyclic antidepressants (TCA) 
    <br>&emsp;&emsp;&emsp;&emsp;ผลข้างเคียงพบบ่อยที่สุด คือ กลุ่มอาการ anticholinergic ได้แก่ ง่วงนอน ปากแห้งการรับรสผิดปกติท้องผูกปัสสาวะลำบากตาพร่ากล้ามเนื้อกระตุก (myoclonus) หัวใจเต้นเร็วน้ำหนักขึ้น ในกรณีที่เกิดผลข้างเคียงต่างๆ เช่นนี้ ควรลดขนาดยา TCA ลง, ดื่มน้ำมากๆ ย้ายมื้อยามาเป็นก่อนนอน และให้ยากลุ่ม benzodiazepine เพื่อรักษาอาการ myoclonus แต่หากเกิด cardio-toxicity เช่น orthostatic hypotension หรือ cardiac arrhythmia ในกรณีเช่นนี้
    <br>ควรหยุดยาและเปลี่ยนกลุ่มยาทันที นอกจากนี้หากผู้ป่วยมีประวัติ narrow angle glaucoma, myocardial infarction, recent heart block <br>หรือผู้ป่วยสูงอายุที่มีประวัติ delirium ไม่ควรให้ยาในกลุ่มนี้เด็ดขาดทั้งนี้เพื่อหลีกเลี่ยงผลข้างเคียงร้ายแรงจาก anticholinergic effect</p>
<p>3 ยากลุ่มใหม่
    <br>&emsp;&emsp;&emsp;&emsp;ผลข้างเคียงที่พบบ่อยคือปวดศีรษะ มึนงง นอนไม่หลับ คลื่นไส้ ท้องผูก ปากแห้ง เบื่ออาหาร การหลั่งน้ำอสุจิ ถึงจุดสุดยอดผิดปกติ กล้ามเนื้ออ่อนแรง 
    <br>เหงื่อไหลมากถ้าพบผลข้างเคียงดังกล่าวเช่นนี้ควรลดขนาดยาลง หรือเปลี่ยนกลุ่มยา แต่หากพบ ภาวะ SIADH, agranulocytosis, akathisia ให้หยุดยาทันทีส่วน bupropion อาจทำให้เกิดลมชักได้ ในกรณีเช่นนี้ ต้องหยุดยาทันทีเช่นกัน3 ยาแก้ซึมเศร้าส่วนมากมีประสิทธิภาพในการรักษาใกล้เคียงกัน ดังนั้นให้พิจารณาใช้ตาม
    <br>ผลข้างเคียงของยา ความต้องการของผู้ป่วย ราคายา โรคร่วมของผู้ป่วยทั้งทางกายและทางจิตเวช และระมัดระวังปฏิกิริยาระหว่างกันของยา เมื่อเริ่มต้นให้ยาแก้
    <br>ซึมเศร้าเพื่อรักษาอาการในช่วง acute phase ของโรค จะพบการตอบสนองของการรักษาในระยะเวลา 2 สัปดาห์แรก และเมื่อผู้ป่วยมีการตอบสนองกับยาดี 
    <br>ควรให้ยาผู้ป่วยรับประทานยาต่อเนื่องไป 6-8 สัปดาห์จนกว่าจะเกิด remission ของโรคภายหลังจากนั้น
    ให้ยาต่อเนื่องนาน 16-20 สัปดาห์ หลัง remission <br>เพื่อป้องกันการเป็นซ้ำ (recurrent) โดยนัดติดตามอาการของผู้ป่วยโดยไม่ควรเกินทุก 4 สัปดาห์ จึงค่อยๆลดขนาดยาลงหรือหยุดยาไปในที่สุด



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
    </script>
</body>

</html>