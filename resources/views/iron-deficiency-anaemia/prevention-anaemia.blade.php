<!-- Header -->
@include('header')
<!-- Content -->
<div id="content">
    <section class="section pt-0">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent px-0">
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('home') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('iron-deficiency-anaemia') }}">Iron
                            Deficiency Anaemia</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('prevention-anaemia.prevention')</li>
                </ol>
            </nav>
            <h1 class="h2 mb-4">@lang('prevention-anaemia.prevention')</h1>
            <div class="prevention-anaemia-container d-flex justify-content-center">
                <ul class="list-unstyled list-prevention-anaemia text-center">
                    <li><a class="hover-styled" href="{{ route ('eat-diet-rich-in-iron') }}"><span>@lang('prevention-anaemia.eat')</span></a></li>
                    <li><a class="hover-styled"
                            href="{{ route ('increase-your-vitamin-folate-intake') }}"><span>@lang('prevention-anaemia.Increase')</span></a></li>
                    <li><a class="hover-styled" href="{{ route ('cook-using-iron-pots-pans') }}"><span>@lang('prevention-anaemia.Cook')</span></a></li>
                    <li><a class="hover-styled" href="{{ route ('avoid-drinking-coffee-tea-meals') }}"><span>@lang('prevention-anaemia.Avoid')</span></a></li>
                    <li><a class="hover-styled" href="{{ route ('treat-cause-blood-loss') }}"><span>@lang('prevention-anaemia.Treat')</span></a></li>
                </ul>
            </div>
        </div>
    </section>
</div>
<!-- /Content -->
</div>
@include('footer')
</body>

</html>