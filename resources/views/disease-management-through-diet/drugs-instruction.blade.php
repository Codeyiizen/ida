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
                            <li class="breadcrumb-item active" aria-current="page">@lang('disease-management-through-diet.cardThreeH4')</li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-4">@lang('disease-management-through-diet.cardThreeH4')</h1>
                    <ul class="list-unstyled list-unordered mb-3">
                        <li>@lang('disease-management-through-diet.drugs-instruction_li1')</li>
                        <li>@lang('disease-management-through-diet.drugs-instruction_li2')</li>
                    </ul>
                </div>
            </section>
        </div>
       <!-- /Content -->
    </div>
    @include('footer')
</body>

</html>