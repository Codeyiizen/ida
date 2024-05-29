<!-- Header -->
@include('header')
        <!-- Content -->
        <div id="content">
            <section class="section pt-0">
                <div class="container alignright">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent px-0">
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('home') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><a
                                    href="{{ route('iron-deficiency-anaemia') }}">Iron
                                    Deficiency Anaemia</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a
                                    href="{{ route('prevention-anaemia') }}">Prevention of Anaemia</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@lang('prevention-anaemia.diet')</li>
                        </ol>
                    </nav>
                    <h1 class="h2">@lang('prevention-anaemia.diet')</h1>
                    <img class="img-fluid alignright" src="{{ url('/') }}/public/assets/images/prevention-anaemia/eat-diet-rich-iron.gif"
                    alt="Eat a diet rich in iron">
                    <ul class="list-unstyled list-unordered mb-3">
                        <li>@lang('prevention-anaemia.Include')/li>
                        <li>@lang('prevention-anaemia.pulses')</li>
                        <li>@lang('prevention-anaemia.women')
                        </li>
                    </ul>                 
                </div>
            </section>
        </div>
          <!-- /Content -->
    </div>
    @include('footer')
</body>

</html>