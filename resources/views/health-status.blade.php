<!-- Header -->
@include('header')
<div id="content">
    <section class="section">
        <div class="container">
            <div class="card box-shadow">
                <div class="card-body">
                    <h3 class="bg-info text-center text-white mb-4">@lang('health-status.title')</h3>
                    <div class="row mb-4">
                        <div class="col-md-8 offset-md-2">
                            <form action="{{ route('calculate-bmi') }}" class="form mb-4 mb-md-0" method="post">
                                @csrf
                                <div class="form-group row mb-3">
                                    <label class="col-3 form-label text-right mb-0"
                                        for="age">@lang('health-status.age')</label>
                                    <div class="col-9">
                                        <input class="form-control" placeholder="" type="number" name="age" id="age"
                                            min="18" max="100">
                                        <span class="text-danger mt-4">
                                            @error('age')
                                            @if ($lan == 'en')
                                                The mobile field is required.  
                                                @else
                                                ਮੋਬਾਈਲ ਖੇਤਰ ਦੀ ਲੋੜ ਹੈ।   
                                                @endif
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-3 form-label text-right mb-0"
                                        for="age">@lang('health-status.Weight')</label>
                                    <div class="col-9">
                                        <input class="form-control" placeholder="" type="number" name="weight"
                                            id="weight" min="1" max="200">
                                            <span class="text-danger mt-4">
                                            @error('weight')
                                              @if ($lan == 'en')
                                                The mobile field is required.  
                                                @else
                                                ਮੋਬਾਈਲ ਖੇਤਰ ਦੀ ਲੋੜ ਹੈ।   
                                                @endif
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-3 form-label text-right mb-0"
                                        for="height">@lang('health-status.Height')</label>
                                    <div class="col-9">
                                        <input class="form-control" placeholder=""  name="height"
                                            id="height">
                                            <span class="text-danger mt-4">
                                            @error('height')
                                             @if ($lan == 'en')
                                                The mobile field is required.  
                                                @else
                                                ਮੋਬਾਈਲ ਖੇਤਰ ਦੀ ਲੋੜ ਹੈ।   
                                                @endif
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-3 form-label text-right"
                                        for="hemoglobin">@lang('health-status.Hemoglobin')</label>
                                    <div class="col-9">
                                        <input class="form-control" placeholder="" type="number" name="hemoglobin"
                                            id="hemoglobin">
                                        <span class="text-danger mt-4">
                                            @error('hemoglobin')
                                            @if ($lan == 'en')
                                                The mobile field is required.  
                                                @else
                                                ਮੋਬਾਈਲ ਖੇਤਰ ਦੀ ਲੋੜ ਹੈ।   
                                                @endif
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-3 form-label text-right">@lang('health-status.Symptoms')</label>
                                    <div class="col-9 form-group mb-0">
                                        <div class="form-check">
                                            <input type="radio" id="dizziness-tiredness" name="symptoms"
                                                class="custom-control-input" checked>
                                            <label for="dizziness-tiredness">@lang('health-status.Dizziness')</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="unusual-heartbeat" name="symptoms"
                                                class="custom-control-input">
                                            <label for="unusual-heartbeat">@lang('health-status.Heartbeat')</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="shortness-breath" name="symptoms"
                                                class="custom-control-input">
                                            <label for="shortness-breath">@lang('health-status.Shortness')</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="inability-concentrate" name="symptoms"
                                                class="custom-control-input">
                                            <label for="inability-concentrate">@lang('health-status.Inability')</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="resistance-infections" name="symptoms"
                                                class="custom-control-input">
                                            <label for="resistance-infections">@lang('health-status.Lowered')</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="loss-appetite" name="symptoms"
                                                class="custom-control-input">
                                            <label for="loss-appetite">@lang('health-status.Loss')</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="whiteness-eyelid" name="symptoms"
                                                class="custom-control-input">
                                            <label for="whiteness-eyelid">@lang('health-status.Whiteness')</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="brittle-nail" name="symptoms"
                                                class="custom-control-input">
                                            <label for="brittle-nail">@lang('health-status.Brittle')</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="angular-stomatitis" name="symptoms"
                                                class="custom-control-input">
                                            <label for="angular-stomatitis">@lang('health-status.Angular')</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="fatigue" name="symptoms"
                                                class="custom-control-input">
                                            <label for="fatigue">@lang('health-status.Fatigue')</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="whiteness-nailsPalms" name="symptoms"
                                                class="custom-control-input">
                                            <label for="whiteness-nailsPalms">@lang('health-status.Whitenesss')</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="headache" name="symptoms"
                                                class="custom-control-input">
                                            <label for="headache">@lang('health-status.Headache')</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <!-- <a href="{{ route('home') }}" class="btn btn-primary">@lang('health-status.Calculate')</a> -->
                                    <button type="submit"
                                        class="btn btn-primary showBmi">@lang('health-status.Calculate')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr />
                    @if (Session::get('data') == '')
                        <div class="row justify-content-center bmiShow d-none">
                            <div class="col-md-4">
                                <div class="card bg-info mb-4 d-inline-block">
                                    <div class="card-body">
                                        <h4 class="text-center text-white">@lang('health-status.BMI')</h4>
                                        
                                        <h3 class="text-center mb-0 text-white"><span class="bmi-result">{{Session::get('data')}}</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-right">
                                <figure class="figure2">
                                    <img class="img-fluid" src="{{ url('/') }}/public/assets/images/ida-detection.gif" alt="IDA Detection">
                                </figure>
                            </div>
                        </div>
                        <div class="text-center d-none">
                            <a href="{{ route('home') }}" class="btn btn-success">@lang('health-status.Save')</a>
                        </div>  
                    @else
                        <div class="row justify-content-center bmiShow">
                            <div class="col-md-4">
                                <div class="card bg-info mb-4 d-inline-block">
                                    <div class="card-body">
                                        <h4 class="text-center text-white">@lang('health-status.BMI')</h4>
                                        
                                        <h3 class="text-center mb-0 text-white"><span class="bmi-result">{{number_format(Session::get('data'),2) }}</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-right">
                                <figure class="figure2">
                                    <img class="img-fluid" src="{{ url('/') }}/public/assets/images/ida-detection.gif" alt="IDA Detection">
                                </figure>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('home') }}" class="btn btn-success">@lang('health-status.Save')</a>
                        </div> 
                    @endif
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