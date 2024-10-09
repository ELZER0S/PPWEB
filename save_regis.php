<html>
<body>
<?php

include "include/include_db_oo.php";

$prefix = $_POST["prefix"];
$name = $_POST["firstName"];
$lastname = $_POST["lastName"];
$mail = $_POST["email"];
$password = $_POST["password"];
$date = $_POST["dob"];
$sex = $_POST["gender"];
$code = $_POST["studentId"];
$phone = $_POST["phone"];
$add = $_POST["address"];

$options = [
    'cost' => 10,];

$password = password_hash($password,  PASSWORD_BCRYPT, $options);

$sql_mail = "SELECT users_mail
             FROM users
             WHERE users_mail = '$mail'";

$result_mail = get_data($conn,$sql_mail);

if(count($result_mail)==0){

$sql = "INSERT INTO users (users_prefix,users_name,users_lastname,
        users_mail,users_password,users_date,users_sex,
        users_code,users_phone,users_add,users_regis)
        VALUES ('$prefix','$name','$lastname',
        '$mail','$password','$date','$sex',
        '$code','$phone','$add',NOW())";

if($conn->query($sql) === TRUE){

        echo "
       <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
        Swal.fire({
        title: 'สมัครสมาชิกสำเร็จ',
        text: 'กรุณาเข้าสู่ระบบ',
        icon: 'success',
        confirmButtonText: 'OK'
        }).then(function() {
        window.location = 'login.php';
        });
        </script>
        
       ";

        
}
else{
        echo"E-mail ที่ใช้ในการสมัครซ้ำกับข้อมูลที่มี";
}
}
?>




</body>
</html>
