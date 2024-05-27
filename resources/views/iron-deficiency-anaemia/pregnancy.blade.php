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
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('causes-anaemia') }}">Causes of
                                    Anaemia</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@lang('blood-loss.Pregnancy')</li>
                        </ol>
                    </nav>
                    <h1 class="h2">@lang('blood-loss.Pregnancy')</h1>
                    <img class="img-fluid alignright mh-350" src="../assets/images/causes-anaemia/pregnancy.gif"
                        alt="Pregnancy">
                    <p>@lang('blood-loss.During')
                    </p>
                </div>
            </section>
        </div>
          <!-- /Content -->
    </div>
    @include('footer')
</body>

</html>