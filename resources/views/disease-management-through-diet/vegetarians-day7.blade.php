<!-- Header -->
@include('header')
        <div id="content">
            <section class="section pt-0">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent px-0">
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('home') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><a
                                    href="{{ route('disease-management-through-diet') }}">Disease management through diet</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page"><a
                                    href="{{ route('diet-plan-anaemia-patient') }}">Diet Plan
                                    for Iron deficiency Anaemia
                                    Patient</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Iron rich diet for Vegetarians</li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-3">Iron rich diet for <span class="brand-color">Vegetarians</span></h1>
                    <h3 class="text-center mb-4">Day 7</h3>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="card bg-green box-shadow2">
                                <div class="card-body">
                                    <div class="diet-chart-container">
                                        <div class="diet-chart-item">
                                            <h5>Early Morning :</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>Tea/Milk-1 cup</li>
                                                <li>2 Almonds, 2 Cashew</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>Breakfast :</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>Vegetable sandwich -2</li>
                                                <li>Tomato chatni</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>Mid Morning :</h5>
                                            <p>Fruit chat(Apple, orange, pomegranate, Banana), – 1 Bowl</p>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>Lunch :</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>Vegetable Biryani- 1 Plate</li>
                                                <li>tomato and onion Raita- 1 katorie, Salad (lettuce, Beetroot) -1
                                                    katorie
                                                </li>
                                                <li>Pudina and Amla chatni-1 Tsp</li>
                                                <li>Salad</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>Evening Snacks :</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>Lemonade - 1 glass</li>
                                                <li>Dates-3, roasted sesame seeds with jaggary - ½ tsp</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>Dinner :</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>Dal (mix)-1 katorie</li>
                                                <li>Roti-2</li>
                                                <li>Salad-1 bowl</li>
                                                <li>Fresh lime water</li>
                                            </ul>
                                        </div>
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