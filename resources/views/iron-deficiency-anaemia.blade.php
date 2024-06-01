<!-- Header -->
@include('header')
<div id="content">
    <section class="section pt-0 pb-4">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent px-0">
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('home') }}">@lang('auth.dashboard')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('auth.cardOne_H4')</li>
                </ol>
            </nav>
            <h1 class="h2 mb-4">@lang('auth.title_h1')</h1>
            <div class="row text-center">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card box-shadow hover-styled style-1">
                        <figure class="figure mb-0">
                            <img src="{{ url('/') }}/public/assets/images/iron-deficiency-anaemia/know-iron-deficiency-anaemia.gif"
                                class="card-img-top rounded-0" alt="Know Iron Deficiency Anaemia">
                        </figure>
                        <div class="card-body d-flex flex-column">
                            <h4>@lang('auth.cardOne_H4')</h4>
                            <p class="card-text">@lang('auth.cardOne_P')... </p>
                            <div class="btn-container mt-auto mb-0">
                                <a href="{{ route('know-iron-deficiency-anaemia') }}"
                                    class="btn btn-primary">@lang('auth.read-more')</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card box-shadow hover-styled style-1">
                        <figure class="figure mb-0">
                            <img src="{{ url('/') }}/public/assets/images/iron-deficiency-anaemia/causes-anaemia.gif"
                                class="card-img-top rounded-0" alt="Causes of Anaemia">
                        </figure>
                        <div class="card-body d-flex flex-column">
                            <h4>@lang('auth.cardTwo_H4')</h4>
                            <p class="card-text">@lang('lack-iron-rich-diet.li_1')... </p>
                            <div class="btn-container mt-auto mb-0">
                                <a href="{{ route('causes-anaemia') }}"
                                    class="btn btn-primary">@lang('auth.read-more')</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card box-shadow hover-styled style-1">
                        <figure class="figure mb-0">
                            <img src="{{ url('/') }}/public/assets/images/iron-deficiency-anaemia/symptoms-anaemia.gif"
                                class="card-img-top rounded-0" alt="Symptoms of Anaemia">
                        </figure>
                        <div class="card-body d-flex flex-column">
                            <h4>@lang('auth.cardThree_H4')</h4>
                            <p class="card-text">@lang('auth.cardThree_P')...</p>
                            <div class="btn-container mt-auto mb-0">
                                <a href="{{ route('symptoms-anaemia') }}"
                                    class="btn btn-primary">@lang('auth.read-more')</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card box-shadow hover-styled style-1">
                        <figure class="figure mb-0">
                            <img src="{{ url('/') }}/public/assets/images/iron-deficiency-anaemia/prevention-anaemia.gif"
                                class="card-img-top rounded-0" alt="Prevention of Anaemia ">
                        </figure>
                        <div class="card-body d-flex flex-column">
                            <h4>@lang('auth.cardFour_H4')</h4>
                            <p class="card-text">@lang('auth.cardFour_P')...</p>
                            <div class="btn-container mt-auto mb-0">
                                <a href="{{ route('prevention-anaemia') }}"
                                    class="btn btn-primary">@lang('auth.read-more')</a>
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