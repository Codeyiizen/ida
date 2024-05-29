<!-- Header -->
@include('header')
        <div id="content">
            <section class="section pt-0">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent px-0">
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a
                                    href="{{ route('disease-management-through-diet') }}">Disease management through diet</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@lang('disease-management-through-diet.cardTwoH1')</li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-4">@lang('disease-management-through-diet.cardTwoH1')</h1>
                    <ul class="list-unstyled list-unordered mb-3">
                        <li>@lang('disease-management-through-diet.cardTwo_li1')</li>
                        <li>@lang('disease-management-through-diet.cardTwo_li2')</li>
                        <li>@lang('disease-management-through-diet.cardTwo_li3')</li>
                        <li>@lang('disease-management-through-diet.cardTwo_li4')</li>
                        <li>@lang('disease-management-through-diet.cardTwo_li5')</li>
                        <li>@lang('disease-management-through-diet.cardTwo_li6')</li>
                        <li>@lang('disease-management-through-diet.cardTwo_li7')</li>
                    </ul>
                </div>
            </section>
        </div>
        <!-- /Content -->
    </div>
    @include('footer')
</body>

</html>