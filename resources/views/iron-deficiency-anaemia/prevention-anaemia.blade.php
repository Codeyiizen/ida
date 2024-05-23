<!-- Header -->
@include('header')
<!-- Content -->
<div id="content">
    <section class="section pt-0">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent px-0">
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('home') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('iron-deficiency-anaemia') }}">Iron
                            Deficiency Anaemia</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Prevention of Anaemia</li>
                </ol>
            </nav>
            <h1 class="h2 mb-4">Prevention of Anaemia</h1>
            <div class="prevention-anaemia-container d-flex justify-content-center">
                <ul class="list-unstyled list-prevention-anaemia text-center">
                    <li><a class="hover-styled" href="{{ route ('eat-diet-rich-in-iron') }}"><span>Eat a diet rich in
                                iron</span></a></li>
                    <li><a class="hover-styled"
                            href="{{ route ('increase-your-vitamin-folate-intake') }}"><span>Increase
                                your
                                vit C & folate intake</span></a></li>
                    <li><a class="hover-styled" href="{{ route ('cook-using-iron-pots-pans') }}"><span>Cook using iron
                                pots
                                and
                                pans</span></a></li>
                    <li><a class="hover-styled" href="{{ route ('avoid-drinking-coffee-tea-meals') }}"><span>Avoid
                                drinking
                                coffee or tea with meals</span></a></li>
                    <li><a class="hover-styled" href="{{ route ('treat-cause-blood-loss') }}"><span>Treat the cause of
                                blood
                                loss</span></a></li>
                </ul>
            </div>
        </div>
    </section>
</div>
<!-- /Content -->
</div>
@include('footer')
</body>

</html>