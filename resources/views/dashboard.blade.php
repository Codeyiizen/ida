<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Iron Deficiency Anaemia (IDA) Management">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">

    <!-- Page Title & Favicon -->
    <title>Dashboard | Iron Deficiency Anaemia (IDA) Management</title>
    <link rel="shortcut icon" href="assets/images/fevicon.png" type="image/x-icon">

      <!--stylesherets-->
      <link rel="stylesheet" type="text/css" href="assets/stylesheets/bootstrap.css" />
      <link rel="stylesheet" type="text/css" href="assets/stylesheets/font-awesome.min.css" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link
          href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="assets/fonts/fonts.css" />
      <link rel="stylesheet" type="text/css" href="assets/stylesheets/meanmenu.css" />
      <link rel="stylesheet" type="text/css" href="assets/stylesheets/main.css" />
    <style>
        .box {
            height: 205px;
            border-radius: 0px;
            overflow: hidden;
            cursor: pointer;
            position: relative;
            color: #f0f0f0;
            box-shadow: 0 10px 30px 5px rgba(0, 0, 0, 0.2);
        }

        .box::before {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
            content: '';
            background-color: rgba(0, 0, 0, 0.4);
            transition: opacity 0.2s ease-out;
            z-index: 1;
        }

        .box img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            /* opacity: 0.9;
            transition: opacity 0.2s ease-out; */
        }

        .box h4 {
            position: absolute;
            inset: auto auto 30px 30px;
            color: var(--white);
            margin: 0;
            transition: inset 0.3s 0.3s ease-out;
            font-weight: normal;
            z-index: 10;
            width: 85%;
            left: 50% !important;
            transform: translateX(-50%);
        }

        .box p,
        .box a {
            position: absolute;
            opacity: 0;
            transition: opacity 0.3s ease-out;
            z-index: 10;
        }


        .box p {
            inset: auto auto 80px 30px;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
        }

        .box a {
            inset: auto auto 30px 30px;
            color: inherit;
            text-decoration: none;
            left: 50%;
            transform: translateX(-50%);
        }

        .box:hover h4 {
            inset: auto auto 100px 30px;
            transition: inset 0.3s ease-out;
        }

        .box:hover p,
        .box:hover a {
            opacity: 1;
            transition: opacity 0.5s 0.1s ease-in;
        }

        .box:hover::before {
            background-color: rgba(0, 0, 0, 0.8);
            transition: opacity 0.3s ease-in;
        }

        .fa-arrow-right {
            vertical-align: middle;
        }
    </style>
</head>

<body class="bg-pattern">
    <!-- Container -->
    <div id="container">
        <!-- Header -->
        <header id="header">
            <div class="container">
                <div class="row align-items-lg-center">
                    <div class="col-lg-5 col-md-10">
                        <div class="logo d-flex align-items-center">
                            <a href="index.html">
                                <img class="img-fluid rounded" src="assets/images/logo.png"
                                    alt="Iron Deficiency Anaemia (IDA) Management">
                            </a>
                            <h4 class="mb-0 ml-3 d-inline-block text-white">Food Based Management System of
                                Iron Deficiency Anaemia</h4>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-2 d-lg-flex justify-content-lg-end align-items-lg-center">
                        <div class="mobile-menu clearfix"></div>
                        <nav id="main-menu">
                            <ul class="list-unstyled">
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li><a href="contact-us.html">Language<i class="fas fa-angle-down ml-2"></i></a>
                                    <ul class="list-unstyled">
                                        <li><a href="#">English</a></li>
                                        <li><a href="../../../pub/index.html">ਪੰਜਾਬੀ</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li class="brand d-lg-none"><img class="img-fluid mx-auto" src="assets/images/pau.png"
                                        alt="Punjab Agricultural University"></li>
                            </ul>
                        </nav>
                        <div class="brand d-lg-block d-none">
                            <img class="img-fluid mx-auto" src="assets/images/pau.png"
                                alt="Punjab Agricultural University">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /Header -->
        <!-- Content -->
        <div id="content">
            <section class="section">
                <div class="container">
                    <h2 class="mb-4">Welcome to Iron Deficiency Anaemia (IDA) Management System</h2>
                    <div class="row text-center">
                        <div class="col-md-6 col-lg-4">
                            <div class="box mb-4 mb-lg-0">
                                <img class="img-fluid" src="assets/images/iron-deficiency-anaemia.gif"
                                    alt="Know about Iron Deficiency Anaemia">
                                <div class="box-content">
                                    <h4>Know about Iron Deficiency Anaemia</h4>
                                    <!-- <p>
                                        A condition of the body caused due to the deficiency of essential nutrients
                                        like iron, protein, vitamin B12, folic acid etc. Although there are various
                                        forms of anemia, the most prevalent type is iron-deficiency anemia.
                                    </p> -->
                                    <a href="iron-deficiency-anaemia.html" class="btn btn-primary">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="box mb-4 mb-lg-0">
                                <img class="img-fluid" src="assets/images/diseas-management-through-diet.gif"
                                    alt="Disease Management through Diet">
                                <div class="box-content">
                                    <h4>Disease Management through Diet</h4>
                                    <!-- <p>
                                        Include more green leafy Vegetables in diet. Eat pulses and legumes to increase
                                        your iron intake. Pregnant women need almost twice as much iron than women who
                                        are not pregnant.
                                    </p> -->
                                    <a href="disease-management-through-diet.html" class="btn btn-primary">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="box">
                                <img class="img-fluid" src="assets/images/yoga-poses-deficiency-anaemia.gif"
                                    alt="Yoga Poses for Managing Iron Deficiency Anaemia">
                                <div class="box-content">
                                    <h4>Yoga Poses for Managing Iron Deficiency Anaemia</h4>
                                    <!-- <p>
                                        Anaemia is a condition in which the iron content or hemoglobin levels in the
                                        blood are below normal. Oxygen plays a crucial role in the breathing process as
                                        it regulates energy and supports body metabolism.
                                    </p> -->
                                    <a href="yoga-poses-managing-anaemia.html" class="btn btn-primary">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /Content -->
    </div>
    <!-- /container-->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <p>&copy; 2024 Food Based Management System of
                        Iron Deficiency Anaemia</p>
                </div>
                <div class="col-lg-4 text-lg-right">
                    <ul class="list-unstyled">
                        <li>
                            <a href="disclaimer.html">Disclaimer</a>
                        </li>
                        <li><a href="developed.html">Developed By</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
 <!-- Javascript -->
 <script src="assets/javascripts/jquery-1.11.2.min.js"></script>
 <script src="assets/javascripts/popper.js"></script>
 <script src="assets/javascripts/bootstrap.bundle.js"></script>
 <script src="assets/javascripts/bootstrap.js"></script>
 <script src="assets/javascripts/all.js"></script>
 <script src="assets/javascripts/meanmenu.js"></script>
 <!-- Custom JS Code for this page -->
 <script src="assets/javascripts/main.js"></script>
</body>

</html>