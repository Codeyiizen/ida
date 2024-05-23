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
                    <li class="breadcrumb-item active" aria-current="page">Diet Plan for Iron deficiency Anaemia
                        Patient</li>
                </ol>
            </nav>
            <h1 class="h2 mb-3">Diet Plan for Iron deficiency Anaemia Patient</h1>
            <h4>1 week diet plan for anaemia patient</h4>
            <p class="mb-5">To recover from anemia quickly, we create a diet plan that includes iron-rich food items.
                All
                food items are listed in this meal plan for iron deficiency anaemia are easily available in the
                local market. We also list those food items which should be avoided while following this diet
                meal plan.</p>
            <div class="week-diet-plans">
                <div class="week-day">
                    <div class="day-name">
                        <h6>
                            <span>Day 1</span>
                        </h6>
                    </div>
                    <div class="diet-type">
                        <a href="{{ route('vegetarians-day1') }}">Vegetarian</a>
                        <a href="{{ route('non-vegetarians-day1') }}">Non vegetarian</a>
                    </div>
                </div>
                <div class="week-day">
                    <div class="day-name">
                        <h6>
                            <span>Day 2</span>
                        </h6>
                    </div>
                    <div class="diet-type">
                        <a href="{{ route('vegetarians-day2') }}">Vegetarian</a>
                        <a href="{{ route('non-vegetarians-day2') }}">Non vegetarian</a>
                    </div>
                </div>
                <div class="week-day">
                    <div class="day-name">
                        <h6>
                            <span>Day 3</span>
                        </h6>
                    </div>
                    <div class="diet-type">
                        <a href="{{ route('vegetarians-day3') }}">Vegetarian</a>
                        <a href="{{ route('non-vegetarians-day3') }}">Non vegetarian</a>
                    </div>
                </div>
                <div class="week-day">
                    <div class="day-name">
                        <h6>
                            <span>Day 4</span>
                        </h6>
                    </div>
                    <div class="diet-type">
                        <a href="{{ route('vegetarians-day4') }}">Vegetarian</a>
                        <a href="{{ route('non-vegetarians-day4') }}">Non vegetarian</a>
                    </div>
                </div>
                <div class="week-day">
                    <div class="day-name">
                        <h6>
                            <span>Day 5</span>
                        </h6>
                    </div>
                    <div class="diet-type">
                        <a href="{{ route('vegetarians-day5') }}">Vegetarian</a>
                        <a href="{{ route('non-vegetarians-day5') }}">Non vegetarian</a>
                    </div>
                </div>
                <div class="week-day">
                    <div class="day-name">
                        <h6>
                            <span>Day 6</span>
                        </h6>
                    </div>
                    <div class="diet-type">
                        <a href="{{ route('vegetarians-day6') }}">Vegetarian</a>
                        <a href="{{ route('non-vegetarians-day6') }}">Non vegetarian</a>
                    </div>
                </div>
                <div class="week-day">
                    <div class="day-name">
                        <h6>
                            <span>Day 7</span>
                        </h6>
                    </div>
                    <div class="diet-type">
                        <a href="{{ route('vegetarians-day7') }}">Vegetarian</a>
                        <a href="{{ route('non-vegetarians-day7') }}">Non vegetarian</a>
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