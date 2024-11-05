<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Alba-rosa.cz | PopClicker</title>

  <!-- Favicons -->
  <link href="./assets/img/icon.ico" rel="shortcut icon" type="image/x-icon" />

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />

  <!-- Embed -->
  <meta content="Alba-rosa.cz | PopCLicker" property="og:title" />
  <meta
    content="PopClicker: Click your way to victory! Change characters, get big scores and experience the thrill of endless clicking. Start your ultimate clicking adventure right now!"
    property="og:description" />
  <meta content="https://www.alba-rosa.cz/" property="og:url" />
  <meta content="https://www.alba-rosa.cz/logo.png" property="og:image" />
  <meta content="#0f1523" data-react-helmet="true" name="theme-color" />
  <!-- Main CSS-->
  <style>
    /* Styl pro celou stránku */
    body {
      font-family: Arial, sans-serif;
      width: 100%;
      height: 100%;
      text-align: center;
      padding: 0;
      margin: 0;
      background-repeat: no-repeat;
      background-size: 100vw 100vh;
      background-color: #0f1523;
      background-position: center center;
    }

    .bubbles {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }

    .bubble {
      position: absolute;
      background: #3e6181;
      opacity: 0.6;
      border-radius: 50%;
      animation: moveBubbles 10s infinite, fadeInOut 4s infinite;
    }

    @keyframes moveBubbles {
      0% {
        transform: translateY(0) translateX(0);
      }

      50% {
        transform: translateY(-100%) translateX(100%);
      }

      100% {
        transform: translateY(0) translateX(0);
      }
    }

    /* Styl pro nadpis v navigaci */
    .navbar-title {
      font-size: 24px;
      color: #fff;
      margin-right: 10px;
      flex: 1;
    }

    /* Styl pro skóre */
    .score {
      font-size: 24px;
      color: #fff;
      margin-right: 10px;
    }

    /* Styl pro dropdown menu */
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-toggle {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      font-size: 18px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.2s;
    }

    .dropdown-toggle:hover {
      background-color: #555;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #333;
      min-width: 160px;
      z-index: 1;
    }

    .dropdown-content button {
      color: #fff;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      background-color: transparent;
      border: none;
      width: 100%;
      text-align: left;
      cursor: pointer;
    }

    .dropdown-content button:hover {
      background-color: #555;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropdown-toggle {
      background-color: #555;
    }

    /* Styl pro kontejner hry */
    .game-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    /* Styl pro informace o hře */
    .game-info {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
    }

    /* Styl pro obrázek hry */
    .game-image {
      max-width: 100%;
      max-height: 100%;
      width: 512px;
      height: 512px;
      display: block;
      margin: 0 auto;
      transition: transform 0.2s;
      border-radius: 20%;
      user-select: none;
      -moz-user-select: none;
      -webkit-user-select: none;
      -ms-user-select: none;
      cursor: pointer;
    }

    /* Styl pro titulek hry */
    .game-title {
      font-size: 24px;
      color: #fff;
      padding: 10px 20px;
      background-color: #333;
      border-radius: 10px;
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      font-family: "Roboto", sans-serif;
    }

    /* Styl pro kontejner skóre */
    .score-container {
      background-color: #333;
      padding: 10px 20px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
    }

    /* Styl pro skóre */
    .score {
      font-size: 24px;
      color: #fff;
      margin-right: 10px;
      font-family: "Roboto", sans-serif;
    }

    /* Styl pro text titulku hry */
    .game-title-text {
      margin-left: 10px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    /* Styl pro kontejner menu */
    .menu-container {
      display: none;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #333;
      padding: 20px;
      border-radius: 10px;
      z-index: 1;
      animation: fadeIn 0.3s;
      margin-bottom: 20px;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    /* Styl pro obsah menu */
    .menu-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      margin-top: 10px;
    }

    /* Styl pro titulek menu */
    .menu-title {
      font-size: 24px;
      color: #fff;
      margin-bottom: 10px;
    }

    /* Styl pro skórovací box */
    .score-box {
      background-color: #333;
      width: 50px;
      height: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 10px;
      margin-left: 20px;
    }

    /* Styl pro tlačítka */
    button {
      margin: 10px 0 0 0;
      padding-right: 8px;
      padding: 1px;
      margin-bottom: 8px;
      align-items: center;
      background-color: #2c4761;
      border: 2px solid #2c4761;
      color: white;
      padding: 16px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      transition-duration: 0.4s;
      cursor: pointer;
      border-radius: 10px;
    }

    button:hover {
      background-color: #0f1523;
      color: white;
      border: 2px solid #2c4761;
    }

    /* Styl pro text s číslem 1 */
    .text1 {
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding-top: 10px;
      color: #fff;
      text-decoration: underline;
      font-weight: bold;
    }

    /* Styl pro text na levé straně */
    .text2 {
      display: flex;
      align-items: left;
      justify-content: left;
      text-align: left;
      color: #fff;
    }

    /* Styl pro text s číslem 3 */
    .text3 {
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
    }

    @media (max-width: 600px) {

      /* Styl pro mobilní zařízení */
      .game-image {
        width: 100%;
        height: auto;
        max-height: 50vh;
      }

      .game-title {
        font-size: 18px;
      }

      .score {
        font-size: 18px;
      }

      .menu-container {
        position: static;
        transform: none;
        margin-top: 20px;
      }

      .navbar {
        flex-direction: column;
        align-items: flex-start;
      }

      .navbar-title {
        margin-bottom: 10px;
      }

      .dropdown {
        margin-top: 10px;
      }
    }

    /* Upraveno: Responzivita pro tablet */
    @media (max-width: 900px) {
      .game-title {
        font-size: 20px;
      }

      .score {
        font-size: 20px;
      }
    }

    /* Upraveno: Responzivita pro mobilní telefony */
    @media (max-width: 480px) {
      .game-title {
        font-size: 16px;
      }

      .score {
        font-size: 16px;
      }
    }

    /* Vlastní proměnné */
    :root {
      --section: #222426;
      --text: #fff;
    }

    /* Styl pro celkový vzhled stránky */
    body {
      font-family: "Open Sans", sans-serif;
      color: #272829;
    }

    a {
      color: #149ddd;
      text-decoration: none;
    }

    a:hover {
      color: #37b3ed;
      text-decoration: none;
    }

    /* Header */
    #header {
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      width: 300px;
      transition: all ease-in-out 0.5s;
      z-index: 9997;
      transition: all 0.5s;
      padding: 0 15px;
      background: #0f1523;
      overflow-y: auto;
    }

    #main {
      margin-left: 300px;
    }

    @media (max-width: 1199px) {
      #header {
        left: -300px;
      }

      #main {
        margin-left: 0;
      }
    }

    /* Navigační menu */
    /* Desktop Navigation */
    .nav-menu {
      padding: 10px 0 0 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .nav-menu * {
      margin: 5px;
      padding: 0;
      list-style: none;
    }

    .nav-menu>ul>li {
      position: relative;
      white-space: nowrap;
    }

    .nav-menu a,
    .nav-menu a:focus {
      display: flex;
      align-items: center;
      color: #a8a9b4;
      padding: 1px;
      margin-bottom: 8px;
      transition: 0.3s;
      font-size: 15px;
    }

    .nav-menu a i,
    .nav-menu a:focus i {
      font-size: 24px;
      padding-right: 8px;
      color: #6f7180;
    }

    .nav-menu a:hover,
    .nav-menu .active,
    .nav-menu .active:focus,
    .nav-menu li:hover>a {
      text-decoration: none;
      color: #fff;
    }

    .nav-menu a:hover i,
    .nav-menu .active i,
    .nav-menu .active:focus i,
    .nav-menu li:hover>a i {
      color: #149ddd;
    }

    /* Mobilní navigace */
    .mobile-nav-toggle {
      position: fixed;
      right: 15px;
      top: 15px;
      z-index: 9998;
      border: 0;
      font-size: 24px;
      transition: all 0.4s;
      outline: none !important;
      background-color: #0f1523;
      color: #fff;
      width: 40px;
      height: 40px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      line-height: 0;
      border-radius: 50px;
      cursor: pointer;
    }

    .mobile-nav-active {
      overflow: hidden;
    }

    .mobile-nav-active #header {
      left: 0;
    }

    /* Sekce Hero */
    #hero {
      width: 100%;
      height: 100vh;
      background: url("photo/bg1.jpg") top center;
      background-size: cover;
    }

    #hero:before {
      content: "";
      background: rgba(5, 13, 24, 0.3);
      position: absolute;
      bottom: 0;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1;
    }

    @media (min-width: 1024px) {
      #hero {
        background-attachment: fixed;
      }
    }

    @media (max-width: 768px) {
      #hero h1 {
        font-size: 28px;
        line-height: 36px;
      }

      #hero h2 {
        font-size: 18px;
        line-height: 24px;
        margin-bottom: 30px;
      }
    }

    /* Skóre */
    .score {
      background-color: #0f1523;
      color: #fff;
      text-align: center;
      position: absolute;
      top: 0;
      left: 50%;
      transform: translateX(-50%);
      padding: 10px;
      width: 100%;
      box-sizing: border-box;
      border-radius: 10px;
    }

    #achievement-popup {
      position: fixed;
      top: 100px;
      right: 10%;
      padding: 10px;
      background-color: #0f1523;
      border-radius: 10px;
      border: 10px solid #fff;
      color: #fff;
      display: none;
    }

    .footer-button {
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%);
    }

    .footer-button {
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 5px;
    }

    .footer-button:hover {
      background-color: #0f1523;
      color: white;
    }

    /* Styly pro roletku */
    .achievement-content {
      display: none;
      /* Počátečně skryjeme obsah roletky */
      background-color: #333;
      color: #fff;
      padding: 10px;
      border-radius: 10px;
    }

    .achievement-content1 {
      display: none;
      /* Počátečně skryjeme obsah roletky */
      background-color: #333;
      color: #fff;
      padding: 10px;
      border-radius: 10px;
    }
  </style>

  <!-- End Main CSS -->
</head>

<body>
  <!-- Mobile nav toggle button -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- Header -->
  <header id="header">
    <div class="d-flex flex-column">
      <!-- Seznam Achievementů -->
      <div style="text-align: center">
        <!-- Tlačítko pro otevření/uzavření roletky -->
        <button onclick="toggleAchievement()">
          <i class="bx bxs-down-arrow"></i>
          Zobrazit/skrýt achievementy
        </button>
        <div class="achievement-content">
          <h6 id="1">
            <strong>1</strong> Šikula, dosáhl jsi své první skóre. GG
          </h6>
          <h6 id="10"><strong>10</strong> 10. Skóre! Jen tak dál draku.</h6>
          <h6 id="69" style="color: #fff"><strong>69</strong> NAJZ!</h6>
          <h6 id="100" style="color: #fff">
            <strong>100</strong> 100. Skóre! Už jen trochu.
          </h6>
          <h6 id="1000" style="color: #fff">
            <strong>1000</strong> 1000. Skóre! Šikula. Jen pokračuj.
          </h6>
          <h6 id="1707" style="color: #fff">
            <strong>1707</strong> LOLI time!
          </h6>
          <h6 id="6969" style="color: #fff">
            <strong>6969</strong> OMEGALUL!
          </h6>
          <h6 id="80085" style="color: #fff">
            <strong>80085</strong> BOOBS!
          </h6>
          <h6 id="696969" style="color: #fff">
            <strong>696969</strong> BRO přestaň!
          </h6>
          <h6 id="1000000" style="color: #fff">
            <strong>1000000</strong> NOLIFER!
          </h6>
        </div>
      </div>

      <button onclick="toggleAchievement1()">
        <i class="bx bxs-down-arrow"></i>
        Zobrazit/skrýt charaktery
      </button>
      <div class="achievement-content1">
        <!-- Tlačítka pro změnu obrázků -->
        <button onclick="changeImage(1)">
          <i class="bx bx-user"></i><span>PopRuda</span>
        </button>
        <button onclick="changeImage(2)" id="btnNiki">
          <i class="bx bx-user"></i><span>PopHole</span>
        </button>

        <button onclick="changeImage(4)" id="btnMira">
          <i class="bx bx-user"></i><span>PopWill</span>
        </button>
      </div>
      <br />
      <div></div>
    </div>
  </header>

  <!-- End Header -->

  <!-- Hero Section -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h3 class="score text3" id="score">0</h3>
      <button class="footer-button" id="footer-button">
        <i class="bx bx-trash"></i>
        Vymazat skóre
      </button>
      <div class="game-container">
        <div class="game-info">
          <img src="photo/george1.png" class="game-image" id="game-image" />
          <div id="div"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- End Hero -->

  <!--  Achievement oznámení -->
  <div id="achievement-popup"></div>
  <!--  End Achievement -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template JS File -->
  <script src="assets/js/main.js"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-SPW50ZLEL1"></script>
</body>

</html>