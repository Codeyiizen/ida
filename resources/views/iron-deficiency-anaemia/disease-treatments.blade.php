<!-- Header -->
@include('header')
        <!-- Content -->
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
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('causes-anaemia') }}">Causes of
                                    Anaemia</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@lang('blood-loss.treatments')</li>
                        </ol>
                    </nav>
                    <h1 class="h2">@lang('blood-loss.treatments')</h1> <img class="img-fluid alignright"
                        src="{{ url('/') }}/public/assets/images/causes-anaemia/disease-treatments.gif"
                        alt="Diseases and Disease Treatments">
                    <ul class="list-unstyled list-unordered mb-4">
                        <li>@lang('blood-loss.Certain')</li>
                        <li>@lang('blood-loss.kidney')</li>
                    </ul>
                </div>
            </section>
        </div>
          <!-- /Content -->
    </div>
    @include('footer')
</body>

</html>