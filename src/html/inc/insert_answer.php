<?php 
session_start();
include '../../../include/include_db_oo.php';

// ตรวจสอบการเข้าสู่ระบบ
if (empty($_SESSION["users_id"])) {
    exit; // หากผู้ใช้ไม่ได้เข้าสู่ระบบ ให้หยุดการทำงาน
}

// ตรวจสอบ choices
if (isset($_POST["choices"]) && is_array($_POST["choices"])) {
    $choices = $_POST["choices"];

    // เตรียมคำสั่ง SQL
    $sql = "INSERT INTO question (question_users_id, question_1, question_2, question_3, question_4, question_5, question_6, question_7, question_8, question_9, question_10, question_11, question_12, question_13, question_14, question_15, question_16, question_17, question_18, question_19, question_20) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    
    // ตั้งค่าคำถามให้มีค่าเริ่มต้น '0' และจัดการเป็น string
    $data = array_merge([$_SESSION["users_id"]], array_map('strval', array_pad($choices, 20, '0')));

    // ตรวจสอบจำนวนตัวแปรเพื่อใช้ใน bind_param
    $bindTypes = str_repeat('s', count($data)); // สร้าง string สำหรับประเภททั้งหมดเป็น 's' ตามจำนวนตัวแปร

    $stmt->bind_param($bindTypes, ...$data); // ใช้ bind_param

    // Execute และตรวจสอบผล
    if (!$stmt->execute()) {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error: No choices received.";
}
?>
