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
       @include('header')
        <div id="content">
            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="card box-shadow">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h2>Contact Us</h2>
                                            <p>Please fill below form</p>
                                    </div>
                                    <form action="" class="form mb-0">
                                        <div class="form-group mb-4">
                                            <label class="form-label" for="name">Enter your full name</label>
                                            <input class="form-control" type="text" name="name" id="name">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="form-label" for="name">Enter your email address </label>
                                            <input class="form-control" type="email" name="email" id="email">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="form-label" for="name">Enter your subject</label>
                                            <input class="form-control" type="text" name="subject" id="subject">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="form-label" for="name">Enter your message</label>
                                            <textarea class="form-control" name="message" id="" cols="20"
                                                rows="10"></textarea>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /Content -->
    </div>
   @include('footer')
</body>

</html>