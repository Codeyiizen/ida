<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Iron Deficiency Anaemia (IDA) Management">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">

    <!-- Page Title & Favicon -->
    <title>BMI Calculator | Iron Deficiency Anaemia (IDA) Management</title>
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
                                        <li><a href="#">ਪੰਜਾਬੀ</a></li>
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
                    <div class="card box-shadow">
                        <div class="card-body">
                            <h3 class="bg-info text-center text-white mb-4">Health Status</h3>
                            <div class="row mb-4">
                                <div class="col-md-8 offset-md-2">
                                    <form action="" class="form mb-4 mb-md-0">
                                        <div class="form-group row mb-3">
                                            <label class="col-3 form-label text-right mb-0" for="age">Age (Year)</label>
                                            <div class="col-9">
                                                <input class="form-control" placeholder="" type="number" name="age"
                                                    id="age" min="18" max="100">
                                                <!-- <small id="ageHelp" class="form-text text-muted">Age between 18 yrs to 49
                                                    yrs</small> -->
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-3 form-label text-right mb-0" for="age">Weight
                                                (Kg)</label>
                                            <div class="col-9">
                                                <input class="form-control" placeholder="" type="number" name="weight"
                                                    id="weight" min="1" max="200">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-3 form-label text-right mb-0" for="height">Height
                                                (cm)</label>
                                            <div class="col-9">
                                                <input class="form-control" placeholder="" type="number" name="height"
                                                    id="height">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-3 form-label text-right" for="hemoglobin">Hemoglobin
                                                level</label>
                                            <div class="col-9">
                                                <input class="form-control" placeholder="" type="number"
                                                    name="hemoglobin" id="hemoglobin">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label class="col-3 form-label text-right">Add your Symptoms</label>
                                            <div class="col-9 form-group mb-0">
                                                <div class="form-check">
                                                    <input type="radio" id="dizziness-tiredness" name="symptoms"
                                                        class="custom-control-input" checked>
                                                    <label for="dizziness-tiredness">Dizziness and Tiredness</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="unusual-heartbeat" name="symptoms"
                                                        class="custom-control-input">
                                                    <label for="unusual-heartbeat">Unusual Heartbeat</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="shortness-breath" name="symptoms"
                                                        class="custom-control-input">
                                                    <label for="shortness-breath">Shortness of breath</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="inability-concentrate" name="symptoms"
                                                        class="custom-control-input">
                                                    <label for="inability-concentrate">Inability to concentrate</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="resistance-infections" name="symptoms"
                                                        class="custom-control-input">
                                                    <label for="resistance-infections">Lowered resistance to
                                                        infections</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="loss-appetite" name="symptoms"
                                                        class="custom-control-input">
                                                    <label for="loss-appetite">Loss of appetite</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="whiteness-eyelid" name="symptoms"
                                                        class="custom-control-input">
                                                    <label for="whiteness-eyelid">Whiteness in the inner portion of the
                                                        eyelid</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="brittle-nail" name="symptoms"
                                                        class="custom-control-input">
                                                    <label for="brittle-nail">Brittle nail (spoon shaped nail)</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="angular-stomatitis" name="symptoms"
                                                        class="custom-control-input">
                                                    <label for="angular-stomatitis">Angular stomatitis</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="fatigue" name="symptoms"
                                                        class="custom-control-input">
                                                    <label for="fatigue">Fatigue</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="whiteness-nailsPalms" name="symptoms"
                                                        class="custom-control-input">
                                                    <label for="whiteness-nailsPalms">Whiteness in nails and
                                                        palms</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="headache" name="symptoms"
                                                        class="custom-control-input">
                                                    <label for="headache">Headache</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <a href="dashboard.html" class="btn btn-primary">Calculate</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <hr />
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <div class="card bg-info mb-4 d-inline-block">
                                        <div class="card-body">
                                            <h4 class="text-center text-white">BMI</h4>
                                            <h3 class="text-center mb-0 text-white"><span
                                                    class="bmi-result">170.07</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 text-right">
                                    <figure class="figure2">
                                        <img class="img-fluid" src="assets/images/ida-detection.gif"
                                            alt="IDA Detection">
                                    </figure>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="dashboard.html" class="btn btn-success">Save and Proceed</a>
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