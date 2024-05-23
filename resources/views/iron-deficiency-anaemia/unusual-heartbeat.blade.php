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
                            <li class="breadcrumb-item active">Unusual Heartbeat</li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-3">Unusual Heartbeat</h1>
                    <img class="img-fluid alignright" src="../assets/images/sign-symptoms-iron/unusual-heartbeat.gif"
                    alt="Unusual Heartbeat">
                    <p>Iron deficiency can cause an unusual heartbeat or heart
                        palpitations. This is because iron is essential for the proper functioning of the
                        body.
                        When there is a lack of iron, the heart has to work harder to get enough oxygen,
                        which
                        can lead to palpitations or a racing heart.</p>               
                </div>
            </section>
        </div>
          <!-- /Content -->
    </div>
    @include('footer')
</body>

</html>