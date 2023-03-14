<?php
include_once('./backEND/backEND/connect2.php');
$conn = new DB_con();
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Try this now!, Try this now!, Try this now!, Try this now!">
    <meta name="description" content="">
    <title>ข่าวทั้งหมด</title>
    <link rel="icon" type="image/png" href="./images/logo1.png" />
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Contact2.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.2.0, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">










    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "logo": "images/logo03.png"
    }
    </script>
    <meta name="theme-color" content="#c684a0">
    <meta property="og:title" content="Contact">
    <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="en" style=
        "background-color: #f5f5f5;
        font-family: Arial, sans-serif;
        font-size: 16px;
      }">
    <header class="u-clearfix u-header u-header" id="sec-49fd">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="Home.html" class="u-image u-logo u-image-1" data-image-width="80" data-image-height="40">
                <img src="images/logo1.png" class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                    <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                        href="#">
                        <svg class="u-svg-link" viewBox="0 0 24 24">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                        </svg>
                        <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <rect y="1" width="16" height="2"></rect>
                                <rect y="7" width="16" height="2"></rect>
                                <rect y="13" width="16" height="2"></rect>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-unstyled u-nav-1">
                        <li class="u-nav-item"><a
                                class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-black u-text-hover-custom-color-3"
                                href="index.php" style="padding: 0px 20px;">หน้าแรก</a>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-black u-text-hover-custom-color-3"
                                href="About.html" style="padding: 0px 20px;">เกี่ยวกับ</a>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-black u-text-hover-custom-color-3"
                                href="Contact.php" style="padding: 0px 20px;">ประชาสัมพันธ์</a>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-black u-text-hover-custom-color-3"
                                href="https://www.facebook.com/profile.php?id=100009439088255&paipv=0&eav=Afa1VSuKF2D7_vbrsIGC4Y9TIP6kwKNzkjjfKrlzGDhewMUmY5j4jzxUs73ZNdzbUZA&_rdr"
                                style="padding: 0px 20px;">ติดต่อ</a>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-black u-text-hover-custom-color-3"
                                href="./backEND/pages-login.php" style="padding: 0px 20px;">ลงชื่อเข้าสู่ระบบ</a>
                        </li>
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">หน้าแรก</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="About.html">เกี่ยวกับ</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="Contact.php">ประชาสัมพันธ์</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="https://www.facebook.com/profile.php?id=100009439088255&paipv=0&eav=Afa1VSuKF2D7_vbrsIGC4Y9TIP6kwKNzkjjfKrlzGDhewMUmY5j4jzxUs73ZNdzbUZA&_rdr">ติดต่อ</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="./backEND/pages-login.php">ลงชื่อเข้าสู่ระบบ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>
    <section class="u-clearfix u-section-1" id="sec-5e0c">

    </section>

    <?php
  $sql = $conn->fetchdata();
  while ($row = mysqli_fetch_array($sql)) {
    $NewsMsg1 = substr($row['NewsMsg1'], 0, 252);
    // Use the $NewsMsg1 variable in your code here
  
?>


    <section class="u-align-center u-clearfix u-image u-shading" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url(<?php echo $row['img1']; ?>);
    background-position: 50% 50%;" src="" data-image-width="900" data-image-height="675" id="sec-faba">
        <div class="u-align-center u-clearfix u-sheet" style="min-height: 388px;">
            <h2 class="u-text u-text-default" style="margin: 107px auto 0 31px;"><?php echo $row['newsName1']; ?></h2>
            <h4 class="u-text u-text-default u-text-5"><?php echo $NewsMsg1; ?></h4>
            <a href="Conpate1.php?id=<?php echo $row['news1_id'];?>" class="u-btn u-button-style u-custom-color-2" style="text-transform: uppercase;
        margin: 22px auto 60px 39px;">เพึ่มเติม</a>
        </div>

        <?php } ?>

    </section>
    <section class="u-clearfix u-section-3" id="sec-ade6">
        <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>

    <?php
  $sql = $conn->fetchdata2();
  while ($row = mysqli_fetch_array($sql)) {
    $NewsMsg2 = substr($row['NewsMsg2'], 0, 252);
    // Use the $NewsMsg1 variable in your code here
  
?>

    <section class="u-align-center u-clearfix u-image u-shading" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url(<?php echo $row['img2']; ?>);
    background-position: 50% 50%;" src="" data-image-width="640" data-image-height="427" id="carousel_bb01">
        <div class="u-align-center u-clearfix u-sheet" style="min-height: 388px;">
            <h2 class="u-text u-text-default" style="margin: 107px auto 0 31px;"><?php echo $row['newsName2']; ?></h2>
            <h4 class="u-text u-text-default u-text-5"><?php echo $NewsMsg2; ?></h4>
            <a href="Conpate2.php?id=<?php echo $row['news2_id'];?>" class="u-btn u-button-style u-custom-color-2" style="text-transform: uppercase;
        margin: 22px auto 60px 39px;">เพิ่มเติม</a>
        </div>

        <?php } ?>

    </section>
    <section class="u-clearfix u-section-5" id="sec-cc11">
        <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>

    <?php
  $sql = $conn->fetchdata3();
  while ($row = mysqli_fetch_array($sql)) {
    $NewsMsg3 = substr($row['NewsMsg3'], 0, 252);
    // Use the $NewsMsg1 variable in your code here
  
?>

    <section class="u-align-center u-clearfix u-image u-shading" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url(<?php echo $row['img3']; ?>);
    background-position: 50% 50%;" src="" data-image-width="4624" data-image-height="3468" id="carousel_0ac6">
        <div class="u-align-center u-clearfix u-sheet" style="min-height: 388px;">
            <h2 class="u-text u-text-default" style="margin: 107px auto 0 31px;"><?php echo $row['newsName3']; ?></h2>
            <h4 class="u-text u-text-default u-text-5"><?php echo $NewsMsg3; ?></h4>
            <a href="Conpate3.php?id=<?php echo $row['news3_id']; ?>" class="u-btn u-button-style u-custom-color-2" style="text-transform: uppercase;
        margin: 22px auto 60px 39px;">เพิ่มเติม</a>
        </div>

        <?php } ?>

    </section>
    <section class="u-clearfix u-section-7" id="sec-e8e1">
        <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>

    <?php
  $sql = $conn->fetchdata4();
  while ($row = mysqli_fetch_array($sql)) {
    $NewsMsg4 = substr($row['NewsMsg4'], 0, 252);
    // Use the $NewsMsg1 variable in your code here
  
?>

    <section class="u-align-center u-clearfix u-image u-shading" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url(<?php echo $row['img4']; ?>);
    background-position: 50% 50%;" src="" data-image-width="960"
        data-image-height="717" id="carousel_7f03">
        <div class="u-align-center u-clearfix u-sheet" style="min-height: 388px;">
            <h2 class="u-text u-text-default" style="margin: 107px auto 0 31px;"><?php echo $row['newsName4']; ?></h2>
            <h4 class="u-text u-text-default u-text-5"><?php echo $NewsMsg4; ?></h4>
            <a href="Conpate4.php?id=<?php echo $row['news4_id']; ?>" class="u-btn u-button-style u-custom-color-2" style="text-transform: uppercase;
        margin: 22px auto 60px 39px;">เพิ่มเติม</a>
        </div>

        <?php } ?>

    </section>
    <section class="u-clearfix u-section-1" id="sec-5e0c">
    <br>
    <br>
    </section>

    <?php
  $sql = $conn->fetchdata5();
  while ($row = mysqli_fetch_array($sql)) {
    $NewsMsg5 = substr($row['NewsMsg5'], 0, 252);
    // Use the $NewsMsg1 variable in your code here
  
?>


    <section class="u-align-center u-clearfix u-image u-shading" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url(<?php echo $row['img5']; ?>);
    background-position: 50% 50%;" src="" data-image-width="900" data-image-height="675" id="sec-faba">
        <div class="u-align-center u-clearfix u-sheet" style="min-height: 388px;">
            <h2 class="u-text u-text-default" style="margin: 107px auto 0 31px;"><?php echo $row['newsName5']; ?></h2>
            <h4 class="u-text u-text-default u-text-5"><?php echo $NewsMsg5; ?></h4>
            <a href="Conpate5.php?id=<?php echo $row['news5_id']; ?>" class="u-btn u-button-style u-custom-color-2" style="text-transform: uppercase;
        margin: 22px auto 60px 39px;">เพึ่มเติม</a>
        </div>

        <?php } ?>

    </section>
    <section class="u-clearfix u-section-9" id="sec-a1a9" style=
        "background-color: #F5F5F5;
        font-family: Arial, sans-serif;
        font-size: 16px;
      }">
        <div class="u-clearfix u-sheet u-sheet-1" >

            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-right-cell u-size-34 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">
                                <h4 class="u-text u-text-1" style="color: black;">ติดต่อสอบภาม</h4>
                                <p class="u-custom-font u-font-montserrat u-text u-text-2" style="color: black;"> ติดต่อสอบถามปัญหาการใช้งานเว็ปไซต์ได้ตลอด 24 ชั่วโมง.</p>
                                <div class="u-expanded-width u-form u-form-1">
                                    <form action="https://forms.nicepagesrv.com/Form/Process"
                                        class="u-clearfix u-form-horizontal u-form-spacing-9 u-inner-form"
                                        source="email" name="form" style="padding: 0px;">
                                        <div class="u-form-email u-form-group u-label-none">
                                            <label for="email-6564" class="u-label">Email</label>
                                            <input style="color: black;" type="email" placeholder="กรุณาใส่อีเมล" id="email-6564" name="email"
                                                class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle"
                                                required="">
                                        </div>
                                        <div class="u-align-left u-form-group u-form-submit u-label-none">
                                            <a href="#"
                                                class="u-active-custom-color-3 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-3 u-hover-custom-color-2 u-radius-50 u-btn-2">ยืนยัน<br>
                                            </a>
                                            <input type="submit" value="submit" class="u-form-control-hidden">
                                        </div>
                                        <div class="u-form-send-message u-form-send-success"> Thank you! Your
                                            message has been sent.
                                        </div>
                                        <div class="u-form-send-error u-form-send-message"> Unable to send your
                                            message. Please fix errors
                                            then try again. </div>
                                        <input type="hidden" value="" name="recaptchaResponse">
                                        <input type="hidden" name="formServices"
                                            value="2dbf2fb8cefe3cc69f76f331b511486e">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div
                            class="u-align-left u-container-style u-layout-cell u-left-cell u-size-26 u-white u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-2">
                                <h3 class="u-align-left u-text u-text-3"> เวลาเปิด&amp;สถานที่</h3>
                                <h5 class="u-align-left u-text u-text-4">
                                    <a href="#"
                                        class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-border-palette-4-base u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-active-black u-text-hover-black u-text-palette-4-base u-top-left-radius-0 u-top-right-radius-0 u-btn-3"
                                        target="_blank">
                                        ตำบล:&nbsp;คลัง<br>อำเภอ:&nbsp;เมืองนครศรีธรรมราช<br>จังหวัด:&nbsp;นครศรีธรรมราช<br>80000
                                    </a>
                                </h5>
                                <p class="u-align-left u-text u-text-5"> วันจันทร์ - วันอาทิตย์<br>8:30am-16.30pm
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-63ca">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1">จัดทำโดย นายทัศน์เทพ และ นายพุธิพล
                มหาวิทยาลัยเทคโนโลยีราชมงคลศรีวิศัย จังหวัด สงขลา</p>
        </div>
    </footer>


</body>

</html>