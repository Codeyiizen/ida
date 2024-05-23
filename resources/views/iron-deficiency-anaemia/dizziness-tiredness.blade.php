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
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('smptoms-anaemia') }}">Symptoms of
                                    Anaemia</a></li>
                            <li class="breadcrumb-item active">Dizziness and Tiredness</li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-3">Dizziness and Tiredness</h1> <img class="img-fluid alignright" src="../assets/images/sign-symptoms-iron/dizziness-tiredness.gif"
                    alt="Dizziness and Tiredness">
                    <p>Both dizziness and tiredness is a common symptom of iron
                        deficiency anaemia because the body's cells aren't getting enough oxygen to produce
                        energy, leading to fatigue. It can affect daily activities and quality of life, so
                        it's
                        important to address the underlying causes and seek medical attention if necessary.
                    </p>
                </div>
            </section>
        </div>
          <!-- /Content -->
    </div>
    @include('footer')
</body>

</html>