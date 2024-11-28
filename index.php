<!DOCTYPE html>
<html lang="en">

<head>

<?php
include "include/include_header.php"
?>

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Pre-Header Area Start ***** -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-9">
          <div class="left-info">
            <ul>
              <li><a href="#"><i class="fa fa-phone"></i>+66 1234 5678</a></li>
              <li><a href="#"><i class="fa fa-envelope"></i>chaiyaphorn@email.com</a></li>
              <li><a href="#"><i class="fa fa-map-marker"></i>Nakhon Sawan 54th Thai</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-sm-3">
          <div class="social-icons">
            <ul>
              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Pre-Header Area End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <img src="src/assets/images/logos/PPWEB.png" alt="" style="max-width: 112px;">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <?php
            include "nav_bar.php"
            ?>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="caption header-text">
            <h6>WELCOME</h6>
            <div class="line-dec"></div>
            <h4>Dive <em>PPWEB</em> World <span>MOVIE</span></h4>
            <p>สำรวจโลกของคุณผ่านภาพยนตร์ – เก็บทุกนิสัย ดูทุกสไตล์ ตรงใจคอหนัง
            <div class="main-button scroll-to-section"><a href="#services">เพิ่มเติม</a></div>
            <span>or</span>
            <div class="second-button"><a href="src/html/index.php">แบบสอบถาม</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <h2>เราพร้อม <em>ให้บริการ</em> และ
                  <span>ฟีเจอร์หลากหลาย</span> เพื่อตอบโจทย์ทุกความต้องการคุณ
                </h2>
                <div class="line-dec"></div>
                <p>ตัวอย่างข้อความจำลองสำหรับการออกแบบ ซึ่งเน้นความสมบูรณ์ของรูปแบบและความสวยงาม</p>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-01.jpg" alt="discover SEO" class="templatemo-feature">
                </div>
                <h4>ค้นพบเพิ่มเติมเกี่ยวกับแนวโน้มล่าสุดในวงการภาพยนตร์</h4>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-02.jpg" alt="data analysis" class="templatemo-feature">
                </div>
                <h4>การวิเคราะห์ข้อมูลขนาดใหญ่แบบเรียลไทม์ในวงการภาพยนตร์</h4>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-03.jpg" alt="precise data" class="templatemo-feature">
                </div>
                <h4>การวิเคราะห์ข้อมูลที่แม่นยำและการทำนายในวงการภาพยนตร์</h4>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-04.jpg" alt="SEO marketing" class="templatemo-feature">
                </div>
                <h4>การตลาดและสื่อสังคมออนไลน์ในวงการภาพยนตร์</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <?php
    include "include/include_footer.php"
    ?>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <?php
  include "include/include_script.php"
  ?>


</body>

</html>