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
            <div class="card box-shadow text-center">
                <div class="card-body">
                    <h2>@lang('auth.developed')</h2>
                    <p class="brand-color"><strong>@lang('auth.aakanksha-pandey') - L-2018 -HSC-114-D <br
                                class="d-md-block d-none" />(@lang('auth.phd-student'))</strong></p>
                    <p>@lang('auth.advisor')</p>
                    <p>@lang('auth.department')</p>
                    <p><strong>@lang('auth.language'):</strong> @lang('auth.english-punjabi')</p>
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