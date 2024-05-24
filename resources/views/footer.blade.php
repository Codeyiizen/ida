<footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <p>&copy; 2024 Food Based Management System of
                        Iron Deficiency Anaemia</p>
                </div>
                <div class="col-lg-4 text-lg-right">
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('disclaimer') }}">Disclaimer</a>
                        </li>
                        <li><a href="{{ route('developed') }}">Developed By</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Javascript -->
    
    <script src="assets/javascripts/jquery-1.11.2.min.js"></script>
    <script src="assets/javascripts/popper.js"></script>
    <script src="assets/javascripts/bootstrap.bundle.js"></script>
    <script src="assets/javascripts/bootstrap.js"></script>
    <script src="assets/javascripts/all.js"></script>
    <script src="assets/javascripts/meanmenu.js"></script>
    <!-- Custom JS Code for this page -->
    <script src="assets/javascripts/main.js"></script>

    <script type="text/javascript">  
    var url = "{{ route('LangChange') }}";  
    $(".Langchange").change(function(){ 
        window.location.href = url + "?lang="+ $(this).val();
    });  
</script>