<html>
<body>
<?php

session_start();
include "../../include/include_db_oo.php";


$users_id = $_SESSION['users_id'];
$users_name = $_POST['users_name'];
$users_email = $_POST['users_mail'];
$users_phone = $_POST['users_phone'];
$users_add = $_POST['users_add'];
$users_date = $_POST['users_date'];


$sql = "UPDATE users SET users_name = '$users_name', users_mail = '$users_email', users_phone = '$users_phone', users_add = '$users_add', users_date = '$users_date' WHERE users_id = '$users_id'";
$result = $conn->query($sql);

if($result) {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
    echo "<script>
    Swal.fire({
        icon: 'success',
        title: 'แก้ไขข้อมูลสำเร็จ',
        showConfirmButton: false,
        timer: 1500
    }).then(() => {
        window.location = 'profile.php';
    });
    </script>";
} else {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
    echo "<script>
    Swal.fire({
        icon: 'error',
        title: 'แก้ไขข้อมูลไม่สำเร็จ',
        showConfirmButton: false,
        timer: 1500
    }).then(() => {
        window.location = 'profile.php';
    });
    </script>";
}


?>

</body>
<html>