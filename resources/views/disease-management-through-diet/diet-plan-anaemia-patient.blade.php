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
            <h4>@lang('diet-plan-anaemia-patient.1week-diet-plan')</h4>
            <p class="mb-5">@lang('diet-plan-anaemia-patient.1week-diet-plan_p')</p>
            <div class="week-diet-plans">
                <div class="week-day">
                    <div class="day-name">
                        <h6>
                            <span>@lang('diet-plan-anaemia-patient.day') 1</span>
                        </h6>
                    </div>
                    <div class="diet-type">
                        <a href="{{ route('vegetarians-day1') }}">@lang('diet-plan-anaemia-patient.vegetarian')</a>
                        <a href="{{ route('non-vegetarians-day1') }}">@lang('diet-plan-anaemia-patient.non-vegetarian')</a>
                    </div>
                </div>
                <div class="week-day">
                    <div class="day-name">
                        <h6>
                            <span>@lang('diet-plan-anaemia-patient.day') 2</span>
                        </h6>
                    </div>
                    <div class="diet-type">
                        <a href="{{ route('vegetarians-day2') }}">@lang('diet-plan-anaemia-patient.vegetarian')</a>
                        <a href="{{ route('non-vegetarians-day2') }}">@lang('diet-plan-anaemia-patient.non-vegetarian')</a>
                    </div>
                </div>
                <div class="week-day">
                    <div class="day-name">
                        <h6>
                            <span>@lang('diet-plan-anaemia-patient.day') 3</span>
                        </h6>
                    </div>
                    <div class="diet-type">
                        <a href="{{ route('vegetarians-day3') }}">@lang('diet-plan-anaemia-patient.vegetarian')</a>
                        <a href="{{ route('non-vegetarians-day3') }}">@lang('diet-plan-anaemia-patient.non-vegetarian')</a>
                    </div>
                </div>
                <div class="week-day">
                    <div class="day-name">
                        <h6>
                            <span>@lang('diet-plan-anaemia-patient.day') 4</span>
                        </h6>
                    </div>
                    <div class="diet-type">
                        <a href="{{ route('vegetarians-day4') }}">@lang('diet-plan-anaemia-patient.vegetarian')</a>
                        <a href="{{ route('non-vegetarians-day4') }}">@lang('diet-plan-anaemia-patient.non-vegetarian')</a>
                    </div>
                </div>
                <div class="week-day">
                    <div class="day-name">
                        <h6>
                            <span>@lang('diet-plan-anaemia-patient.day') 5</span>
                        </h6>
                    </div>
                    <div class="diet-type">
                        <a href="{{ route('vegetarians-day5') }}">@lang('diet-plan-anaemia-patient.vegetarian')</a>
                        <a href="{{ route('non-vegetarians-day5') }}">@lang('diet-plan-anaemia-patient.non-vegetarian')</a>
                    </div>
                </div>
                <div class="week-day">
                    <div class="day-name">
                        <h6>
                            <span>@lang('diet-plan-anaemia-patient.day') 6</span>
                        </h6>
                    </div>
                    <div class="diet-type">
                        <a href="{{ route('vegetarians-day6') }}">@lang('diet-plan-anaemia-patient.vegetarian')</a>
                        <a href="{{ route('non-vegetarians-day6') }}">@lang('diet-plan-anaemia-patient.non-vegetarian')</a>
                    </div>
                </div>
                <div class="week-day">
                    <div class="day-name">
                        <h6>
                            <span>@lang('diet-plan-anaemia-patient.day') 7</span>
                        </h6>
                    </div>
                    <div class="diet-type">
                        <a href="{{ route('vegetarians-day7') }}">@lang('diet-plan-anaemia-patient.vegetarian')</a>
                        <a href="{{ route('non-vegetarians-day7') }}">@lang('diet-plan-anaemia-patient.non-vegetarian')</a>
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