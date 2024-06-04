<!-- Header -->
@include('header')
<div id="content">
    <section class="section pt-0">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent px-0">
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a
                            href="{{ route('disease-management-through-diet') }}">Disease management through diet</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('disease-management-through-diet.cardOneH1')</li>
                </ol>
            </nav>
            <h1 class="h2 mb-4">@lang('disease-management-through-diet.cardOneH1')</h1>
            <p>@lang('disease-management-through-diet.cardOneP_2')</p>
            <h4>@lang('disease-management-through-diet.cereals')</h4>
            <ul class="list-unstyled list-unordered mb-3">
                <li>@lang('disease-management-through-diet.cereals_li1')</li>
                <li>@lang('disease-management-through-diet.cereals_li2')</li>
                <li>@lang('disease-management-through-diet.cereals_li3')</li>
            </ul>
            <h4>@lang('disease-management-through-diet.pulses-legumes')</h4>
            <ul class="list-unstyled list-unordered mb-3">
                <li>@lang('disease-management-through-diet.pulses-legumes_li1')</li>
                <li>@lang('disease-management-through-diet.pulses-legumes_li2')</li>
                <li>@lang('disease-management-through-diet.pulses-legumes_li3')</li>
                <li>@lang('disease-management-through-diet.pulses-legumes_li4')</li>
                <li>@lang('disease-management-through-diet.pulses-legumes_li5')</li>
                <li>@lang('disease-management-through-diet.pulses-legumes_li6')</li>
                <li>@lang('disease-management-through-diet.pulses-legumes_li7')</li>
            </ul>
            <h4>@lang('disease-management-through-diet.gl-vegetable')</h4>
            <ul class="list-unstyled list-unordered mb-3">
                <li>@lang('disease-management-through-diet.gl-vegetable_li1')</li>
                <li>@lang('disease-management-through-diet.gl-vegetable_li2')</li>
                <li>@lang('disease-management-through-diet.gl-vegetable_li3')</li>
                <li>@lang('disease-management-through-diet.gl-vegetable_li4')</li>
                <li>@lang('disease-management-through-diet.gl-vegetable_li5')</li>
                <li>@lang('disease-management-through-diet.gl-vegetable_li6')</li>
                <li>@lang('disease-management-through-diet.gl-vegetable_li7')</li>
            </ul>
            <h4>@lang('disease-management-through-diet.other-vegetable')</h4>
            <ul class="list-unstyled list-unordered mb-3">
                <li>@lang('disease-management-through-diet.other-vegetable_li1')</li>
                <li>@lang('disease-management-through-diet.other-vegetable_li2')</li>
                <li>@lang('disease-management-through-diet.other-vegetable_li3')</li>
                <li>@lang('disease-management-through-diet.other-vegetable_li4')</li>
                <li>@lang('disease-management-through-diet.other-vegetable_li5')</li>
            </ul>
            <h4>@lang('disease-management-through-diet.roots-tubers')</h4>
            <ul class="list-unstyled list-unordered mb-3">
                <li>@lang('disease-management-through-diet.roots-tubers_li1')</li>
                <li>@lang('disease-management-through-diet.roots-tubers_li2')</li>
            </ul>
            <h4>@lang('disease-management-through-diet.fruits')</h4>
            <ul class="list-unstyled list-unordered mb-3">
                <li>@lang('disease-management-through-diet.fruits_li1')</li>
                <li>@lang('disease-management-through-diet.fruits_li2')</li>
                <li>@lang('disease-management-through-diet.fruits_li3')</li>
                <li>@lang('disease-management-through-diet.fruits_li4')</li>
                <li>@lang('disease-management-through-diet.fruits_li5')</li>
                <li>@lang('disease-management-through-diet.fruits_li6')</li>
                <li>@lang('disease-management-through-diet.fruits_li7')</li>
                <li>@lang('disease-management-through-diet.fruits_li8')</li>
                <li>@lang('disease-management-through-diet.fruits_li9')</li>
                <li>@lang('disease-management-through-diet.fruits_li10')</li>
                <li>@lang('disease-management-through-diet.fruits_li11')</li>
            </ul>
            <h4>@lang('disease-management-through-diet.oil-seeds')</h4>
            <ul class="list-unstyled list-unordered mb-3">
                <li>@lang('disease-management-through-diet.oil-seeds_li1')</li>
            </ul>
            <h4>@lang('disease-management-through-diet.dry-fruits')</h4>
            <ul class="list-unstyled list-unordered mb-3">
                <li>@lang('disease-management-through-diet.dry-fruits_li1')</li>
                <li>@lang('disease-management-through-diet.dry-fruits_li1')</li>
                <li>@lang('disease-management-through-diet.dry-fruits_li2')</li>
                <li>@lang('disease-management-through-diet.dry-fruits_li3')</li>
                <li>@lang('disease-management-through-diet.dry-fruits_li4')</li>
                <li>@lang('disease-management-through-diet.dry-fruits_li5')</li>
                <li>@lang('disease-management-through-diet.dry-fruits_li6')</li>
            </ul>
            <h4>@lang('disease-management-through-diet.jaggery')</h4>
            <ul class="list-unstyled list-unordered mb-3">
                <li>@lang('disease-management-through-diet.jaggery_li1')</li>
                <li>@lang('disease-management-through-diet.jaggery_li2')</li>
            </ul>
            <h4>@lang('disease-management-through-diet.nonVegetarian')</h4>
            <ul class="list-unstyled list-unordered mb-3">
                <li>@lang('disease-management-through-diet.nonVegetarian_li1')</li>
                <li>@lang('disease-management-through-diet.nonVegetarian_li2')</li>
                <li>@lang('disease-management-through-diet.nonVegetarian_li3')</li>
            </ul>

        </div>
    </section>
</div>
<!-- /Content -->
</div>
@include('footer')
</body>

</html>