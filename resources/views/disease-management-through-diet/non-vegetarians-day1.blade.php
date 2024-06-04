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
                            <li class="breadcrumb-item active" aria-current="page">@lang('disease-management-through-diet.nonveg')
                            </li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-3">@lang('disease-management-through-diet.rich') <span class="brand-color">  @lang('disease-management-through-diet.non')</span></h1>
                    <h3 class="text-center mb-4">@lang('disease-management-through-diet.Day')</h3>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="card bg-green box-shadow2">
                                <div class="card-body">
                                    <div class="diet-chart-container">
                                        <div class="diet-chart-item">
                                            <h5>@lang('disease-management-through-diet.Morning')</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>@lang('disease-management-through-diet.milk')</li>
                                                <li>@lang('disease-management-through-diet.biscuit')</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>@lang('disease-management-through-diet.Breakfast')</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>@lang('disease-management-through-diet.egg')</li>
                                                <li>@lang('disease-management-through-diet.slices')</li>
                                                <li>@lang('disease-management-through-diet.almondss')</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>@lang('disease-management-through-diet.mid')</h5>
                                            <p>@lang('disease-management-through-diet.each')</p>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>@lang('disease-management-through-diet.Lunch')</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>@lang('disease-management-through-diet.bowl')</li>
                                                <li>@lang('disease-management-through-diet.saag')</li>
                                                <li>@lang('disease-management-through-diet.flour')</li>
                                                <li>@lang('disease-management-through-diet.lemon')</li>
                                                <li>@lang('disease-management-through-diet.amla')</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>@lang('disease-management-through-diet.snacks')</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>@lang('disease-management-through-diet.glasss')</li>
                                                <li>@lang('disease-management-through-diet.roasted')</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>@lang('disease-management-through-diet.Dinner')</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>@lang('disease-management-through-diet.rotii')</li>
                                                <li>@lang('disease-management-through-diet.Curry')</li>
                                                <li>@lang('disease-management-through-diet.lemonn')</li>
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