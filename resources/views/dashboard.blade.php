<style>
/* #container,
#content,
.section,
.login-section>.container,
.login-section>.container>.row {
    min-height: calc(100vh - 142px);
} */

.box {
    height: 205px;
    border-radius: 0px;
    overflow: hidden;
    cursor: pointer;
    position: relative;
    color: #f0f0f0;
    box-shadow: 0 10px 30px 5px rgba(0, 0, 0, 0.2);
}

.box::before {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    height: 100%;
    content: '';
    background-color: rgba(0, 0, 0, 0.4);
    transition: opacity 0.2s ease-out;
    z-index: 1;
}

.box img {
    position: absolute;
    object-fit: cover;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    /* opacity: 0.9;
            transition: opacity 0.2s ease-out; */
}

.box h4 {
    position: absolute;
    inset: auto auto 30px 30px;
    color: var(--white);
    margin: 0;
    transition: inset 0.3s 0.3s ease-out;
    font-weight: normal;
    z-index: 10;
    width: 85%;
    left: 50% !important;
    transform: translateX(-50%);
}

.box p,
.box a {
    position: absolute;
    opacity: 0;
    transition: opacity 0.3s ease-out;
    z-index: 10;
}


.box p {
    inset: auto auto 80px 30px;
    left: 50%;
    transform: translateX(-50%);
    width: 90%;
}

.box a {
    inset: auto auto 30px 30px;
    color: inherit;
    text-decoration: none;
    left: 50%;
    transform: translateX(-50%);
}

.box:hover h4 {
    inset: auto auto 100px 30px;
    transition: inset 0.3s ease-out;
}

.box:hover p,
.box:hover a {
    opacity: 1;
    transition: opacity 0.5s 0.1s ease-in;
}

.box:hover::before {
    background-color: rgba(0, 0, 0, 0.8);
    transition: opacity 0.3s ease-in;
}

.fa-arrow-right {
    vertical-align: middle;
}
</style>
<!-- Header -->
@include('header')
<div id="content">
    <section class="section">
        <div class="container">
            <h2 class="mb-4">@lang('auth.welcome-text')</h2>
            <div class="row text-center">
                <div class="col-md-6 col-lg-4">
                    <div class="box mb-4 mb-lg-0">
                        <img class="img-fluid" src="{{ url('/') }}/public/assets/images/iron-deficiency-anaemia.gif"
                            alt="Know about Iron Deficiency Anaemia">
                        <div class="box-content">
                            <h4>@lang('auth.cardOneH4')</h4>
                            <!-- <p>
                                        A condition of the body caused due to the deficiency of essential nutrients
                                        like iron, protein, vitamin B12, folic acid etc. Although there are various
                                        forms of anemia, the most prevalent type is iron-deficiency anemia.
                                    </p> -->
                            <a href="{{ route('iron-deficiency-anaemia') }}"
                                class="btn btn-primary">@lang('auth.read-more')</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box mb-4 mb-lg-0">
                        <img class="img-fluid"
                            src="{{ url('/') }}/public/assets/images/diseas-management-through-diet.gif"
                            alt="Disease Management through Diet">
                        <div class="box-content">
                            <h4>@lang('auth.cardTwoH4')</h4>
                            <!-- <p>
                                        Include more green leafy Vegetables in diet. Eat pulses and legumes to increase
                                        your iron intake. Pregnant women need almost twice as much iron than women who
                                        are not pregnant.
                                    </p> -->
                            <a href="{{ route('disease-management-through-diet') }}"
                                class="btn btn-primary">@lang('auth.read-more')</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box">
                        <img class="img-fluid"
                            src="{{ url('/') }}/public/assets/images/yoga-poses-deficiency-anaemia.gif"
                            alt="Yoga Poses for Managing Iron Deficiency Anaemia">
                        <div class="box-content">
                            <h4>@lang('auth.cardThreeH4')</h4>
                            <!-- <p>
                                        Anaemia is a condition in which the iron content or hemoglobin levels in the
                                        blood are below normal. Oxygen plays a crucial role in the breathing process as
                                        it regulates energy and supports body metabolism.
                                    </p> -->
                            <a href="{{ route('yoga-poses-managing-anaemia') }}"
                                class="btn btn-primary">@lang('auth.read-more')</a>
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