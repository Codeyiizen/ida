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
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('symptoms-anaemia') }}">Symptoms of
                                    Anaemia</a></li>
                            <li class="breadcrumb-item active">Brittle nail (spoon shaped nail)</li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-3">Brittle nail (spoon shaped nail) </h1>
                    <img class="img-fluid alignright" src="../assets/images/sign-symptoms-iron/spoon-shaped-nail.gif"
                    alt="Brittle nail (spoon shaped nail)">
                    <p>Iron is important for healthy nail growth, and a lack
                        of iron in the body can cause nails to become brittle and break easily.</p>                                      
                </div>
            </section>
        </div>
          <!-- /Content -->
    </div>
    @include('footer')
</body>

</html>