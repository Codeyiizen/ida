<!-- Header -->
@include('header')
<div id="content">
    <section class="section pt-0 pb-4">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent px-0">
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Yoga Poses for Managing Iron
                        Deficiency Anaemia</li>
                </ol>
            </nav>
            <h1 class="h2 mb-3">@lang('yoga-poses-managing-anaemia.h1')</h1>
            <p class="mb-4">
                @lang('yoga-poses-managing-anaemia.p')</p>
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="card box-shadow hover-styled style-1">
                        <figure class="figure mb-0">
                            <img src="{{ url('/') }}/public/assets/images/yoga-poses-managing-anaemia/surya-namaskar.gif"
                                class="card-img-top rounded-0" alt="Surya Namaskar">
                        </figure>
                        <div class="card-body d-flex flex-column">
                            <h4>@lang('yoga-poses-managing-anaemia.cardOneH4')</h4>
                            <p class="card-text">@lang('yoga-poses-managing-anaemia.cardOneP')</p>
                            <div class="btn-container mt-auto mb-0">
                                <a href="{{ route('surya-namaskar') }}" class="btn btn-primary">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card box-shadow hover-styled style-1">
                        <figure class="figure mb-0">
                            <img src="{{ url('/') }}/public/assets/images/yoga-poses-managing-anaemia/pawanmuktasana.gif"
                                class="card-img-top rounded-0" alt="Pawanmuktasana Yoga">
                        </figure>
                        <div class="card-body d-flex flex-column">
                            <h4>@lang('yoga-poses-managing-anaemia.cardTwoH4')</h4>
                            <p class="card-text">@lang('yoga-poses-managing-anaemia.cardTwoP')</p>
                            <div class="btn-container mt-auto mb-0">
                                <a href="{{ route('pawanmuktasana') }}" class="btn btn-primary">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card box-shadow hover-styled style-1">
                        <figure class="figure mb-0">
                            <img src="{{ url('/') }}/public/assets/images/yoga-poses-managing-anaemia/sarvangasana.gif"
                                class="card-img-top rounded-0" alt="Sarvangasana Yoga">
                        </figure>
                        <div class="card-body d-flex flex-column">
                            <h4>@lang('yoga-poses-managing-anaemia.cardThreeH4')</h4>
                            <p class="card-text">@lang('yoga-poses-managing-anaemia.cardThreeP')</p>
                            <div class="btn-container mt-auto mb-0">
                                <a href="{{ route('sarvangasana') }}" class="btn btn-primary">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card box-shadow hover-styled style-1">
                        <figure class="figure mb-0">
                            <img src="{{ url('/') }}/public/assets/images/yoga-poses-managing-anaemia/viparita-karani.jfif"
                                class="card-img-top rounded-0" alt="Viparita Karani Yoga">
                        </figure>
                        <div class="card-body d-flex flex-column">
                            <h4>@lang('yoga-poses-managing-anaemia.cardFourH4')</h4>
                            <p class="card-text">@lang('yoga-poses-managing-anaemia.cardFourP')</p>
                            <div class="btn-container mt-auto mb-0">
                                <a href="{{ route('viparita-karani') }}" class="btn btn-primary">Learn
                                    More</a>
                            </div>
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