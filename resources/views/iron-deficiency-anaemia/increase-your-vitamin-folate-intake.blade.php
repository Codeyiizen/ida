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
                            <li class="breadcrumb-item active" aria-current="page">@lang('prevention-anaemia.Vitamin')</li>
                        </ol>
                    </nav>
                    <h1 class="h2">@lang('prevention-anaemia.Vitamin')</h1>
                    <img class="img-fluid alignright" src="../assets/images/prevention-anaemia/increase-vit-folate-intake.gif"
                            alt="Increase your Vitamin C and folate intake">
                    <ul class="list-unstyled list-unordered mb-3">
                        <li>@lang('prevention-anaemia.and')</li>
                        <li>@lang('prevention-anaemia.Add')
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