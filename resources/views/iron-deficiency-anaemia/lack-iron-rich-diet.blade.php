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
                            <li class="breadcrumb-item active" aria-current="page">Lack of iron rich diet</li>
                        </ol>
                    </nav>
                    <h1 class="h2">@lang('lack-iron-rich-diet.h1')</h1>
                    <img class="img-fluid alignright" src="../assets/images/causes-anaemia/lack-iron-rich-diet.gif"
                        alt="Lack of iron rich diet">
                    <ul class="list-unstyled list-unordered mb-4">
                        <li>@lang('lack-iron-rich-diet.li_1')</li>
                        <li>@lang('lack-iron-rich-diet.li_2')</li>
                    </ul>
                </div>
            </section>
        </div>
          <!-- /Content -->
    </div>
    @include('footer')
</body>

</html>