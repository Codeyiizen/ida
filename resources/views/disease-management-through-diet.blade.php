<!-- Header -->
@include('header')
<div id="content">
    <section class="section pt-0 pb-4">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent px-0">
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Disease management through diet</li>
                </ol>
            </nav>
            <h1 class="h2 mb-4">@lang('auth.cardTwoH4')</h1>
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="card box-shadow hover-styled style-1">
                        <figure class="figure mb-0">
                            <img src="{{ url('/') }}/public/assets/images/disease-management-through-diet/locally-available-iron-vitamin-rich-food.gif"
                                class="card-img-top rounded-0" alt="Locally available iron and vitamin C rich food">
                        </figure>
                        <div class="card-body d-flex flex-column">
                            <h4>@lang('disease-management-through-diet.cardOneH1')</h4>
                            <p class="card-text">@lang('disease-management-through-diet.cardTwo_li6')... </p>
                            <div class="btn-container mt-auto mb-0">
                                <a href="{{ route('locally-available-iron-vitamin-rich-food') }}"
                                    class="btn btn-primary">@lang('auth.read-more')</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card box-shadow hover-styled style-1">
                        <figure class="figure mb-0">
                            <img src="{{ url('/') }}/public/assets/images/disease-management-through-diet/diet-tips.gif"
                                class="card-img-top rounded-0" alt="Diet Tips">
                        </figure>
                        <div class="card-body d-flex flex-column">
                            <h4>@lang('disease-management-through-diet.cardTwoH4')</h4>
                            <p class="card-text">@lang('disease-management-through-diet.cardTwo_li5')... </p>
                            <div class="btn-container mt-auto mb-0">
                                <a href="{{ route('diet-tips') }}" class="btn btn-primary">@lang('auth.read-more')</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card box-shadow hover-styled style-1">
                        <figure class="figure mb-0">
                            <img src="{{ url('/') }}/public/assets/images/disease-management-through-diet/drugs-instruction.gif"
                                class="card-img-top rounded-0" alt="Drugs Instruction">
                        </figure>
                        <div class="card-body d-flex flex-column">
                            <h4>@lang('disease-management-through-diet.cardThreeH4')</h4>
                            <p class="card-text">@lang('disease-management-through-diet.drugs-instruction_li2')...</p>
                            <div class="btn-container mt-auto mb-0">
                                <a href="{{ route('drugs-instruction') }}" class="btn btn-primary">@lang('auth.read-more')</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card box-shadow hover-styled style-1">
                        <figure class="figure mb-0">
                            <img src="{{ url('/') }}/public/assets/images/disease-management-through-diet/foods-avoid.gif"
                                class="card-img-top rounded-0" alt="Foods to Avoid">
                        </figure>
                        <div class="card-body d-flex flex-column">
                            <h4>@lang('disease-management-through-diet.cardFourH4')</h4>
                            <p class="card-text">@lang('disease-management-through-diet.alcohol_p')...</p>
                            <div class="btn-container mt-auto mb-0">
                                <a href="{{ route('foods-avoid') }}" class="btn btn-primary">@lang('auth.read-more')</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card box-shadow hover-styled style-1">
                        <figure class="figure mb-0">
                            <img src="{{ url('/') }}/public/assets/images/disease-management-through-diet/diet-plan-anaemia-patient.gif"
                                class="card-img-top rounded-0" alt="Diet Plan for Anaemia Patient">
                        </figure>
                        <div class="card-body d-flex flex-column">
                            <h4>@lang('disease-management-through-diet.cardFiveH4')</h4>
                            <p class="card-text">@lang('disease-management-through-diet.cardFive_p')...</p>
                            <div class="btn-container mt-auto mb-0">
                                <a href="{{ route('diet-plan-anaemia-patient') }}" class="btn btn-primary">@lang('auth.read-more')</a>
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