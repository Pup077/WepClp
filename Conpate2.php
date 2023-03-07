<?php
include_once('./backEND/backEND/connect.php');
$conn = new DB_con();
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="เกี่ยวกับอุทยานการเรียนรู้ (CLP), แผนที่อุทยานการเรียนรู้ (CLP)">
    <meta name="description" content="">
    <title>ข่าวสาร 2</title>
    <link rel="icon" type="image/png" href="./images/logo1.png" />
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Compate2.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.2.4, nicepage.com">
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
    <meta property="og:title" content="Compate1">
    <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="en">
    <header class="u-clearfix u-header u-header" id="sec-49fd">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="index.php" class="u-image u-logo u-image-1" data-image-width="80" data-image-height="40">
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
                                href="./backEND/pages-login.php"
                                style="padding: 0px 20px;">ลงชื่อเข้าสู่ระบบ</a>
                        </li>
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html">หน้าแรก</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="About.html">เกี่ยวกับ</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="Contact.html">ประชาสัมพันธ์</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="https://www.facebook.com/profile.php?id=100009439088255&paipv=0&eav=Afa1VSuKF2D7_vbrsIGC4Y9TIP6kwKNzkjjfKrlzGDhewMUmY5j4jzxUs73ZNdzbUZA&_rdr">ติดต่อ</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="./backEND/pages-login.php">ลงชื่อเข้าสู่ระบบ</a>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>
    <section class="u-clearfix u-section-1" id="sec-5ded">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">

            <?php
  $sql = $conn->fetchdata2();
  while ($row = mysqli_fetch_array($sql)) {

    ?>

            <h3 class="u-align-center u-text u-text-custom-color-3 u-text-default u-text-1">
                <?php echo $row['newsName2']; ?></h3>
            <img class="u-image u-image-default u-image-1" src=<?php echo $row['img2']; ?> alt="" data-image-width="900"
                data-image-height="675">
            <p class="u-align-left u-text u-text-default u-text-2">
                <span style="font-weight: 700;"><?php echo $row['NewsMsg2']; ?>
        </div>

        <?php } ?>

    </section>
    <section class="u-clearfix u-section-2" id="sec-9ec0">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-layout-cell u-right-cell u-size-34 u-layout-cell-1">
                            <div class="u-container-layout u-container-layout-1">

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