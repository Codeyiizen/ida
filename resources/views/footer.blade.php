<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <p>&copy; 2024 @lang('auth.logoText')</p>
            </div>
            <div class="col-lg-4 text-lg-right">
                <ul class="list-unstyled">
                    <li>
                        <a href="{{ route('disclaimer') }}">@lang('auth.disclaimer')</a>
                    </li>
                    <li><a href="{{ route('developed') }}">@lang('auth.developed')</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
 <!-- scroll-to-top -->
 <a href="#header" class="scroll-to-top" id="back-to-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- /scroll-to-top -->
<!-- Javascript -->
<script src="{{ url('/') }}/public/assets/javascripts/jquery-1.11.2.min.js"></script>
<script src="{{ url('/') }}/public/assets/javascripts/popper.js"></script>
<script src="{{ url('/') }}/public/assets/javascripts/bootstrap.bundle.js"></script>
<script src="{{ url('/') }}/public/assets/javascripts/bootstrap.js"></script>
<script src="{{ url('/') }}/public/assets/javascripts/all.js"></script>
<!-- <script src="{{ url('/') }}/public/assets/javascripts/meanmenu.js"></script> -->
<!-- Custom JS Code for this page -->
<script src="{{ url('/') }}/public/assets/javascripts/main.js"></script>

<script type="text/javascript">
var url = "{{ route('langChange') }}";
$(".langchange").change(function() {
    window.location.href = url + "?lang=" + $(this).val();
});
</script>