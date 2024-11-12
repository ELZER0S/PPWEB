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
  <title>Quiz</title>
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
        <!--  Row  -->
        <form action="#" method="post">

            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">1. คุณชอบดูหนังที่มีการต่อสู้กันระหว่างฮีโร่กับวายร้ายแบบไหน?</h5>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การต่อสู้ที่มีอุปกรณ์ไฮเทค
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" value="b" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การต่อสู้ในสถานที่ที่มีความลึกลับ
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" value="c" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การต่อสู้ที่มีมุกตลกแทรกอยู่
                                </label>
                              
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" value="d" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การต่อสู้ที่แสดงถึงความเข้มแข็งทางอารมณ์
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">2. ถ้าต้องเลือกการเดินทาง คุณจะเลือกไปที่ไหน?</h5>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2" value="b" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                ป่าที่มีสัตว์ป่ามากมาย
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2" value="d" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                เมืองที่มีประวัติศาสตร์
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                ที่ที่มีการต่อสู้กันเกิดขึ้น
                                </label>
                              
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2" value="e" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                สถานที่ที่เต็มไปด้วยเวทมนตร์
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">3. คุณชอบตัวละครในหนังที่มีลักษณะอย่างไร?</h5>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                ตัวละครที่กล้าหาญและเด็ดเดี่ยว
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" value="c" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                ตัวละครที่มีอารมณ์ขัน
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" value="g" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                ตัวละครที่มีการพัฒนาความรักที่ซับซ้อน
                                </label>
                              
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" value="d" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                ตัวละครที่ทำให้คุณคิดถึงความสัมพันธ์
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">4. คุณสนใจหนังแนว Horror ที่เน้นเรื่องราวแบบไหน?</h5>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4" value="f" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                เรื่องราวเกี่ยวกับการหลบหนีจากปีศาจ
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4" value="d" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                เรื่องราวที่เกี่ยวกับความน่ากลัวในจิตใจมนุษย์
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4" value="c" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การใช้มุกตลกเพื่อบรรเทาความเครียดในสถานการณ์ 
                                </label>
                              
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4" value="b" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การสำรวจความลึกลับที่เต็มไปด้วยความตื่นเต้น
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">5. คุณชอบดูหนังแนว Sci-Fi ที่มีเทคโนโลยีแบบไหน?</h5>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                เทคโนโลยีที่ช่วยในการต่อสู้
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5" value="b" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                เทคโนโลยีที่ช่วยในการสำรวจ
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5" value="c" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                เทคโนโลยีที่สร้างเสียงหัวเราะ 
                                </label>
                              
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5" value="d" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                เทคโนโลยีที่มีผลกระทบต่ออารมณ์และความรู้สึก
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">6. คุณชอบหนังที่เกี่ยวกับความรักในลักษณะไหน?</h5>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                ความรักที่มีความตื่นเต้น
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6" value="b" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                ความรักที่ต้องผจญภัย
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6" value="c" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                ความรักที่เต็มไปด้วยเสียงหัวเราะ
                                </label>
                              
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6" value="d" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                ความรักที่ซับซ้อนและมีปัญหา
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">7. ถ้าคุณต้องเลือกระหว่างการเข้าร่วมการต่อสู้ คุณจะเลือกแบบไหน?</h5>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q7" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การต่อสู้ในสนามรบ
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q7" value="b" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การต่อสู้เพื่อค้นหาความจริง
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q7" value="c" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การต่อสู้ที่ทำให้เกิดความสนุกสนาน
                                </label>
                              
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q7" value="d" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การต่อสู้ที่แสดงให้เห็นถึงความเจ็บปวดทางอารมณ์
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">8. คุณชอบดูหนังที่มีฉากการเดินทางในอวกาศหรือไม่?</h5>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การต่อสู้กับศัตรูในอวกาศ
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8" value="b" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การค้นพบดาวใหม่
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8" value="c" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การทำให้สถานการณ์ตลกในอวกาศ
                                </label>
                              
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8" value="g" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                ความสัมพันธ์ที่เกิดขึ้นในอวกาศ
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">9. คุณชอบการสร้างโลกในหนัง Fantasy แบบไหน?</h5>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9" value="e" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                โลกที่มีเวทมนตร์และการต่อสู้ 
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9" value="b" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                โลกที่เต็มไปด้วยการผจญภัย
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9" value="c" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                โลกที่มีมุกตลกและความสนุกสนาน
                                </label>
                              
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9" value="g" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                โลกที่มีการพัฒนาความรักที่ซับซ้อน
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">10. คุณสนใจเรื่องราวการสำรวจในหนังแนวไหน?</h5>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q10" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การสำรวจที่เต็มไปด้วยอันตราย
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q10" value="b" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การสำรวจเพื่อค้นหาความจริง 
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q10" value="c" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การสำรวจที่มีมุกขำขันแทรกอยู่
                                </label>
                              
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q10" value="d" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การสำรวจที่เกี่ยวกับความรู้สึกของตัวละคร 
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">11. คุณชอบหนังที่เกี่ยวข้องกับการค้นพบสิ่งมีชีวิตจากนอกโลกหรือไม่?</h5>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q11" value="h" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การค้นพบที่เต็มไปด้วยความท้าทายและการเอาชีวิตรอด
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q11" value="e" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การค้นพบที่ทำให้เกิดเหตุการณ์ลึกลับ
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q11" value="f" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การค้นพบที่น่าขนลุกและน่ากลัว
                                </label>
                              
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q11" value="g" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การค้นพบที่ส่งผลให้เกิดความรักและความเข้าใจ
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
   
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">12. คุณชอบดูหนังที่มีฉากในโลกที่ต่างจากความเป็นจริงหรือไม่?</h5>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q12" value="e" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                โลกที่มีสิ่งมีชีวิตและเวทมนตร์
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q12" value="h" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                โลกที่เต็มไปด้วยเทคโนโลยีที่ล้ำหน้า
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q12" value="f" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                โลกที่มีพลังเหนือธรรมชาติและสิ่งน่ากลัว
                                </label>
                              
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q12" value="g" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                โลกที่มุ่งเน้นความรักและการเสียสละ
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>          

            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">13. ถ้าคุณต้องเลือกระหว่างดูหนังที่มีฉากความรักในโลกอนาคต คุณจะเลือกแบบไหน?</h5>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q13" value="h" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                ความรักที่เต็มไปด้วยความท้าทายทางเทคโนโลยี
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q13" value="g" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                ความรักที่แสดงถึงการเสียสละและการเผชิญปัญหา
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q13" value="f" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                ความรักที่เกิดขึ้นในสถานการณ์ที่น่ากลัวและน่าหวาดเสียว
                                </label>
                              
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q13" value="e" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                ความรักที่เกิดขึ้นในโลกแห่งเวทมนตร์และความลึกลับ
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  

            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">14. คุณชอบดูหนังที่เน้นเกี่ยวกับความลึกลับและเรื่องราวที่ไม่สามารถอธิบายได้หรือไม่?</h5>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q14" value="e" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                เรื่องราวที่มุ่งเน้นไปที่เวทมนตร์และการผจญภัย
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q14" value="h" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                เรื่องราวที่เต็มไปด้วยเทคโนโลยีล้ำสมัยและการเดินทางข้ามเวลา
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q14" value="d" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                เรื่องราวที่เกี่ยวข้องกับความสัมพันธ์ที่ลึกซึ้งและความลับที่ซ่อนเร้น
                                </label>
                              
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q14" value="g" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                เรื่องราวที่แสดงให้เห็นถึงความรักที่ลึกลับและลึกซึ้ง
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  

            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">15. คุณสนใจดูหนังที่มีเนื้อหาเกี่ยวกับการเดินทางข้ามเวลาเพื่อช่วยคนที่รักหรือไม่?</h5>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q15" value="g" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การเดินทางข้ามเวลาที่เต็มไปด้วยความรักและความซับซ้อน
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q15" value="h" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การเดินทางที่เกิดขึ้นในโลกที่เต็มไปด้วยเทคโนโลยีล้ำสมัย
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q15" value="f" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การเดินทางข้ามเวลาเพื่อต่อสู้กับปีศาจหรือผี
                                </label>
                              
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q15" value="d" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การเดินทางข้ามเวลาที่เต็มไปด้วยความรักและความซับซ้อนทางอารมณ์
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  

            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">16. คุณสนใจดูหนังที่ตัวละครเอกต้องเอาชีวิตรอดจากสัตว์ประหลาดหรือพลังลึกลับหรือไม่?</h5>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q16" value="h" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การเอาชีวิตรอดจากสิ่งมีชีวิตต่างดาว
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q16" value="e" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การเอาชีวิตรอดในโลกที่เต็มไปด้วยเวทมนตร์และมอนสเตอร์ 
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q16" value="f" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การเอาชีวิตรอดจากพลังเหนือธรรมชาติที่น่ากลัว
                                </label>
                              
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q16" value="g" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การเอาชีวิตรอดเพื่อรักษาคนที่รักไว้
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  

            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">17. คุณชอบดูหนังที่มีการเผชิญหน้ากับสิ่งน่ากลัวที่ไม่สามารถอธิบายได้หรือไม่?</h5>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q17" value="h" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                เผชิญหน้ากับสิ่งน่ากลัวในเทคโนโลยีอนาคต
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q17" value="c" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                เผชิญหน้ากับสิ่งน่ากลัวแต่กลับกลายเป็นเรื่องตลกขบขัน
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q17" value="f" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                เผชิญหน้ากับผีและปีศาจในสถานการณ์น่าหวาดเสียว
                                </label>
                              
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q17" value="b" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                เผชิญหน้ากับสิ่งน่ากลัวในการผจญภัยที่ไม่รู้จบ
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  

            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">18. คุณชอบหนังที่ตัวละครต้องต่อสู้เพื่อปกป้องความรักจากอันตรายหรือไม่?</h5>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q18" value="e" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                ต่อสู้ในโลกที่เต็มไปด้วยเวทมนตร์
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q18" value="h" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                ต่อสู้ในโลกที่เทคโนโลยีเข้ามาเป็นปัจจัยสำคัญ
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q18" value="f" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                ต่อสู้กับปีศาจและสิ่งน่ากลัวเพื่อปกป้องคนที่รัก
                                </label>
                              
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q18" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                ต่อสู้เพื่อปกป้องความรักด้วยความกล้าหาญและพลัง
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  

            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">19. คุณชอบดูหนังที่เกี่ยวกับการเดินทางในอวกาศหรือไม่?</h5>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q19" value="h" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การเดินทางในอวกาศเพื่อค้นหาความหมายของชีวิต
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q19" value="g" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การเดินทางในอวกาศที่เต็มไปด้วยความรักและความสัมพันธ์
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q19" value="f" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การเดินทางในอวกาศที่ต้องต่อสู้กับอันตรายจากสิ่งมีชีวิตต่างดาว 
                                </label>
                              
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q19" value="e" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                การเดินทางในอวกาศที่เต็มไปด้วยโลกแฟนตาซีและสิ่งลึกลับ
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  

            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">20. คุณชอบหนังที่มีฉากในโลกที่เต็มไปด้วยสัตว์วิเศษหรือไม่?</h5>
                            <hr>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q20" value="e" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                โลกที่เต็มไปด้วยสัตว์วิเศษและพลังเวทมนตร์ 
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q20" value="h" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                โลกที่เต็มไปด้วยสิ่งมีชีวิตจากต่างดาว
                                </label>
                                
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q20" value="f" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                โลกที่เต็มไปด้วยสิ่งมีชีวิตที่น่ากลัวและน่าขนลุก
                                </label>
                              
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q20" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                โลกที่เต็มไปด้วยสัตว์วิเศษและการต่อสู้เพื่อปกป้องความสงบ
                                </label>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div> 

            <div class="row">
                <div class="d-grid gap-2 col-6 mx-auto">
                <button type="button" class="btn btn-primary btn-block" id="submit-calculate">ดูผลลัพธ์</button>
                </div>
            </div>

        </form>                                                                               
        <!--  Row  -->
    </form>
    <div id="result"></div>
  </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../assets/js/quiz.js"></script>
</body>

</html>