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
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('symptoms-anaemia') }}">Symptoms of
                                    Anaemia</a></li>
                            <li class="breadcrumb-item active">@lang('symptoms-anaemia.nail')</li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-3">@lang('symptoms-anaemia.nail')</h1>
                    <img class="img-fluid alignright" src="{{ url('/') }}/public/assets/images/sign-symptoms-iron/spoon-shaped-nail.gif"
                    alt="Brittle nail (spoon shaped nail)">
                    <p>@lang('symptoms-anaemia.cause')</p>                                      
                </div>
            </section>
        </div>
          <!-- /Content -->
    </div>
    @include('footer')
</body>

</html>