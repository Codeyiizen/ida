<!-- Header -->
@include('header')
        <div id="content">
            <section class="section pt-0">
                <div class="container text-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent px-0">
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a
                                    href="{{ route('yoga-poses-managing-anaemia') }}">Yoga
                                    Poses for Managing Iron Deficiency Anaemia</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@lang('yoga-poses-managing-anaemia.cardOneH4')</li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-4"></h1>
                    <h4>@lang('yoga-poses-managing-anaemia.steps')</h4>
                    <figure class="figure">
                        <img class="img-fluid" src="../assets/images/surya-namaskar/image1.jpg" alt="Surya Namaskar">
                    </figure>
                    <p>1. @lang('yoga-poses-managing-anaemia.snStep1')</p>
                    <figure class="figure">
                        <img class="img-fluid" src="../assets/images/surya-namaskar/image2.jpg" alt="Surya Namaskar">
                    </figure>
                    <p>2. @lang('yoga-poses-managing-anaemia.snStep2')</p>
                    <figure class="figure">
                        <img class="img-fluid" src="../assets/images/surya-namaskar/image3.jpg" alt="Surya Namaskar">
                    </figure>
                    <p>3. @lang('yoga-poses-managing-anaemia.snStep3')</p>
                    <figure class="figure">
                        <img class="img-fluid" src="../assets/images/surya-namaskar/image4.jpg" alt="Surya Namaskar">
                    </figure>
                    <p>
                        4. @lang('yoga-poses-managing-anaemia.snStep4')
                    </p>
                    <figure class="figure">
                        <img class="img-fluid" src="../assets/images/surya-namaskar/image5.jpg" alt="Surya Namaskar">
                    </figure>
                    <p>
                        5.@lang('yoga-poses-managing-anaemia.snStep5')
                    </p>
                    <figure class="figure">
                        <img class="img-fluid" src="../assets/images/surya-namaskar/image6.jpg" alt="Surya Namaskar">
                    </figure>
                    <p>6.@lang('yoga-poses-managing-anaemia.snStep6')</p>
                    <figure class="figure">
                        <img class="img-fluid" src="../assets/images/surya-namaskar/image7.jpg" alt="Surya Namaskar">
                    </figure>
                    <p>7. @lang('yoga-poses-managing-anaemia.snStep7')</p>
                    <figure class="figure">
                        <img class="img-fluid" src="../assets/images/surya-namaskar/image8.jpg" alt="Surya Namaskar">
                    </figure>
                    <p>8. @lang('yoga-poses-managing-anaemia.snStep8')</p>
                    <figure class="figure">
                        <img class="img-fluid" src="../assets/images/surya-namaskar/image9.jpg" alt="Surya Namaskar">
                    </figure>
                    <p>9. @lang('yoga-poses-managing-anaemia.snStep9')</p>
                    <figure class="figure">
                        <img class="img-fluid" src="../assets/images/surya-namaskar/image10.jpg" alt="Surya Namaskar">
                    </figure>
                    <p>10. @lang('yoga-poses-managing-anaemia.snStep10')</p>
                    <figure class="figure">
                        <img class="img-fluid" src="../assets/images/surya-namaskar/image11.jpg" alt="Surya Namaskar">
                    </figure>
                    <p>11. @lang('yoga-poses-managing-anaemia.snStep11')</p>
                    <figure class="figure">
                        <img class="img-fluid" src="../assets/images/surya-namaskar/image12.jpg" alt="Surya Namaskar">
                    </figure>
                    <p>12. @lang('yoga-poses-managing-anaemia.snStep12')</p>
                </div>
            </section>
        </div>
        <!-- /Content -->
    </div>
   @include('footer')
</body>

</html>