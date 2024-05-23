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
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('smptoms-anaemia') }}">Symptoms of
                                    Anaemia</a></li>
                            <li class="breadcrumb-item active">Lowered resistance to infections</li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-3">Lowered resistance to infections</h1><img class="img-fluid alignright"
                    src="../assets/images/sign-symptoms-iron/lowered-resistance-infections.gif"
                    alt="Lowered resistance to infections">
                    <p>Iron is an essential nutrient that is required for the
                        proper functioning of the immune system. When iron levels are low, the body may not
                        be
                        able to produce enough immune cells; this can lead to lowered resistance to
                        infections,
                        making it easier for viruses, bacteria, to take hold in the body.</p>                  
                </div>
            </section>
        </div>
          <!-- /Content -->
    </div>
    @include('footer')
</body>

</html>