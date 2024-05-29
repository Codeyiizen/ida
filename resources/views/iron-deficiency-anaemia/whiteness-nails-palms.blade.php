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
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('symptoms-anaemia') }}">Symptoms of
                                    Anaemia</a></li>
                            <li class="breadcrumb-item active">Whiteness in nails and palms</li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-3">Whiteness in nails and palms</h1> <img class="img-fluid alignright"
                        src="{{ url('/') }}/public/assets/images/sign-symptoms-iron/whiteness-palm.jpg" alt="Whiteness in nails and palms">
                    <p>When the body is low in iron, it cannot produce enough
                        haemoglobin, leading to decreased oxygen levels in the blood and tissues. This lack
                        of
                        oxygen can cause a pale appearance in the skin, particularly in areas where blood
                        vessels are close to the surface, such as the nails and palms.</p>
                </div>
            </section>
        </div>
          <!-- /Content -->
    </div>
    @include('footer')
</body>

</html>