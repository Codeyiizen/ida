<!-- Header -->
@include('header')
        <div id="content">
            <section class="section pt-0">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent px-0">
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('home') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><a
                                    href="{{ route('disease-management-through-diet') }}">Disease management through diet</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><a
                                    href="{{ route('diet-plan-anaemia-patient') }}">Diet Plan
                                    for Iron deficiency Anaemia
                                    Patient</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@lang('disease-management-through-diet.diet')</li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-3">@lang('disease-management-through-diet.for') <span class="brand-color">@lang('disease-management-through-diet.Vegetarians')</span></h1>
                    <h3 class="text-center mb-4">@lang('disease-management-through-diet.day4')</h3>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="card bg-green box-shadow2">
                                <div class="card-body">
                                    <div class="diet-chart-container">
                                        <div class="diet-chart-item">
                                            <h5>@lang('disease-management-through-diet.Morning')</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>@lang('disease-management-through-diet.cups')</li>
                                                <li>@lang('disease-management-through-diet.nuts')</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>@lang('disease-management-through-diet.Breakfast')</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>@lang('disease-management-through-diet.carrot')</li>
                                                <li>@lang('disease-management-through-diet.almondsj')</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5> @lang('disease-management-through-diet.Morning')</h5>
                                            <p>@lang('disease-management-through-diet.Grapes')</p>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>@lang('disease-management-through-diet.Lunch')</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>@lang('disease-management-through-diet.cabbagee')</li>
                                                <li>@lang('disease-management-through-diet.bajrae')</li>
                                                <li>@lang('disease-management-through-diet.beetroottt')</li>
                                                <li>@lang('disease-management-through-diet.katories')</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5> @lang('disease-management-through-diet.snacks')</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>@lang('disease-management-through-diet.tea')</li>
                                                <li>@lang('disease-management-through-diet.channa')</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5> @lang('disease-management-through-diet.Dinner')</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>@lang('disease-management-through-diet.mixx')</li>
                                                <li>@lang('disease-management-through-diet.Roti2')</li>
                                                <li>@lang('disease-management-through-diet.salad')</li>
                                                <li>@lang('disease-management-through-diet.waters')</li>
                                            </ul>
                                        </div>
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