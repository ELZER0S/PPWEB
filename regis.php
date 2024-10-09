<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="register.css">
    <title>REGISTER</title>
</head>
<body>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <div class="wrapper container">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <h2>REGISTER</h2>
            <p>สมัครบัญชีพื้นฐานฟรี โปรดให้ข้อมูลพื้นฐานแก่เราโดยใช้แบบฟอร์มด้านล่าง โปรดใช้ข้อมูลประจำตัวที่ถูกต้อง</p>
            <form class="form p-1" action="save_regis.php" method="post">
                <div class="row">
                    <div class="col-lg-3 mb-lg-0 mb-2">
                    <select class="form-select" name="prefix" required>
                        <option selected disabled value="">คำนำหน้า</option>
                        <option value="Mr">นาย</option>
                        <option value="Mrs">นาง</option>
                        <option value="Ms">นางสาว</option>
                    </select>
                    </div>
                    <div class="col-lg">
                        <input type="text" name="firstName" placeholder="ชื่อ" required>
                    </div>
                    <div class="col-lg">
                        <input type="text" name="lastName" placeholder="นามสกุล" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg">
                        <input type="email" name="email" placeholder="อีเมล" required>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg">
                        <input type="password" name="password" placeholder="รหัสผ่าน" required>
                    </div>
                </div>
                <div>
                <div class="row">
                    <div class="col-lg">
                        <input type="date" name="dob" placeholder="วันเกิด"  required>
                    </div>
                    <div class="col-lg">
                    <select class="form-select mb-lg-0 mb-2" id="gender" name="gender" required>
                        <option selected disabled value="">เลือกเพศ</option>
                        <option value="male">ชาย</option>
                        <option value="female">หญิง</option>
                        <option value="other">อื่นๆ</option>
                    </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg">
                        <input type="text" name="studentId" placeholder="รหัสนักศึกษา" required>
                    </div>
                    <div class="col-lg">
                        <input type="tel" name="phone" placeholder="เบอร์โทรศัพท์" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg">
                        <textarea id="address" name="address" rows="3" placeholder="ที่อยู่" required></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg">
                        <input type="submit" class="submit mt-2" value="Register">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

<script>
const elements = document.querySelectorAll('.form-select');

elements.forEach(function(element) {
    element.addEventListener('change', function() {
        if (this.value) {
            this.classList.add('selected');
        } else {
            this.classList.remove('selected');
        }
    });
});
</script>
</html>