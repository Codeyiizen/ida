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
                            <li class="breadcrumb-item active" aria-current="page">Iron rich diet for Non-Vegetarians
                            </li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-3">Iron rich diet for <span class="brand-color">Non-Vegetarians</span></h1>
                    <h3 class="text-center mb-4">Day 6</h3>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="card bg-green box-shadow2">
                                <div class="card-body">
                                    <div class="diet-chart-container">
                                        <div class="diet-chart-item">
                                            <h5>Early Morning :</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>Tea/Milk-1 cup</li>
                                                <li>Multigrain biscuit-2</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>Breakfast :</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>Omlette- 2 egg</li>
                                                <li>Fruit juice -1 glass</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>Mid Morning :</h5>
                                            <p>Fruit chat(Apple, orange, pomegranate, Banana), - 1 Bowl</p>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>Lunch :</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>Red lentil - ½ bowl</li>
                                                <li>Cabbage vegetable- ½ bowl</li>
                                                <li>Salad (lettuce, Beetroot) -1 katorie</li>
                                                <li>Roti-2</li>
                                                <li>Rice-1/2 katorie </li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>Evening Snacks :</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>Mixed fruit juice- 1 Glass</li>
                                                <li>Dates brownie/ Dates -2</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>Dinner :</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>Fish curry-1 bowl</sli>
                                                <li>roti-2</li>
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