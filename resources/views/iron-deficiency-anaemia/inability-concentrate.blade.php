<!-- Header -->
@include('header')
<div id="content">
    <section class="section pt-0">
        <div class="container clearfix">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent px-0">
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('home') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('iron-deficiency-anaemia') }}">Iron
                            Deficiency Anaemia</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('smptoms-anaemia') }}">Symptoms of
                            Anaemia</a></li>
                    <li class="breadcrumb-item active">Inability to concentrate</li>
                </ol>
            </nav>
            <h1 class="h2 mb-3">Shortness of breath </h1><img class="img-fluid alignright"
                src="../assets/images/sign-symptoms-iron/shortness-breath.gif" alt="Shortness of breath">
            <p>Iron is essential for the proper functioning of haemoglobin that carries oxygen
                throughout the body. If body may not be getting enough oxygen, which can cause
                shortness of breath, especially during physical activity. This happens because the
                body is working harder to get the oxygen it needs.</p>

        </div>
    </section>
</div>
<!-- /Content -->
</div>
@include('footer')
</body>

</html>