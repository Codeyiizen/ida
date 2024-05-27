<!-- Header -->
@include('header')
        <div id="content">
            <section class="section pt-0">
                <div class="container clearfix">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent px-0">
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('home') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><a
                                    href="{{ route('iron-deficiency-anaemia') }}">Iron
                                    Deficiency Anaemia</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a
                                    href="{{ route('prevention-anaemia') }}">Prevention of Anaemia</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@lang('prevention-anaemia.drinking')</li>
                        </ol>
                    </nav>
                    <h1 class="h2">@lang('prevention-anaemia.drinking')</h1>
                    <img class="img-fluid alignright"
                            src="../assets/images/prevention-anaemia/avoid-drinking-coffee-tea-meals.gif"
                            alt="Avoid drinking coffee or tea with meals">
                    <p>@lang('prevention-anaemia.make')</p>
                    
                   </div>
            </section>
        </div>
          <!-- /Content -->
    </div>
    @include('footer')
</body>

</html>