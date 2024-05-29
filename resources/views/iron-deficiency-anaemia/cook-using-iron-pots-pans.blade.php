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
                            <li class="breadcrumb-item active" aria-current="page">@lang('prevention-anaemia.pans')</li>
                        </ol>
                    </nav>
                    <h1 class="h2">@lang('prevention-anaemia.pans')</h1><img class="img-fluid alignright" src="{{ url('/') }}/public/assets/images/prevention-anaemia/cook-using-iron-pots-pans.gif"
                    alt="Cook using iron pots and pans">
                    <p>@lang('prevention-anaemia.food')</p>
                    
                   </div>
            </section>
        </div>
           <!-- /Content -->
    </div>
    @include('footer')
</body>

</html>