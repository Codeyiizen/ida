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
                            <li class="breadcrumb-item active">Whiteness in the inner portion of the eyelid </li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-3">Whiteness in the inner portion of the eyelid </h1> <img
                        class="img-fluid alignright" src="../assets/images/sign-symptoms-iron/whiteness-eye.jfif"
                        alt="Whiteness in the inner portion of the eyelid">
                    <p> whitening of the inner portion of the
                        eyelid, known as palpebral conjunctiva, This is due to decrease in the production of
                        haemoglobin, which is responsible for carrying oxygen to the tissues of the body.
                        Without enough haemoglobin, the tissues, including the conjunctiva, become pale or
                        white.</p>
                </div>
            </section>
        </div>
          <!-- /Content -->
    </div>
    @include('footer')
</body>

</html>