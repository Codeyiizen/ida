<!-- Header -->
@include('header')
<div id="content">
    <section class="section">
        <div class="container">
            <div class="card box-shadow">
                <div class="card-body">
                    <h3 class="bg-info text-center text-white mb-4">Health Status</h3>
                    <div class="row mb-4">
                        <div class="col-md-8 offset-md-2">
                            <form action="" class="form mb-4 mb-md-0">
                                <div class="form-group row mb-3">
                                    <label class="col-3 form-label text-right mb-0" for="age">Age (Year)</label>
                                    <div class="col-9">
                                        <input class="form-control" placeholder="" type="number" name="age" id="age"
                                            min="18" max="100">
                                        <!-- <small id="ageHelp" class="form-text text-muted">Age between 18 yrs to 49
                                                    yrs</small> -->
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-3 form-label text-right mb-0" for="age">Weight
                                        (Kg)</label>
                                    <div class="col-9">
                                        <input class="form-control" placeholder="" type="number" name="weight"
                                            id="weight" min="1" max="200">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-3 form-label text-right mb-0" for="height">Height
                                        (cm)</label>
                                    <div class="col-9">
                                        <input class="form-control" placeholder="" type="number" name="height"
                                            id="height">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-3 form-label text-right" for="hemoglobin">Hemoglobin
                                        level</label>
                                    <div class="col-9">
                                        <input class="form-control" placeholder="" type="number" name="hemoglobin"
                                            id="hemoglobin">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-3 form-label text-right">Add your Symptoms</label>
                                    <div class="col-9 form-group mb-0">
                                        <div class="form-check">
                                            <input type="radio" id="dizziness-tiredness" name="symptoms"
                                                class="custom-control-input" checked>
                                            <label for="dizziness-tiredness">Dizziness and Tiredness</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="unusual-heartbeat" name="symptoms"
                                                class="custom-control-input">
                                            <label for="unusual-heartbeat">Unusual Heartbeat</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="shortness-breath" name="symptoms"
                                                class="custom-control-input">
                                            <label for="shortness-breath">Shortness of breath</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="inability-concentrate" name="symptoms"
                                                class="custom-control-input">
                                            <label for="inability-concentrate">Inability to concentrate</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="resistance-infections" name="symptoms"
                                                class="custom-control-input">
                                            <label for="resistance-infections">Lowered resistance to
                                                infections</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="loss-appetite" name="symptoms"
                                                class="custom-control-input">
                                            <label for="loss-appetite">Loss of appetite</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="whiteness-eyelid" name="symptoms"
                                                class="custom-control-input">
                                            <label for="whiteness-eyelid">Whiteness in the inner portion of the
                                                eyelid</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="brittle-nail" name="symptoms"
                                                class="custom-control-input">
                                            <label for="brittle-nail">Brittle nail (spoon shaped nail)</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="angular-stomatitis" name="symptoms"
                                                class="custom-control-input">
                                            <label for="angular-stomatitis">Angular stomatitis</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="fatigue" name="symptoms"
                                                class="custom-control-input">
                                            <label for="fatigue">Fatigue</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="whiteness-nailsPalms" name="symptoms"
                                                class="custom-control-input">
                                            <label for="whiteness-nailsPalms">Whiteness in nails and
                                                palms</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" id="headache" name="symptoms"
                                                class="custom-control-input">
                                            <label for="headache">Headache</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="{{ route('home') }}" class="btn btn-primary">Calculate</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr />
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="card bg-info mb-4 d-inline-block">
                                <div class="card-body">
                                    <h4 class="text-center text-white">BMI</h4>
                                    <h3 class="text-center mb-0 text-white"><span class="bmi-result">170.07</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-right">
                            <figure class="figure2">
                                <img class="img-fluid" src="assets/images/ida-detection.gif" alt="IDA Detection">
                            </figure>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('home') }}" class="btn btn-success">Save and Proceed</a>
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