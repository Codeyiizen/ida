<!-- Header -->
@include('header')
<div id="content">
    <section class="section pt-0">
        <div class="container clearfix">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent px-0">
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route ('iron-deficiency-anaemia') }}">Iron
                            Deficiency Anaemia</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Know about Iron Deficiency Anaemia
                    </li>
                </ol>
            </nav>
            <h1 class="h2 mb-4">@lang('KnowaboutAnaemia.title')</h1>
            <ul class="list-unstyled list-unordered mb-3">
                <li>@lang('KnowaboutAnaemia.an')</li>
                <li> @lang('KnowaboutAnaemia.Anaemia')<a href="" data-toggle="modal"
                        data-target="#hemoglobinModal">@lang('KnowaboutAnaemia.hemoglobin') </a> @lang('KnowaboutAnaemia.level') <a href="" data-toggle="modal"
                        data-target="#rbcModal">@lang('KnowaboutAnaemia.red')</a>.</li>
                <li>@lang('KnowaboutAnaemia.condition')
                </li>
            </ul>
            <h4>@lang('KnowaboutAnaemia.Iron')</h4>
            <img class="img-fluid alignright" src="../assets/images/iron-deficiency-anaemia.gif"
                alt="Iron Deficiency Anaemia">
            <ul class="list-unstyled list-unordered mb-3">
                <li>@lang('KnowaboutAnaemia.deficiency')</li>
                <li>@lang('KnowaboutAnaemia.happen')</li>
            </ul>
        </div>
    </section>
</div>
<!-- /Content -->
</div>
@include('footer')
<!-- Hemoglobin Modal -->
<div class="modal fade" id="hemoglobinModal" tabindex="-1" role="dialog" aria-labelledby="hemoglobinModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
                <p><strong>@lang('KnowaboutAnaemia.Hemoglobin1')</strong> @lang('KnowaboutAnaemia.protein')
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Red blood cells Modal -->
<div class="modal fade" id="rbcModal" tabindex="-1" role="dialog" aria-labelledby="rbcModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
                <p><strong>@lang('KnowaboutAnaemia.RBCs')</strong> @lang('KnowaboutAnaemia.critical')
                </p>
                <img class="img-fluid" src="../assets/images/iron-deficiency-anaemia/know-iron-deficiency-anaemia.gif"
                    alt="RBCs">
            </div>
        </div>
    </div>
</div>
</body>

</html>