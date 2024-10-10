<html>
<body>
<?php
include "include/include_db_oo.php";

$email = $_POST["email"];
$password = $_POST["password"];

    //เช็คว่ามีการกรอกข้อมูลครบหรือป่าว
    if($email == "" || $password == ""){
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'กรุณากรอกอีเมลและรหัสผ่าน!',
        }).then(() => {
            window.history.back();
        });
        </script>";
        exit;
    }

    //เช็คว่ามีข้อมูลในฐานข้อมูลหรือไม่
    $sql = "SELECT * FROM users WHERE users_mail = '$email'";
    $result = $conn->query($sql);

    if($result->num_rows == 0){
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'ไม่พบข้อมูลผู้ใช้งาน!',
        }).then(() => {
            window.history.back();
        });
        </script>";
        exit;
    }

    $row = $result->fetch_assoc();
    //hash password
    $hash_password = $row["users_password"];
    if(password_verify($password, $hash_password)){ 

        session_start();
        $_SESSION["users_id"] = $row["users_id"];
        $_SESSION["users_name"] = $row["users_name"];
        $_SESSION["users_mail"] = $row["users_mail"];

        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'เข้าสู่ระบบสำเร็จ',
        }).then(() => {
            window.location = 'src/html/index.php';
        });
        </script>";

    }else {
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'รหัสผ่านไม่ถูกต้อง!',
        }).then(() => {
            window.history.back();
        });
        </script>";
    }
    



?>
</body>
<html>