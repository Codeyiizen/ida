<style>
#content,
.welcome-section,
.welcome-section>.container,
.welcome-section>.container>.row {
    min-height: calc(100vh - 167px);
}

.bg-pattern {
    background: #73adb1;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to top, #e7ffff, #73adb1);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to top, #e7ffff, #73adb1);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

@media screen and (min-width:992px) {
    .bg-pattern {
        /* background-color: #dfffff;
            background-image: url('assets/images/anemia-kids.jpg');
            background-repeat: no-repeat;
            background-size: cover; */
        background: #73adb1;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to left, #e7ffff, #73adb1);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to left, #e7ffff, #73adb1);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
}

.bg-overlay {
    position: relative;
}

.bg-overlay::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    height: 100%;
    background-color: rgb(225, 255, 255, .2);
}
</style>
<!-- Header -->
@include('header');
<!-- /Header -->
<!-- Content -->
<div id="content" class="pt-0">
    <section class="section p-0 welcome-section">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-lg-6">
                    <img class="img-fluid w-75 rounded d-lg-block d-none" src="assets/images/logo.png"
                        alt="Iron Deficiency Anaemia (IDA) Management">
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="card rounded-0 box-shadow">
                        <div class="card-body p-md-5">
                            <div class="text-center mb-4">
                                <h2>@lang('auth.signin')</h2>
                                <p class="fs-3">Iron Deficiency Anaemia (IDA) Management System</p>
                            </div>
                            <form action="" class="form mb-0">
                                <div class="form-group mb-4">
                                    <label for="phone">Enter your mobile number</label>
                                    <input class="form-control" placeholder="e.g. +91 xxxx xxxx xx" type="number"
                                        name="mobile" id="phone" min="10" max="10">
                                </div>
                                <a href="{{ route('health-status') }}" class="btn btn-primary btn-block">Log In</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<!-- /Content -->
<!-- /container-->
@include('footer')
</div>
</body>

</html>

<script type="text/javascript">  
    var url = "{{ route('LangChange') }}"; 
    $(".Langchange").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });  
</script>