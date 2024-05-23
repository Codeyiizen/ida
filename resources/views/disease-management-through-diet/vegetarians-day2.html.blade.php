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
                    <h3 class="text-center mb-4">Day 2</h3>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="card bg-green box-shadow2">
                                <div class="card-body">
                                    <div class="diet-chart-container">
                                        <div class="diet-chart-item">
                                            <h5>Early Morning :</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>Tea/Milk-1 cup</li>
                                                <li>Methi mathri-2</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>Breakfast :</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>Broccoli and spinach wrap -1</li>
                                                <li>Pudina and Amla chatni-1 Tsp</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>Mid Morning :</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>Sprouts salad /Ragi and Bajra veg poha- ½ Bowl</li>
                                                <li>Kinnow/Orange- 1 Medium</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>Lunch :</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>Wheat ,Ragi, bajra, jwar mix daliya/Carrot and green pea rice -
                                                    1/2
                                                    Bowl
                                                </li>
                                                <li>Curd - 1 katorie</li>
                                                <li>Salad (lettuce, Beetroot, lemon) - 1 katorie</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>Evening Snacks :</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>Tomato soup-1 Bowl</li>
                                                <li>Dates-2</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>Dinner :</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>Fenugreek and corn curry/Drumstick curry - 1 Bowl</li>
                                                <li>Multigrain roti( Ragi,Bajra,jwar,wheat)-2</li>
                                                <li>Salad</li>
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