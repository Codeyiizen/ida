<style>
#container,
#content,
.section,
.login-section>.container,
.login-section>.container>.row {
    min-height: calc(100vh - 142px);
}
</style>
<!-- Header -->
@include('header')
<div id="content">
    <section class="section">
        <div class="container">
            <div class="card box-shadow">
                <div class="card-body">
                    <h2>@lang('auth.disclaimer')</h2>
                    <p>@lang('auth.disclaimer_P')</p>
                    <p>@lang('auth.contact-us') @lang('auth.diet-counseling-email')</p>
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