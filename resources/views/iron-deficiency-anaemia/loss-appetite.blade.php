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
                            <li class="breadcrumb-item active">Loss of appetite</li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-3">Loss of appetite</h1><img class="img-fluid alignright" src="../assets/images/sign-symptoms-iron/loss-appetite.gif"
                    alt="Loss of appetite">
                    <p>If the body may not be getting enough oxygen due to a lack of
                        haemoglobin in the blood, which can cause feelings of fatigue, weakness, and
                        malaise,
                        and may reduce the desire to eat.</p>
                    <p>Iron deficiency anaemia can lead to gastrointestinal symptoms such as abdominal pain,
                        nausea, and vomiting, which may also contribute to a loss of appetite.</p>
                                       
                </div>
            </section>
        </div>
          <!-- /Content -->
    </div>
    @include('footer')
</body>

</html>