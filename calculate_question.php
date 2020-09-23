<?php
require_once 'connect.php';
  $q1 = $_POST['q1']; 
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];
  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];
  $q7 = $_POST['q7'];
  $q8 = $_POST['q8'];
  $q9 = $_POST['q9'];
  //

    $q1 = $q1*1;
    $q2 = $q2*1;
    $q3 = $q3*1;
    $q4 = $q4*1;
    $q5 = $q5*1;
    $q6 = $q6*1;
    $q7 = $q7*1;
    $q8 = $q8*1;
    $q9 = $q9*1;
    //
    
    //
    $sumq = $q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8+$q9;

    if($sumq<5){
      $text1 = "ท่านไม่มีอาการซึมเศร้าหรือมีก็เพียงเล็กน้อย";
      $text2 = "ไม่จำเป็นต้องรักษา";
      $text3 = "0-4";
    }elseif($sumq>=5 && $sumq<=8){
      $text1 = "ท่านมีอาการซึมเศร้าระดับเล็กน้อย";
      $text2 = "ควรพักผ่อนให้เพียงพอ นอนหลับให้ได้ 6-8ชั่วโมง ออกกำลังกายสม่ำเสมอ ทำกิจกรรมที่ทำให้ผ่อนคลาย พบปะเพื่อนฝูง ควรทำแบบประเมินอีกครั้งใน 1 สัปดาห์";
      $text3 = "5-8";
    }elseif($sumq>=9 && $sumq<=14){
      $text1 = "ท่านมีอาการซึมเศร้าระดับปานกลาง";
      $text2 = "ควรพักผ่อนให้เพียงพอ นอนหลับให้ได้ 6-8ชั่วโมง ออกกำลังกายสม่ำเสมอ ทำกิจกรรมที่ทำให้ผ่อนคลาย พบปะเพื่อนฝูง ควรขอคำปรึกษาช่วยเหลือจากผู้ที่ไว้วางใจ ไม่จมอยู่กับปัญหา มองหาหนทางคลี่คลาย 
      หากอาการที่ท่านเป็น มีผลกระทบต่อการทำงาน หรือการเข้าสังคม (อาการซึมเศร้า ทำให้ท่านมีปัญหาในการทำงาน การดูแลสิ่งต่าง ๆ ในบ้าน
      หรือการเข้ากับผู้คน ในระดับมากถึงมากที่สุด) หรือหากท่านมีอาการมีระดับนี้มานาน 1-2 สัปดาห์แล้วยังไม่ดีขึ้น ควรพบแพทย์เพื่อรับการช่วยเหลือรักษา";
      $text3 = "9-14";
    }elseif($sumq>=15 && $sumq<=19){
      $text1 = "ท่านมีอาการซึมเศร้าระดับรุนแรงค่อนข้างมาก";
      $text2 = "ควรพบแพทย์เพื่อประเมินอาการและให้การรักษา ระหว่างนี้ควรพักผ่อนให้เพียงพอ นอนหลับให้ได้ 6-8 ชั่วโมง ออกกำลังกายเบาๆ ทำกิจกรรมที่ทำให้ผ่อนคลาย ไม่เก็บตัว และควรขอคำปรึกษาช่วยเหลือจากผู้ใกล้ชิด";
      $text3 = "15-19";
    }elseif($sumq>=20 && $sumq<=27){
      $text1 = "ท่านมีอาการซึมเศร้าระดับรุนแรงมาก";
      $text2 = "ต้องพบแพทย์เพื่อประเมินอาการและให้การรักษาโดยเร็ว ไม่ควรปล่อยทิ้งไว้";
      $text3 = "20-27";
    }
            ?>
 <html>
 
 <head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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
                    <a class="nav-link" href="#">เกี่ยวกับองค์กร <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">แบบประเมินความเสี่ยง</a>
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
                        <a class="dropdown-item" href="#">สาเหตุอาการภาวะซึมเศร้า</a>
                        <a class="dropdown-item" href="#">วิธีการรักษาเบื้องต้น</a>
                        <a class="dropdown-item" href="#">ผลข้างเคียงของยารักษาภาวะซึมเศร้า</a>
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

   <div class="container">  
     <div class="row">
       <div class="col-md-12">
         
         
          <tr><p align="center" style="color:#FF6633; font-size:32px"> รวมผลคะแนน <br>
                 <td> <?= $sumq ?></td>
             </tr>  
         
         <table width="50%" border="1" align="center" cellpadding="0" cellspacing="0">
 
         <tr align="center" bgcolor="#E0FFFF" >
         <td height="30" style="font-size:17px" ><strong>ระดับคะแนนของคุณอยู่ในช่วง <?= $text3 ?></strong></td>
         </tr>
 
         <tr align="center" bgcolor="#FFFFFF" >
         <td height="30" style="font-size:18px" ><strong><u>ผลการทดสอบ</u></strong><br>
         <p><?= $text1 ?></p> <strong><u>ข้อแนะนำในการดูแล</u></strong> <p><?= $text2 ?></p> </td>
         </tr>
 
         </table><br>
          
                     
     
       </div>
       <div class="col-md-1"></div>
     </div>
   </div>
 </body> 
 
 </html>
