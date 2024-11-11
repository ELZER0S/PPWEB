<?php

    session_start();
    include("../../include/include_db_oo.php");

    $quiz = "SELECT * FROM question";
    $result = $conn->query($quiz);


    //check ว่ามีกี่ row
    $row = $result->num_rows;


    if(!isset($_SESSION['users_id'])) {
        header('Location: ../../login.php');
    }
    
    $users_id = $_SESSION['users_id'];

    $get_data_name = "SELECT * FROM users WHERE users_id = $users_id";
    $get_data_name_result = $conn->query($get_data_name);

    $get_data_name_row = $get_data_name_result->fetch_assoc();



?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="../assets/css/quiz.css">
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php include("inc/sidebar.php") ?>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <?php include("inc/header.php") ?>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg text-white">
            <h1 class="text-white">ยินดีต้อนรับ</h1>
            <p>ชื่อผู้ใช้: <?php echo $get_data_name_row["users_name"] ?></p>
          </div>
        </div>
        <!--  Row 2 -->
        <div class="row">
          <div class="col-md-6">
            <div class="card bg-dark text-white">
              <div class="card-body">
                <h5 class="card-title text-white">จำนวนแบบทดสอบทั้งหมด</h5>
                <p class="card-text">20 ข้อ</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card bg-dark text-white">
              <div class="card-body">
                <h5 class="card-title text-white">จำนวนผู้เข้าร่วม</h5>
                <p class="card-text"><?php echo $row ?> ครั้ง</p>
              </div>
            </div>
          </div>
        </div>
        <!--  Row 3 -->
        <div class="row mt-5">
        <div class="col-md-4">
          <div class="card bg-info text-white">
            <div class="card-body">
              <h5 class="card-title">จำนวนแบบสอบถามทั้งหมด</h5>
              <p class="card-text">20 ข้อ</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-success text-white">
            <div class="card-body">
              <h5 class="card-title">จำนวนผู้ตอบทั้งหมด</h5>
              <p class="card-text"><?php echo $row ?> ครั้ง</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-warning text-white">
            <div class="card-body">
              <h5 class="card-title">คำตอบเฉลี่ยต่อแบบสอบถาม</h5>
              <p class="card-text">20 คำตอบ</p>
            </div>
          </div>
        </div>
        </div>
        <!--  Row 4 -->
        <div class="row mt-4">
                <div class="col-md-12">
                  <h3 class="text-white">รายการแบบสอบถาม</h3>
                  <table class="table table-dark table-striped">
                    <thead>
                      <tr>
                        <th>ชื่อผู้ตอบแบบสอบถาม</th>
                        <th>จำนวนคำตอบ</th>
                        <th>วันที่สร้าง</th>
                        <th>ตัวเลือก</th>
                      </tr>
                    </thead>
                    <tbody>
        <?php

            $data_quiz = "SELECT * FROM question";
            $result = $conn->query($data_quiz);

            //ดึงข้อมูลทั้งหมดลงมา
            while($row = $result->fetch_assoc()) {
                $get_name = $row['question_users_id'];

                $get_name_sql = "SELECT * FROM users WHERE users_id = $get_name";
                $get_name_result = $conn->query($get_name_sql);
                $get_name_row = $get_name_result->fetch_assoc();

                ?>
                  <tr>
                    <td><?php echo $get_name_row['users_name']?></td>
                    <td>20 คำตอบ</td>
                    <td>2023-11-10</td>
                    <td>
                      <a href="quiz.php" class="btn btn-primary">ดูข้อมูล</a>
                    </td>
                    </tr>
                  </tbody>
            <?php } ?>
            </table>
            </div>
            </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
</body>

</html>