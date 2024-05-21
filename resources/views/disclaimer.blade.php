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
                    <h2>Disclaimer</h2>
                    <p>The information provided in this application is obtained from sources such as the Indian
                        Council of Medical Research (ICMR), National Institute of Nutrition (NIN), Food and
                        Agriculture Organization (FAO) and World Health Organization (WHO), in consultation with
                        the Department of Food and Nutrition, Punjab Agricultural University, Ludhiana. All the
                        major decisions regarding the treatment of your diseases should be taken after
                        consulting the Physician. The diet and exercises suggested in the application are mainly
                        for the age group of 14-45 years, specifically for women. People below or above the
                        mentioned age group can contact the Diet Counseling Cell of the Department of Food and
                        Nutrition. Also, you can consult the Cell for any personalized diets or suggestions.
                    </p>
                    <p>Contact <a href="mailto: dietcounsellingcellpau@gmail.com">Diet Counseling Cell</a>
                    </p>
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