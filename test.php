<html>

<body>
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
</body>        
<html>