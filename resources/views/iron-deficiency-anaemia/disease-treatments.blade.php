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
                            <li class="breadcrumb-item active" aria-current="page">Diseases and Disease Treatments</li>
                        </ol>
                    </nav>
                    <h1 class="h2">Diseases and Disease Treatments</h1> <img class="img-fluid alignright"
                        src="../assets/images/causes-anaemia/disease-treatments.gif"
                        alt="Diseases and Disease Treatments">
                    <ul class="list-unstyled list-unordered mb-4">
                        <li>Certain disorders or surgeries that affect the intestines can also interfere in
                            the absorption of iron, which can lead to iron deficiency anaemia.</li>
                        <li>Chronic diseases, like kidney disease and cancer make it hard for the body to
                            make enough red blood cells or damage the red blood cells’ ability to carry
                            oxygen.</li>
                    </ul>
                </div>
            </section>
        </div>
          <!-- /Content -->
    </div>
    @include('footer')
</body>

</html>