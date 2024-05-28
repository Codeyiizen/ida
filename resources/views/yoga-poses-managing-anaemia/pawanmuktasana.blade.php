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
                            <li class="breadcrumb-item active" aria-current="page">@lang('yoga-poses-managing-anaemia.cardTwoH4')</li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-4">@lang('yoga-poses-managing-anaemia.cardTwoH4')</h1>
                    <h4>@lang('yoga-poses-managing-anaemia.steps') 1</h4>
                    <ul class="list-unstyled list-unordered alt mb-3">
                        <li>@lang('yoga-poses-managing-anaemia.pmStep1_li1')</li>
                        <li>@lang('yoga-poses-managing-anaemia.pmStep1_li2')</li>
                    </ul>
                    <figure class="figure">
                        <img class="img-fluid" src="../assets/images/surya-namaskar/image1.jpg" alt="Pawanmuktasana Yoga">
                    </figure>
                    <h4>@lang('yoga-poses-managing-anaemia.step') 2</h4>
                    <ul class="list-unstyled list-unordered alt mb-3">
                        <li>@lang('yoga-poses-managing-anaemia.pmStep2_li1')</li>
                        <li>@lang('yoga-poses-managing-anaemia.pmStep2_li2')</li>
                    </ul>
                    <figure class="figure">
                        <img class="img-fluid" src="../assets/images/surya-namaskar/image2.jpg" alt="Pawanmuktasana Yoga">
                    </figure>
                    <h4>@lang('yoga-poses-managing-anaemia.step') 3</h4>
                    <ul class="list-unstyled list-unordered alt mb-3">
                        <li>@lang('yoga-poses-managing-anaemia.pmStep3_li1')</li>
                        <li>@lang('yoga-poses-managing-anaemia.pmStep3_li2')</li>
                        <li>@lang('yoga-poses-managing-anaemia.pmStep3_li3')</li>
                    </ul>
                    <figure class="figure">
                        <img class="img-fluid" src="../assets/images/surya-namaskar/image3.jpg" alt="Pawanmuktasana Yoga">
                    </figure>
                    <h4>@lang('yoga-poses-managing-anaemia.step') 4</h4>
                    <ul class="list-unstyled list-unordered alt mb-3">
                        <li>@lang('yoga-poses-managing-anaemia.pmStep4_li1')</li>
                        <li>@lang('yoga-poses-managing-anaemia.pmStep4_li2')</li>
                        <li>@lang('yoga-poses-managing-anaemia.pmStep4_li3')</li>
                    </ul>
                    <figure class="figure">
                        <img class="img-fluid" src="../assets/images/surya-namaskar/image4.jpg" alt="Pawanmuktasana Yoga">
                    </figure>
                </div>
            </section>
        </div>
       <!-- /Content -->
    </div>
   @include('footer')
</body>

</html>