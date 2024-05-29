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
                            <li class="breadcrumb-item active" aria-current="page">@lang('yoga-poses-managing-anaemia.cardThreeH4')</li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-4">@lang('yoga-poses-managing-anaemia.cardThreeH4')</h1>
                    <h4>@lang('yoga-poses-managing-anaemia.step') 1</h4>
                    <p>@lang('yoga-poses-managing-anaemia.sgStep1_p')</p>
                    <figure class="figure2">
                        <img class="img-fluid" src="{{ url('/') }}/public/assets/images/sarvangasana/image1.jpg" alt="Sarvangasana Yoga">
                    </figure>
                    <h4>@lang('yoga-poses-managing-anaemia.step') 2</h4>
                    <ul class="list-unstyled list-unordered alt mb-3">
                        <li>@lang('yoga-poses-managing-anaemia.sgStep2_li1')</li>
                        <li>@lang('yoga-poses-managing-anaemia.sgStep2_li2')</li>
                        <li>@lang('yoga-poses-managing-anaemia.sgStep2_li3')</li>
                        <li>@lang('yoga-poses-managing-anaemia.sgStep2_li4')</li>
                    </ul>
                    <figure class="figure2">
                        <img class="img-fluid" src="{{ url('/') }}/public/assets/images/sarvangasana/image2.jpg" alt="Sarvangasana Yoga">
                    </figure>
                    <h4>@lang('yoga-poses-managing-anaemia.step') 3</h4>
                    <p>@lang('yoga-poses-managing-anaemia.sgStep3_p')</p>
                    <figure class="figure2">
                        <img class="img-fluid" src="{{ url('/') }}/public/assets/images/sarvangasana/image3.jpg" alt="Sarvangasana Yoga">
                    </figure>
                    <h4>@lang('yoga-poses-managing-anaemia.step') 4</h4>
                    <p>@lang('yoga-poses-managing-anaemia.sgStep4_p')</p>
                    <figure class="figure2">
                        <img class="img-fluid" src="{{ url('/') }}/public/assets/images/sarvangasana/image4.jpg" alt="Sarvangasana Yoga">
                    </figure>
                </div>
            </section>
        </div>
        <!-- /Content -->
    </div>
   @include('footer')
</body>

</html>