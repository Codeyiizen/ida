<header id="header">
            <div class="container">
                <div class="row align-items-lg-center">
                    <div class="col-lg-5 col-md-10">
                        <div class="logo d-flex align-items-center">
                            <a href="{{ url('/') }}">
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
                                <li><a href="{{ route('home') }}">Dashboard</a></li>
                                <li><a href="contact-us.html">Language<i class="fas fa-angle-down ml-2"></i></a>
                                    <ul class="list-unstyled">
                                        <li><a href="#">English</a></li>
                                        <li><a href="{{ route('pub') }}">ਪੰਜਾਬੀ</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('contactus') }}">Contact Us</a></li>
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