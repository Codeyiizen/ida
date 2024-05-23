<!-- Header -->
@include('header')
        <!-- Content -->
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
                                                <li>Methi and Palak paratha-2</li>
                                                <li>Coriander and lemon chatni</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>Mid Morning :</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>Pomegranate+K</li>
                                                <li>Wall nut- 1-2</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>Lunch :</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>Mixed dal(Bengal gram, masoor dal)- 1 bowl</li>
                                                <li>Vegetable Rice -1/2 Bowl</li>
                                                <li>Curd-1/2 Bowl</li>
                                                <li>Salad (lettuce, Tomato Beetroot) -1 bowl</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>Evening Snacks :</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>Beetroot and tomato soup -1 Bowl</li>
                                                <li>Dates-4</li>
                                            </ul>
                                        </div>
                                        <div class="diet-chart-item">
                                            <h5>Dinner :</h5>
                                            <ul class="list-unstyled list-unordered">
                                                <li>Chicken curry - 1 Bowl</li>
                                                <li>Multigrain roti-2</li>
                                                <li>Salad </li>
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