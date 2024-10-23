<!doctype html>

<?php

session_start();  

include "../../include/include_db_oo.php";


if(!isset($_SESSION['users_id'])) {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
    echo "<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'กรุณาเข้าสู่ระบบ!',
    }).then(() => {
        window.location = 'login.php';
    });
    </script>";
    exit;
}


//get data from database from sesstion user_id
$sql = "SELECT * FROM users WHERE users_id = '".$_SESSION['users_id']."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();









?>



<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="../assets/css/profile.css">
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
      <div class="container-fluid text-white width-screen">
        <!--  Row 1 -->
        <div class="row">

            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="../assets/images/profile/user.png"><span class="font-weight-bold"><?php echo $row["users_name"] ?></span><span class=""><?php echo $row["users_mail"] ?></span><span> </span></div>
            </div>

              <div class="col-md-5 border-right">
                <form action="edit_profile.php" method="post">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right text-white">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" name="users_name" value="<?php echo $row["users_name"] ?>"></div>
                            <div class="col-md-6"><label class="labels">Lastname</label><input type="text" class="form-control" name="users_lastname" value="<?php echo $row["users_lastname"] ?>" placeholder="surname"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" name="users_phone" placeholder="enter phone number" value="<?php echo $row["users_phone"] ?>"></div>
                            <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" name="users_add" placeholder="enter address line 1" value="<?php echo $row["users_add"] ?>"></div>
                            <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" name="users_mail" placeholder="enter email id" value="<?php echo $row["users_mail"] ?>"></div>
                            <div class="col-md-12"><label class="labels">Date</label><input type="date" class="form-control" name="users_date" placeholder="date" value="<?php echo $row["users_date"] ?>"></div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                    </div>
                </form>
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