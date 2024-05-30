<!-- Header -->
@include('header')
<div id="content">
    <section class="section pt-0">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent px-0">
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a
                            href="{{ route('disease-management-through-diet') }}">Disease management through diet</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        @lang('disease-management-through-diet.cardThreeH4')</li>
                </ol>
            </nav>
            <h1 class="h2 mb-4">@lang('disease-management-through-diet.cardThreeH4')</h1>
            <h4>@lang('disease-management-through-diet.alcohol')</h4>
            <p>@lang('disease-management-through-diet.alcohol_p')</p>
            <h4>@lang('disease-management-through-diet.coffee')</h4>
            <p>@lang('disease-management-through-diet.coffee_p')</p>
            <h4>@lang('disease-management-through-diet.calcium-foods')</h4>
            <p>@lang('disease-management-through-diet.calcium-foods_p')</p>
            <h4>@lang('disease-management-through-diet.gluten-containing-foods')</h4>
            <p>@lang('disease-management-through-diet.gluten-containing-foods_p')</p>
            <ul class="list-unstyled list-unordered mb-3">
                <li>@lang('disease-management-through-diet.foods-avoid_li1')</li>
            </ul>
        </div>
    </section>
</div>
<!-- /Content -->
</div>
@include('footer')
</body>

</html>