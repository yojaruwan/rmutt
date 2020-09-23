<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>รายงานสรุปคะแนน</title>
</head>

<body>
    <div class="container">
    <?php require_once 'navbar.php' ?>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ลำดับ</th>
                        <th scope="col">การจัดทำแผนการจัดการเรียนรู้</th>
                        <th scope="col">จัดการเรียนรู้ </th>
                        <th scope="col">บุคลิกภาพ</th>
                        <th scope="col">เจตคติต่อการเป็นครู</th>
                        <th scope="col">ผลการจัดการเรียนรู้</th>
                        <th scope="col">คะแนนรวมทั้งหมด</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    require 'connect.php';
                    $sqlassessment = mysqli_query($conn,"SELECT * FROM assessment_data1");
                    while($dataassessment = mysqli_fetch_array($sqlassessment)){ ?>
                    <tr>
                        <th scope="row"><?= $dataassessment['id'] ?></th>
                        <td><?= $dataassessment['sumA'] ?>&nbsp;<text> คะแนน </text></td>
                        <td><?= $dataassessment['sumB'] ?>&nbsp;<text> คะแนน </text></td>
                        <td><?= $dataassessment['sumC'] ?>&nbsp;<text> คะแนน </text></td>
                        <td><?= $dataassessment['sumD'] ?>&nbsp;<text> คะแนน </text></td>
                        <td><?= $dataassessment['sumE'] ?>&nbsp;<text> คะแนน </text></td>
                        <td><?= $dataassessment['sumA']+$dataassessment['sumB']+$dataassessment['sumC']+$dataassessment['sumD']+$dataassessment['sumE'] ?><text> คะแนน </text></td>
                        <td><a href="report.php?id=<?= $dataassessment['id'] ?>" class="btn btn-success">ดูข้อมูล</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>