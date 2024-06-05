<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="@lang('auth.sign1')">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">

    <!-- Page Title & Favicon -->
    <title>@lang('auth.sign1')</title>
    <link rel="shortcut icon" href="{{url('/')}}/public/assets/images/fevicon.png" type="image/x-icon">

    <!--stylesherets-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/public/assets/stylesheets/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/public/assets/stylesheets/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/public/assets/fonts/fonts.css" />
    <!-- <link rel="stylesheet" type="text/css" href="{{ url('/') }}/public/assets/stylesheets/meanmenu.css" /> -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/public/assets/stylesheets/main.css" />
</head>

<body class="bg-pattern">
    <!-- Container -->
    <div id="container">
        <!-- Header -->
        <header id="header">
            <div class="container">
                <div class="row align-items-lg-center">
                    <div class="col-lg-5">
                        <div class="logo d-flex align-items-center pr-lg-3 pr-5">
                            <a href="{{ url('/') }}">
                                <img class="img-fluid rounded" src="{{ url('/') }}/public/assets/images/logo.png"
                                    alt="Iron Deficiency Anaemia (IDA) Management">
                            </a>
                            <h4 class="mb-0 ml-3 d-inline-block text-white">@lang('auth.logoText')</h4>
                        </div>
                    </div>
                    <div class="col-lg-7 d-lg-flex justify-content-lg-end align-items-lg-center">
                        <!-- <div class="mobile-menu clearfix"></div> -->
                        <nav id="main-menu">
                            <button type="button" class="menu-btn menu-btn1">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </button>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('home') }}">@lang('auth.dashboard')</a></li>

                                <!-- <li><a href="contact-us.html">Language<i class="fas fa-angle-down ml-2"></i></a>
                                    <ul class="list-unstyled">
                                        <li><a href="#">English</a></li>
                                        <li><a href="">ਪੰਜਾਬੀ</a></li>
                                    </ul>
                                </li> -->
                                <li>
                                    <span class="selectbox px-3">
                                        <select class="form-control langchange border-0 pl-0">
                                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>
                                                English</option>
                                            <option value="pn" {{ session()->get('locale') == 'pn' ? 'selected' : '' }}>
                                                ਪੰਜਾਬੀ</option>
                                        </select>
                                    </span>
                                </li>
                                <li><a href="{{ route('contactus') }}">@lang('auth.contact-us')</a></li>
                                <li class="brand d-lg-none"><img class="img-fluid mx-auto"
                                        src="{{ url('/') }}/public/assets/images/pau.png"
                                        alt="Punjab Agricultural University"></li>
                            </ul>
                        </nav>
                        <div class="brand d-lg-block d-none">
                            <img class="img-fluid mx-auto" src="{{ url('/') }}/public/assets/images/pau.png"
                                alt="Punjab Agricultural University">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /Header -->
        <!-- Content -->