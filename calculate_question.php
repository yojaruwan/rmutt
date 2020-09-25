<?php
require_once 'checkrole.php';
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
 <?php require 'navbar.php'; ?>

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
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 </body> 
 
 </html>
