<!-- Header -->
@include('header')
<div id="content">
    <section class="section pt-0">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent px-0">
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('home') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('iron-deficiency-anaemia') }}">Iron
                            Deficiency Anaemia</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Causes of Anaemia</li>
                </ol>
            </nav>
            <h1 class="h2">Causes of Iron Deficiency Anaemia</h1>
            <div class="causes-anaemia-container mx-auto text-center position-relative">
                <div class="heading-circle absolute-center">
                    <h5 class="text-white mb-0">Causes of Iron Deficiency Anaemia</h5>
                </div>
                <ul class="list-unstyled list-causes-anaemia">
                    <li><a class="hover-styled" href="{{ route('lack-iron-rich-diet') }}"><span>Lack of iron rich
                                diet</span></a></li>
                    <li><a class="hover-styled" href="{{ route('blood-loss') }}"><span>Blood Loss</span></a></li>
                    <li><a class="hover-styled" href="{{ route('pregnancy') }}"><span>Pregnancy</span></a></li>
                    <li><a class="hover-styled" href="{{ route('disease-treatments') }}"><span>Diseases and Disease
                                Treatments</span></a></li>
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