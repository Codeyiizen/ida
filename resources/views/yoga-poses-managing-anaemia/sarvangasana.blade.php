<!-- Header -->
@include('header')
        <div id="content">
            <section class="section pt-0">
                <div class="container text-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent px-0">
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a
                                    href="{{ route('yoga-poses-managing-anaemia') }}">Yoga
                                    Poses for Managing Iron Deficiency Anaemia</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sarvangasana Yoga</li>
                        </ol>
                    </nav>
                    <h1 class="h2 mb-4">Sarvangasana Yoga</h1>
                    <h4>Step 1</h4>
                    <p>Lie flat on your back having your hands by the side.</p>
                    <figure class="figure2">
                        <img class="img-fluid" src="../assets/images/sarvangasana/image1.jpg" alt="Sarvangasana Yoga">
                    </figure>
                    <h4>Step 2</h4>
                    <ul class="list-unstyled list-unordered alt mb-3">
                        <li>Lift your legs, back and buttocks with a single movement high above your shoulders. Then
                            support your back properly with your hands.</li>
                        <li>Make sure that you keep straightening your legs and spine gently by pressing your elbows
                            down towards the floor as you keep your hands to the back. </li>
                        <li>Stay in this posture for about 30 to 60 seconds as you keep breathing deeply.</li>
                        <li>When you want to end this posture, gently lower your knees to the forehead. Make sure that
                            you bring the hands to the floor with palms facing down.</li>
                    </ul>
                    <figure class="figure2">
                        <img class="img-fluid" src="../assets/images/sarvangasana/image2.jpg" alt="Sarvangasana Yoga">
                    </figure>
                    <h4>Step 3</h4>
                    <p>Slowly bring the spine down without lifting your head,. Then lower your legs to the surface of
                        the floor.</p>
                    <figure class="figure2">
                        <img class="img-fluid" src="../assets/images/sarvangasana/image3.jpg" alt="Sarvangasana Yoga">
                    </figure>
                    <h4>Step 4</h4>
                    <p>Finally, relax for about 60 seconds.</p>
                    <figure class="figure2">
                        <img class="img-fluid" src="../assets/images/sarvangasana/image4.jpg" alt="Sarvangasana Yoga">
                    </figure>
                </div>
            </section>
        </div>
        <!-- /Content -->
    </div>
   @include('footer')
</body>

</html>