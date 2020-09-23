<?php //require 'connect.php' ?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>แบบประเมินการจัดการเรียนรู้ในชั้นเรียน</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@600&display=swap" rel="stylesheet">
    <style>
    * {
      font-family: 'Sarabun', sans-serif
    }
    </style>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
  </script>
</head>

<body>
  <div class="container">  
  <img src="img/RMUTT.JPG" style="margin:auto; display:block;" width="100" height="155" >
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <h3 align="center"> แบบประเมินการจัดการเรียนรู้ในชั้นเรียน </h3>
        <form id="formq" name="formq" method="post" action="saveassessment.php">
          <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
            <tr style="color: black">
              <td width="75" rowspan="2" align="center"><strong>รายการ</strong>
              <td width="75" rowspan="2" align="center"><strong>ตัวคูณ</strong>
              <td colspan="10" align="center"><strong>ระดับความคิดเห็น</strong></td>
            </tr>
            <tr>
              <td width="5%" align="center"><strong><p style="font-size:14px">ดีมาก<br>5</p></strong></td>
              <td width="5%" align="center"><strong><p style="font-size:14px">ดี<br>4</p></strong></td>
              <td width="5%" align="center"><strong><p style="font-size:14px">พอใช้<br>3</p></strong></td>
              <td width="5%" align="center"><strong><p style="font-size:14px">น้อย<br>2</p></strong></td>
              <td width="5%" align="center"><strong><p style="font-size:14px">ปรับปรุง<br>1</p></strong></td>
            </tr>

            <tr>
              <td height="30" colspan="10" bgcolor="#F4F4F4"><strong>1.การจัดทำแผนการจัดการเรียนรู้ (20 คะแนน)</strong>
              </td>
            </tr>
            <tr>
              <td height="30">&nbsp; 1.1 ความถูกต้องของการเขียนจุดประสงค์การเรียนรู้</td>
              <td height="30" align="center"> <text>0.5</text></td>
              <td height="30" align="center"><input type="radio" name="a1" value="5" required="required" /></td>
              <td height="30" align="center"><input type="radio" name="a1" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="a1" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="a1" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="a1" value="1" /></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 1.2 กำหนดเนื้อหาถูกต้อง ทันสมัยและสอดคล้องกับจุดประสงค์การเรียนรู้</td>
              <td height="30" align="center"> <text>1</text></td>
              <td width="5%" height="30" align="center"><input type="radio" name="a2" value="5" required="required" />
              </td>
              <td width="5%" height="30" align="center"><input type="radio" name="a2" value="4" /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="a2" value="3" /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="a2" value="2" /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="a2" value="1" /></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 1.3 กำหนดกิจกรรมการเรียนการสอนสอดคล้องกับจุดประสงค์การเรียนรู้</td>
              <td height="30" align="center"> <text>1.5</text></td>
              <td width="5%" height="30" align="center"><input type="radio" name="a3" value="5" required="required" />
              </td>
              <td width="5%" height="30" align="center"><input type="radio" name="a3" value="4" /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="a3" value="3" /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="a3" value="2" /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="a3" value="1" /></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 1.4 กำหนดอุปกรณ์สื่อการสอนสอดคล้องกับจุดประสงค์ การเรียนรู้ เนื้อหา <br> &nbsp; และกิจกรรมการเรียนการสอน</td>
              <td height="30" align="center"> <text>0.5</text></td>
              <td width="5%" height="30" align="center"><input type="radio" name="a4" value="5" required="required" />
              </td>
              <td width="5%" height="30" align="center"><input type="radio" name="a4" value="4" /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="a4" value="3" /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="a4" value="2" /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="a4" value="1" /></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 1.5 กำหนดวิธีการวัดผลได้ตรงจุดประสงค์การเรียนรู้ และหลากหลาย</td>
              <td height="30" align="center"> <text>0.5</text></td>
              <td width="5%" height="30" align="center"><input type="radio" name="a5" value="5" required="required" />
              </td>
              <td width="5%" height="30" align="center"><input type="radio" name="a5" value="4" /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="a5" value="3" /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="a5" value="2" /></td>
              <td width="5%" height="30" align="center"><input type="radio" name="a5" value="1" /></td>
            </tr>
            <tr>
              <td height="30" colspan="10" bgcolor="#F4F4F4"><strong>2.จัดการเรียนรู้ (80 คะแนน)</strong></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 2.1 การนำเข้าสู่บทเรียนมีความเหมาะสมตรงกับเรื่องที่สอน</td>
              <td height="30" align="center"> <text>0.5</text></td>
              <td height="30" align="center"><input type="radio" name="b1" value="5" required="required" /></td>
              <td height="30" align="center"><input type="radio" name="b1" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="b1" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="b1" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="b1" value="1" /></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 2.2 ดำเนินการจัดกิจกรรมการเรียนการสอนสอดคล้องกับแผนการจัดการเรียนรู้</td>
              <td height="30" align="center"> <text>1.5</text></td>
              <td height="30" align="center"><input type="radio" name="b2" value="5" required="required" /></td>
              <td height="30" align="center"><input type="radio" name="b2" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="b2" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="b2" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="b2" value="1" /></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 2.3 การจัดการเรียนแบบบูรณาการเหมาะสม</td>
              <td height="30" align="center"> <text>1</text></td>
              <td height="30" align="center"><input type="radio" name="b3" value="5" required="required" /></td>
              <td height="30" align="center"><input type="radio" name="b3" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="b3" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="b3" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="b3" value="1" /></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 2.4 การอธิบายเนื้อหาและยกตัวอย่างประกอบถูกต้องเข้าใจง่าย</td>
              <td height="30" align="center"> <text>1</text></td>
              <td height="30" align="center"><input type="radio" name="b4" value="5" required="required" /></td>
              <td height="30" align="center"><input type="radio" name="b4" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="b4" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="b4" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="b4" value="1" /></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 2.5 มีการจัดการเรียนโดยเน้นผู้เรียนเป็นสำคัญ</td>
              <td height="30" align="center"> <text>2</text></td>
              <td height="30" align="center"><input type="radio" name="b5" value="5" required="required" /></td>
              <td height="30" align="center"><input type="radio" name="b5" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="b5" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="b5" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="b5" value="1" /></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 2.6 การซักถาม การเสริมแรง เหมาะสม</td>
              <td height="30" align="center"> <text>1</text></td>
              <td height="30" align="center"><input type="radio" name="b6" value="5" required="required" /></td>
              <td height="30" align="center"><input type="radio" name="b6" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="b6" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="b6" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="b6" value="1" /></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 2.7 ลักษณะสื่อการสอน (ขนาด,สี,สภาพสื่อฯลฯ)</td>
              <td height="30" align="center"> <text>1</text></td>
              <td height="30" align="center"><input type="radio" name="b7" value="5" required="required" /></td>
              <td height="30" align="center"><input type="radio" name="b7" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="b7" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="b7" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="b7" value="1" /></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 2.8 วิธีการใช้สื่อถูกต้องและเหมาะสม</td>
              <td height="30" align="center"> <text>1.5</text></td>
              <td height="30" align="center"><input type="radio" name="b8" value="5" required="required" /></td>
              <td height="30" align="center"><input type="radio" name="b8" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="b8" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="b8" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="b8" value="1" /></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 2.9 การส่งเสริมให้ผู้เรียนนำความรู้ไปใช้ในชีวิตประจำวัน</td>
              <td height="30" align="center"> <text>1</text></td>
              <td height="30" align="center"><input type="radio" name="b9" value="5" required="required" /></td>
              <td height="30" align="center"><input type="radio" name="b9" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="b9" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="b9" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="b9" value="1" /></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 2.10 การสรุปบทเรียนตามแผนและด้วยวิธีการที่หลากหลาย</td>
              <td height="30" align="center"> <text>1.5</text></td>
              <td height="30" align="center"><input type="radio" name="b10" value="5" required="required" /></td>
              <td height="30" align="center"><input type="radio" name="b10" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="b10" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="b10" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="b10" value="1" /></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 2.11 การควบคุมชั้นเรียน</td>
              <td height="30" align="center"> <text>2</text></td>
              <td height="30" align="center"><input type="radio" name="b11" value="5" required="required" /></td>
              <td height="30" align="center"><input type="radio" name="b11" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="b11" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="b11" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="b11" value="1" /></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 2.12 การให้ความสนใจคำถามของผู้เรียน</td>
              <td height="30" align="center"> <text>2</text></td>
              <td height="30" align="center"><input type="radio" name="b12" value="5" required="required" /></td>
              <td height="30" align="center"><input type="radio" name="b12" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="b12" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="b12" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="b12" value="1" /></td>
            </tr>
            <tr>
              <td height="30" colspan="10" bgcolor="#F4F4F4"><strong>3.บุคลิกภาพ  (15 คะแนน)</strong></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 3.1	เสียงดังชัดเจน จังหวะการพูดเหมาะสม</td>
              <td height="30" align="center"> <text>1</text></td>
              <td height="30" align="center"><input type="radio" name="c1" value="5" required="required" /></td>
              <td height="30" align="center"><input type="radio" name="c1" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="c1" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="c1" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="c1" value="1" /></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 3.2	การแต่งกายเรียบร้อยและเหมาะสม</td>
              <td height="30" align="center"> <text>1</text></td>
              <td height="30" align="center"><input type="radio" name="c2" value="5" required="required" /></td>
              <td height="30" align="center"><input type="radio" name="c2" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="c2" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="c2" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="c2" value="1" /></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 3.3	ลักษณะท่าทางและความเชื่อมั่นในตนเอง</td>
              <td height="30" align="center"> <text>1</text></td>
              <td height="30" align="center"><input type="radio" name="c3" value="5" required="required" /></td>
              <td height="30" align="center"><input type="radio" name="c3" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="c3" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="c3" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="c3" value="1" /></td>
            </tr>
            <tr>
              <td height="30" colspan="10" bgcolor="#F4F4F4"><strong>4.เจตคติต่อการเป็นครู  (10 คะแนน)</strong></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 4.1	เอาใจใส่ให้ความสนใจนักเรียนอย่างทั่วถึง</td>
              <td height="30" align="center"> <text>1</text></td>
              <td height="30" align="center"><input type="radio" name="d1" value="5" required="required" /></td>
              <td height="30" align="center"><input type="radio" name="d1" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="d1" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="d1" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="d1" value="1" /></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 4.2	ความตรงต่อเวลา  ความรับผิดชอบ</td>
              <td height="30" align="center"> <text>1</text></td>
              <td height="30" align="center"><input type="radio" name="d2" value="5" required="required" /></td>
              <td height="30" align="center"><input type="radio" name="d2" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="d2" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="d2" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="d2" value="1" /></td>
            </tr>
            <tr>
              <td height="30" colspan="10" bgcolor="#F4F4F4"><strong>5.ผลการจัดการเรียนรู้ (25 คะแนน)</strong></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 5.1	ผลการจัดการเรียนรู้ทางด้านพุทธิพิสัย (ดูจากคะแนนจากการสอบ)</td>
              <td height="30" align="center"> <text>2</text></td>
              <td height="30" align="center"><input type="radio" name="e1" value="5" required="required" /></td>
              <td height="30" align="center"><input type="radio" name="e1" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="e1" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="e1" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="e1" value="1" /></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 5.2	ผลการจัดการเรียนรู้ด้านทักษะพิสัย (ดูจากงาน ปฏิบัติดูจากชิ้นงาน ทฤษฎีดูจากรายงานหรือ<br>&nbsp; งานส่วนอื่นที่มอบหมายให้นักเรียนทำ)</td>
              <td height="30" align="center"> <text>2</text></td>
              <td height="30" align="center"><input type="radio" name="e2" value="5" required="required" /></td>
              <td height="30" align="center"><input type="radio" name="e2" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="e2" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="e2" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="e2" value="1" /></td>
            </tr>
            <tr>
              <td height="30">&nbsp; 5.3	ผลการเรียนรู้ด้านจิตพิสัย (ดูจากเจตคติที่เปลี่ยนแปลงทางด้านบวกของนักเรียน)</td>
              <td height="30" align="center"> <text>1</text></td>
              <td height="30" align="center"><input type="radio" name="e3" value="5" required="required" /></td>
              <td height="30" align="center"><input type="radio" name="e3" value="4" /></td>
              <td height="30" align="center"><input type="radio" name="e3" value="3" /></td>
              <td height="30" align="center"><input type="radio" name="e3" value="2" /></td>
              <td height="30" align="center"><input type="radio" name="e3" value="1" /></td>
            </tr>
            <tr>
              <td height="30" align="center" colspan="10" bgcolor="#F4F4F4"><strong> รวมคะแนน 150 คะแนน
</strong></td>
            </tr>
            

          </table>
          <b><h4> ข้อเสนอแนะเพิ่มเติม </h4></b>
          <textarea name="detail" cols="90" rows="3" id="detail" class="form-control"></textarea>
          <input type="hidden" value="<?= $_SESSION['id'] ?>">
          <br>
          <br>
          <button type="submit" name="save" class="btn btn-primary btn-block"> + บันทึก</button>
        </form>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
</body>

</html>