<!-- Header -->
@include('header')
<div id="content">
    <section class="section pt-0 pb-4">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent px-0">
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Iron Deficiency Anaemia</li>
                </ol>
            </nav>
            <h1 class="h2 mb-4">Iron Deficiency Anaemia</h1>
            <div class="row text-center">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card box-shadow hover-styled style-1">
                        <figure class="figure mb-0">
                            <img src="assets/images/iron-deficiency-anaemia/know-iron-deficiency-anaemia.gif"
                                class="card-img-top rounded-0" alt="Know Iron Deficiency Anaemia">
                        </figure>
                        <div class="card-body d-flex flex-column">
                            <h4>Know Iron Deficiency Anaemia</h4>
                            <p class="card-text">Iron deficiency anemia occurs when the body does not have
                                enough iron to produce sufficient... </p>
                            <div class="btn-container mt-auto mb-0">
                                <a href="{{ route('know-iron-deficiency-anaemia') }}"
                                    class="btn btn-primary">Learn 
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card box-shadow hover-styled style-1">
                        <figure class="figure mb-0">
                            <img src="assets/images/iron-deficiency-anaemia/causes-anaemia.gif"
                                class="card-img-top rounded-0" alt="Causes of Anaemia">
                        </figure>
                        <div class="card-body d-flex flex-column">
                            <h4>Causes of Anaemia</h4>
                            <p class="card-text">People who do not get nutrients like iron, vitamin B12, and
                                folic acid through diet have a higher risk of iron deficiency anaemia... </p>
                            <div class="btn-container mt-auto mb-0">
                                <a href="{{ route('causes-anaemia') }}" class="btn btn-primary">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card box-shadow hover-styled style-1">
                        <figure class="figure mb-0">
                            <img src="assets/images/iron-deficiency-anaemia/symptoms-anaemia.gif"
                                class="card-img-top rounded-0" alt="Symptoms of Anaemia">
                        </figure>
                        <div class="card-body d-flex flex-column">
                            <h4>Symptoms of Anaemia</h4>
                            <p class="card-text">Both dizziness and tiredness is a common symptom of iron
                                deficiency anaemia because the body's cells aren't getting enough ...</p>
                            <div class="btn-container mt-auto mb-0">
                                <a href="{{ route('symptoms-anaemia') }}" class="btn btn-primary">Learn
                                    More</a>                                    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card box-shadow hover-styled style-1">
                        <figure class="figure mb-0">
                            <img src="assets/images/iron-deficiency-anaemia/prevention-anaemia.gif"
                                class="card-img-top rounded-0" alt="Prevention of Anaemia ">
                        </figure>
                        <div class="card-body d-flex flex-column">
                            <h4>Prevention of Anaemia </h4>
                            <p class="card-text">Add a source of Vitamin C like tomato, orange juice, lemon,
                                strawberries, or other vitamin c rich fruits and vegetables in your diet...</p>
                            <div class="btn-container mt-auto mb-0">
                                <a href="{{ route('prevention-anaemia') }}" class="btn btn-primary">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /Content -->
</div>
@include('footer')
</body>

</html>